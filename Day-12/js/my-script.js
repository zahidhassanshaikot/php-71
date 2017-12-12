var redBtnelement=document.getElementById('redBtn');
redBtnelement.onmouseover=function () {
    var divOneElement=document.getElementById('divOne');
    // divOneElement.style.backgroundColor='red';
    divOneElement.className='class-one';
};
var greenBtnelement=document.getElementById('greenBtn');
greenBtnelement.onmouseover=function () {
    var divOneElement=document.getElementById('divOne');
    // divOneElement.style.backgroundColor='green';
    divOneElement.className='class-two';
};
var blueBtnelement=document.getElementById('blueBtn');
blueBtnelement.onclick=function () {
    var divOneElement=document.getElementById('divOne');
    // divOneElement.style.backgroundColor='blue';
    divOneElement.className='class-three';
};
var defaultBtnelement=document.getElementById('defaultBtn');
defaultBtnelement.onclick=function () {
    var divOneElement=document.getElementById('divOne');
    // divOneElement.style.backgroundColor='white';
    divOneElement.className='my-style';
};

//     var btnSubmit=document.getElementById('btn');
//
// btnSubmit.onclick=function () {
//    var sNumberValue =Number(document.getElementById('sNumber').value);
//    var eNumberValue =Number(document.getElementById('eNumber').value);
//     var res='';
//    for(sNumberValue;sNumberValue<=eNumberValue;sNumberValue++){
//        res+=sNumberValue;
//
//    }
//     document.getElementById('result').value=res;
// };
