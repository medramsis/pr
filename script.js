    
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


