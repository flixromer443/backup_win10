import{ combineReducers, createStore, applyMiddleware} from 'redux'
import Poblacion from './Reducers/Personas'
import Provincias from './Reducers/Provincias';
import thunk from 'redux-thunk';

const Reductores=combineReducers({
    Poblacion,
    Provincias

})

const Store=createStore(Reductores,applyMiddleware(thunk));
export default Store;