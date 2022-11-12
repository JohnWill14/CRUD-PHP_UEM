var url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome"
var options = document.getElementById("uf");

                                
function getOption(value, sigla){
    return `<option value="${sigla}">${value}</option>`;
}

function getOptionSelected(value, sigla){
    return `<option value="${sigla}" selected>${value}</option>`;
}

var options = document.getElementById("uf");
var ufValue = document.getElementById("uf-value");

fetch(url)
.then((data)=>data.json())
.then(function(data) {
    data.forEach((e)=>{
        if(ufValue != undefined&&ufValue.value==e.sigla){
            options.innerHTML += getOptionSelected(e.nome, e.sigla);
        }else{
            options.innerHTML += getOption(e.nome, e.sigla);
        }
    });
});
