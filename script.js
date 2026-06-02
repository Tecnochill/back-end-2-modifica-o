var AreaTotal = 9;
if (AreaTotal > 10 ){
    console.log("Area >=10");
}else{
    console.log("Area <=10");
}

document.getElementById("formulario").addEventListener("submit",function(event){

event.presentDefault();

    if(nome===""){
        alert("preencha o primeiro nome");
        return;
    }

    if(sobrenome===""){
        alert("preencha seu sobrenome");
        return;    
    }
});
