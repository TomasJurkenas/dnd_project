let lemposBusena = false;
let lempa = document.getElementById('lempute');

function toggleLamp() {
    if (lemposBusena) {

        lempa.alt="off";
    }else{

        lempa.alt="on";
    }
    lemposBusena = !lemposBusena;
}
// let a = 3;
// let b = 7;
//
// function sudetis (a,b) {
//     return a + b;
// }

// console.log(sudetis(a,b));
//
// didinimas =document.getElementsByClassName('rezultatai');
// let a = 3;
// function  didinimas (){
//     for ( let i=0; i>=4; i++){
//           a++;
//     }
//
// }

let skirtukai = document.getElementsByClassName('tabVid')
function change(div_name){
    for ( let i=0; skirtukai.length>i; i++){
    skirtukai[i].style.display="none"
    }
document.getElementById(div_name).style.display="block";

}

