import React from 'react'
import { Link } from 'react-router-dom';
function Navegacion(){
    return(
        <div>
          <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
            <a className="navbar-brand" >Mi aplicacion</a>
            <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarNav">
                <ul className="navbar-nav">
                <Link to="/Componentes/Personas">
                <li className="nav-item active">
                    <a className="nav-link" >Inicio<span class="sr-only">(current)</span></a>
                </li>
                </Link> 
                
                <li className="nav-item">
                <Link to="/Componentes/Padron">    
                    <a className="nav-link">Padron</a>
                </Link>

                </li>
                </ul>
            </div>
            </nav>
        </div>
    )
}
export default Navegacion;