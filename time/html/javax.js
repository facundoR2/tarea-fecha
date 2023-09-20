let btonf1 = document.getElementById("#bton1");
let btonf2 = document.getElementById("#bton2");
let btonf3 = document.getElementById("#bton3");
let btonf4 = document.getElementById("#bton4");

let valor = 0;
function mandarA(valor){
    if (valor=1){
        window.location.href="http://localhost/time/time.php";

    }if(valor=2){
        window.location.href="https://localhost/time/getdate.php";
        
    }if(valor=3){
        window.location.href="https://localhost/time/d2date.php";
            
    }if (valor=4){
        window.location.href="https://localhost/time/checkdate.php";
    }
    
}
btonf1.addEventListener("click",function(){
    valor=1;
    mandarA(valor);

});
    

btonf2.addEventListener("click",function(){
    valor=2;
    mandarA(valor);

});
btonf3.addEventListener("click",function(){
    valor=3;
    mandarA(valor);

});
btonf4.addEventListener("click",function(){
    valor=4;
    mandarA(valor);

});