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


