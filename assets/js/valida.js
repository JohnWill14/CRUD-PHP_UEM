var error = [];
$("#cad").click(function(){
    error = [];
     if($("#nome").val()==""){
         error.push("Campo nome nao pode ser vazio")
     }

    if($("#endereco").val()==""){
        error.push("Campo endereco nao pode ser vazio")
    }
 
    if($("#numero").val()==""){
        error.push("Campo numero nao pode ser vazio")
    }

    if($("#uf").val()==""){
        error.push("Campo uf nao pode ser vazio")
    }

    if($("#tipo").val()!="1"&&$("#tipo").val()!="2"){
        error.push("Campo tipo nao pode ser vazio")
    }

    if($("#numerodoc").val()==""){
        error.push("Campo numero do documento nao pode ser vazio")
    }

    if($("#cidade").val()==""){
        error.push("Campo cidade do documento nao pode ser vazio")
    }

    if($("#cidade").val()==""){
        error.push("Campo cidade do documento nao pode ser vazio")
    }
    
 
     if(error.length > 0){
         let resp="";
        
         error.forEach((v) =>{
            resp +="<li>"+v+"</li>";
         }
         )

         $("#disney")
             .html(resp);
             
     }else{
 
         $("#disney")
         .hide();
     }
         
 });

 function validarForm(){
    var resp = error.length == 0;
    return resp;
 }


 const formato = {

  phone (value) {

    return value

      .replace(/\D/g, '')

      .replace(/(\d{2})(\d)/, '($1)$2')

      .replace(/(\d{4})(\d)/, '$1-$2')

      .replace(/(\d{4})-(\d)(\d{4})/, '$1$2-$3')

      .replace(/(-\d{4})\d+?$/, '$1')

  }

}

 

document.querySelectorAll('input').forEach(($input) => {

  const field = $input.dataset.js

  $input.addEventListener('input', (e) => {

    e.target.value = formato[field](e.target.value)

  }, false)

})