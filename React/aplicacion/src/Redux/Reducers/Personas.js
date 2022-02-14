
const estadoinicial={
    personas:[
        {
            nombre:"Felix",
            apellido:"Romero",
            id:1,
        },
        {
            nombre:"Eduardo",
            apellido:"Romero",
            id:2,
        },
        {
            nombre:"Lorenzo",
            apellido:"Lamas",
            id:3,
        },
    ],
    padron:[],
}



const Poblacion=(state=estadoinicial,action)=>{
    switch(action.type){
        case "AGREGAR_AL_PADRON":
            return{
                ...state,
                padron:state.padron.concat(action.persona),
                personas:state.personas.filter(g=>g.id!==action.persona.id)
            }
        case "ELIMINAR_DEL_PADRON":   
             return{
              ...state,
                 personas:state.personas.concat(action.persona),
              padron:state.padron.filter(p=>p.id!==action.persona.id)
             }
        default:  
            return state;
    }
    

   
    
};
export default Poblacion;