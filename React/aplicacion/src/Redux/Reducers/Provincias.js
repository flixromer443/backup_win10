import Traer, { BUSCAR_PROVINCIA, } from "../Actions/Reduxt";

const estadoinicial={
    provincia:[],
};
const Provincias=(state=estadoinicial,action)=>{
   
   switch(action.type){
       case BUSCAR_PROVINCIA:
         let datos=Traer(action.payload);
         return{
             ...state,
             provincia:state.provincia.concat(datos.provincias)
         }
         
        default:
            return state;
   }
    
}
export default Provincias;