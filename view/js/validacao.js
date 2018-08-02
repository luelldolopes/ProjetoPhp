function validar(formulario){

    if(form.nome.value == ""){
        alert('Por favor, preencha o campo nome');
        document.getElementById("nome").focus();
        return false
    }else{
        if(form.email.value == "" || form.email.value.indexOf('@')==-1 || form.email.value.indexOf('.')==-1 ){
            alert('Por favor, preencha o campo email corretamente');
            document.getElementById("email").focus();
            return false
        }else{
            for(i=0;i<=formulario.length-1;i++){

                if ((formulario[i].value=="")&&(formulario[i].title!="")){
                    if ((formulario[i].type!="button")&&(formulario[i].type!="submit")&&(formulario[i].type!="hidden")){
                        alert(formulario[i].title);
                        formulario[i].focus();
                        return false;
                    }
                }
            }
                formulario.ok.value='true';
                formulario.submit();
        }
    }
}
