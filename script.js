var nomc = document.getElementById("nom").value;
function creerCookie(nom,valeur,jour){

  if(jour){
    var date=new Date();
    date.setTime(date.getTime()+(jour*24*60*60*1000));
    var exp='expires='+date.toUTCString();
  }
  else{
    var exp='';
  }
  document.cookie=nom+'='+valeur+exp+';path=/';
}

function lireCookie(nom){
  var nometEgal=nom+'=';
  var ctab=document.cookie.split(';');
  for(var i=0;i<ctab.length;i++){
    var c=ctab[i];

    while(c.charAt(0)==' '){
      c=c.substring(1,c.length);
    }
    if(c.indexOf(nometEgal)==0){
      return c.substring(nometEgal.length,c.length);
    }
  }
}

function afficher(){
  var nomc = document.getElementById("nom").value;
  creerCookie('CookieNom',nomc,7);
alert('Bonjour '+lireCookie('CookieNom'));

}
  
  
 function download_csv() {
   var data = [
    ['nom :',document.getElementById('nom').value],
    ['prenom :', document.getElementById('prenom').value],
    ['email :', document.getElementById('email').value]
 ];
     var csv = 'donnes,valeur\n';
     data.forEach(function(row) {
             csv += row.join(',');
             csv += "\n";
     });
  
     console.log(csv);
     var hiddenElement = document.createElement('a');
     hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
     hiddenElement.target = '_blank';
     hiddenElement.download = 'donnnes.csv';
     hiddenElement.click();
 }


 function formCheck() {
  var arr = [];
  var input = document.getElementById('nom').value;
  var input2 = document.getElementById('prenom').value;
  var input3 = document.getElementById('age').value;
  var input4 = document.getElementById('email').value;
  var input5 = document.getElementById('tel').value;
  var val1 = input.length;
  var val2 = input2.length;
  var val3 = input3.length;
  var val4 = input4.length;
  var val5 = input5.length;

 if (val1 > 0 ) {
   document.getElementById('nom').style.border = "1px solid #e6e6e6";
   input = true;
   arr.push(input);
 } 
  
  else {
   document.getElementById('nom').style.border = "1px solid #ff4500";
 }
  
  if (val2 > 0 ) {
   input2 = true;
   arr.push(input2);
   document.getElementById('prenom').style.border = "1px solid #e6e6e6";
 } 
  
  else {
   document.getElementById('prenom').style.border = "1px solid #ff4500";
 }
 if (val3 > 0 ) {
  input3 = true;
  arr.push(input3);
  document.getElementById('age').style.border = "1px solid #e6e6e6";
} 
 
 else {
  document.getElementById('age').style.border = "1px solid #ff4500";
}
if (val4 > 0 ) {
  input4 = true;
  arr.push(input4);
  document.getElementById('email').style.border = "1px solid #e6e6e6";
} 
 
 else {
  document.getElementById('email').style.border = "1px solid #ff4500";
}
if (val5 > 0 ) {
  input5 = true;
  arr.push(input5);
  document.getElementById('tel').style.border = "1px solid #e6e6e6";
} 
 
 else {
  document.getElementById('tel').style.border = "1px solid #ff4500";
}
  
  if(arr.length == 5) {
    console.log("form submitted");
    document.getElementById('demo3').innerHTML = "<p>Form Submitted</p>";
  } else {
    document.getElementById('demo3').innerHTML = "<p>Missing information!</p>";
  }
}

