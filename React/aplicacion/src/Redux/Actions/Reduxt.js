
export const BUSCAR_PROVINCIA="BUSCAR_PROVINCIA";
export const FOUND="FOUND";




const Traer=async(palabra)=>{
        try{
            const url=await `https://apis.datos.gob.ar/georef/api/provincias?nombre=${palabra}`; 
            const res=await fetch(url);
            const datos=await res.json();
            console.log(datos)
            return datos.provincias
        }catch(e){
            console.log(e)
           
        }
   
} 
export default Traer;



