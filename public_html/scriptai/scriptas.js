// let a = 1;
// let kin ="kinatmojo a reiksme :"
// console.log(kin+a)
//
// let b="Tomas Jurkenas"
// let c="mano vardas"
// console.log(c+b)
//
// let metai=1994;
// let menuo=3;
// let diena=20;
// console.log(metai%10+menuo%10+diena%10)

// let n1=3;
// let n2=4;
// let ats=n1+n2;
// document.getElementById('ats').innerHTML = ats;



let a = -5;
let b = 0;
let c = -4;
let d = 4;
let x ;
let y ;

if (a > b || d < c||d<a||c>b) {
    window.alert('sankirta negalima')
} else{

    if (c<=a&& a<= d){
        x=a;

    }
    if(a<=c&&c<=d){
        x=c;
    }
    if(a<=d&&b<=d){
        y=d;
    }
    if(b<=d&&b>=a){
        y=b;
    }

    document.getElementById('ats').innerHTML="rasta sankirta: x:"+x+" y:"+y;
}
let vardas ="Tomas " ;
let varTipas=typeof vardas;
let pavarde ="Tomauskas ";
let pavTipas=typeof pavarde;
let kursas = '4 kurse ';
let kursasTipas= typeof kursas;
let kur_mokosi="KTU ";
let kurTipas=typeof kur_mokosi;
let pazymiu_masyvas=[7,4,5];
let pazTipas= typeof pazymiu_masyvas;


document.getElementById('duomenys').innerHTML= vardas+pavarde+" mokosi "+kur_mokosi+'jo pazymiai: '+pazymiu_masyvas;

document.getElementById("tipas").innerHTML= varTipas+"<br>"+pavTipas+"<br>"+kursasTipas+"<br>"+kurTipas+"<br>"+pazTipas;

document.getElementById("masyvas").innerHTML="taip tai yra masyvas - "+yraMasyvas(pazymiu_masyvas);
function yraMasyvas(pazymiu_masyvas){
    return pazymiu_masyvas.constructor === Array;
}
const studentas= { vardas:'Tomas',pavarde:'Tomauskas', kursas:'4 kurso', mokosi: 'ktu', pazymiai:[7,4,5]}

document.getElementById("objektas").innerHTML=studentas.vardas+" "+studentas.pavarde+" yra is "+studentas.kursas+" jis mokosi-"+studentas.mokosi+" jo pazymiai yra :"+studentas.pazymiai;

const isvestaMas=Object.keys(studentas);
const vertesMas= Object.values(studentas);
const bendrasMas=Object.entries(studentas);

console.log(isvestaMas);
console.log(vertesMas);
console.log(bendrasMas);

// let elementai=document.querySelectorAll('img');
//
// const masyvas= Object.values(elementai);
// console.log(elementai.length);
// document.getElementById("uuid").innerHTML="siame puslapyje yra " + elementai.length +" paveiksleliai";
// // alert(elementai.length);
// let elementai=document.querySelectorAll('img:nth-of-type(2n)');
// for(let i = 0; i <= elementai.length; i++){
//
//
//
// .innerHTML="testas";
// }