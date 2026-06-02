var AreaTotal = 9;
if (AreaTotal > 10 ){
    console.log("Area >=10");
}else{
    console.log("Area <=10");
}

document.getElementById("formulario").addEventListener("submit",function(event){

event.presentDefault();
});
