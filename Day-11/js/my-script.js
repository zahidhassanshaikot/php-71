    var btnaddition=document.getElementById('addition');
btnaddition.onclick=function () {
   var fNumberValue =Number(document.getElementById('fNumber').value);
   var sNumberValue =Number(document.getElementById('sNumber').value);
   var result=fNumberValue+sNumberValue;
   document.getElementById('result').value=result;

};

    var btnsub=document.getElementById('sub');
   btnsub.onclick=function () {
   var fNumberValue =Number(document.getElementById('fNumber').value);
   var sNumberValue =Number(document.getElementById('sNumber').value);
   var result=fNumberValue-sNumberValue;
   document.getElementById('result').value=result;

};

    var btnmul=document.getElementById('mul');
btnmul.onclick=function () {
   var fNumberValue =Number(document.getElementById('fNumber').value);
   var sNumberValue =Number(document.getElementById('sNumber').value);
   var result=fNumberValue*sNumberValue;
   document.getElementById('result').value=result;

};

    var btnrem=document.getElementById('rem');
btnrem.onclick=function () {
   var fNumberValue =Number(document.getElementById('fNumber').value);
   var sNumberValue =Number(document.getElementById('sNumber').value);
   var result=fNumberValue%sNumberValue;
   document.getElementById('result').value=result;

};
var btndiv=document.getElementById('div');
btndiv.onclick=function () {
   var fNumberValue =Number(document.getElementById('fNumber').value);
   var sNumberValue =Number(document.getElementById('sNumber').value);
   var result=fNumberValue/sNumberValue;
   document.getElementById('result').value=result;

};


var btnElement=document.getElementById('btn');
btnElement.onclick=function () {
    var fNameValue=document.getElementById('fName').value;
    var lNameValue=document.getElementById('lName').value;
    var fullName=fNameValue+lNameValue;
    document.getElementById('fullName').value=fullName;
}

// var paragrraphElement=document.getElementsByTagName('p');
//
// for(var key in paragrraphElement){
//     document.write(paragrraphElement[key].innerHTML +'<br/>');
// }
//    var a=new Array();
//    var a=Array();

//    var data=[];
//    data[0]=10;
//    data[1]=30;
//    data[2]=20;
//
//    data['name']='moshiur';
//    data['city']='mirpur-10';

//    document.write(data[2])
//var  data=[10, 20, 30, 40];
//document.write(data.length);

//    for(var key in data) {
//        document.write(data[key]+' ')
//    }

//    function demo() {
//        var  fName='Zahid Hasan';
//        var  lName='Shaikot'
//        var  fullName=fName+' '+lName;
//
//        document.write(fullName+'<br/>');
//    }
//    demo();
//    demo();
//    demo();

//function demo(fName,lName) {
//    var  fullName=fName+' '+lName;
//
//    document.write(fullName+'<br/>');
//}
//demo('Zahid Hasan','Shaikot');

