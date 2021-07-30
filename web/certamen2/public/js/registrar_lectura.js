const cargarMedidor = async()=>{
    let medidor = await axios.get("api/marcas/get");
    let medidor = resultado.data;
    //2. Cargar las marcas dentro del select
    let medidorSelect = document.querySelector("#medidor-select");
    medidor.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medidorSelect.appendChild(option);
    });
    
};

cargarMedidor();