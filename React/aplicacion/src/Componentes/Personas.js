import React from 'react'
import { connect } from 'react-redux';
import "../Estilos/App.css";
const Personas=({gente,agregar})=>{
   
    return(
        <div className="contenedor">
            <h1>Personas</h1>
            {
                gente.map(g=>(
                    <section key={g.id} className="persona">
                        <h1 >{g.nombre} </h1>
                        <h2>{g.apellido} </h2>
                        <button onClick={()=>agregar(g)}>Añadir al padron</button>
                    </section>
                    
                    
                ))
            }

        </div>
    );
}
//***ambos maps se tienen que pasar por paramentros al componente***
//*NOTA:Recibo por paramtros el reduducer Poblacion,
//No el array, sino el reducer que llama al array
const mapstatetoprops=state=>({
    gente:state.Poblacion.personas
})
const mapdispatchtoprops=dispatch=>({
    agregar(persona){
        dispatch({
            type:"AGREGAR_AL_PADRON",
            persona
        })
    }
})

export default connect(mapstatetoprops,mapdispatchtoprops)(Personas);