function buscarEndereco(){

    let cep = document.getElementById("CEP").value.replace(/\D/g, '');
     
    
    if (cep.length !== 8) {
        alert("Digite um CEP válido!");
        return;
    }

    console.log(cep);

    fetch(`/buscar-cep/${cep}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert("CEP não encontrado!");
            } else {
                document.getElementById("Rua").value = data.logradouro || "";
                document.getElementById("bairro").value = data.bairro || "";
                document.getElementById("cidade").value = data.localidade || "";
                document.getElementById("estado").value = data.uf || "";
               
            }
        })
        .catch(error => console.error("Erro ao buscar CEP:", error));
}