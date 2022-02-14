import React from 'react'
import { connect } from 'react-redux';
import "../Estilos/App.css";
const Padron=({persona,eliminar})=>(
    <div className="contenedor">
        <h1>Padron</h1>
        {
            persona.map(p=>(
                <section key={p.id} className="persona">
                    <h1>{p.nombre}</h1>
                    <button onClick={()=>eliminar(p)}>Eliminar del padron</button>
                </section>
            ))
        }
    </div>
       
 )

const mapstatetoprops=state=>({
    persona:state.Poblacion.padron
})
const mapdispatchtoprops=dispatch=>({
    eliminar(persona){
        dispatch({
            type:"ELIMINAR_DEL_PADRON",
            persona,
        })
    }
})
export default connect(mapstatetoprops,mapdispatchtoprops)(Padron);