import React, { useState } from 'react';
import { connect } from 'react-redux';

function Buscar({res,Buscar}){
    const[palabra,ingresarpalabra]=useState("buenos aires");
    console.log(res)
  
    return(
        <div>
            <form>
                <input type="text" 
                        placeholder="Buscar..." 
                        onChange={(e)=>ingresarpalabra(Buscar(e.target.value))} />   
                <input type="button" value="Buscar" onClick={()=>Buscar(palabra)} />
              
            </form>
        </div>
    );
}
const mapstatetoprops=(state)=>{
    return{
        res:state.Provincias
    }
}

const mapdispatchtoprops=(disptach)=>({
    Buscar(palabra){
        disptach({
            type:"BUSCAR_PROVINCIA",
            payload:palabra
        })
    }
})

export default connect(mapstatetoprops,mapdispatchtoprops)(Buscar);