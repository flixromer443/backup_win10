import React from 'react';
import './Estilos/App.css';
import Personas from './Componentes/Personas';
import Padron from './Componentes/Padron';
import Navegacion from './Navegacion';
import { Provider } from 'react-redux';
import Store from './Redux/Store';
import {BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Buscar from './Componentes/Buscar';

function App() {
  return (
    <Provider store={Store}>
      <Router>
        
    <div className="App">
  
      <Navegacion/>
      <Buscar/>
      <Switch>
        <Route path="/Componentes/Personas"><Personas/></Route>
        <Route path="/Componentes/Padron"><Padron/></Route>
      </Switch>
    </div>
   
    </Router>
    </Provider>


  );
}

export default App;
