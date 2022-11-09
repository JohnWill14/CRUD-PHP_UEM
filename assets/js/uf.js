var url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome"
var options = document.getElementById("uf");

fetch(url)
.then((data)=>data.json())
.then(function(data) {
    data.forEach((e)=>{
        options.innerHTML += getOption(e.nome, e.sigla);
    });
});                                
function getOption(value, sigla){
    return `<option value="${sigla}">${value}</option>`;
}