<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylejs.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    


    <title>page2</title>
</head>
<body>

  
    <form action="jsForm3.php" name="form1" method="post"  id="survey-form">

    <div class="class">
        <fieldset>
  Bonjour <span id=span1></span>
    </fieldset>
    
</div>
            <p> Combien de fois par semaine pratiquez-vous du sport en moyenne ? </p>
            <label for="4-6">
              <input id="4-6" type="radio" name="sportpratic" value="max" checked>
              4-6 fois
            </label>

            <label for="1-3">
              <input id="1-3" type="radio" name="sportpratic" value="mid">
               1-3 fois
            </label>

            <label for="0">
              <input id="0" type="radio" name="sportpratic" value="min">
             jamais
            </label>
          </div>

          <div class="form-group">
            <p> Seriez-vous intéressé(e) par un site Internet e-commerce vous permettant de commander en ligne et par l’intermédiaire de votre club de sport votre matériel sportif ? </p>
            <label for="int">
              <input id="inv" type="radio" name="environnement" value="1" checked>
              1 (Pas du tout intéressant)
            </label>

            <label for="ext">
              <input id="inv" type="radio" name="environnement" value="2">
              2
            </label>

            <label for="noPref">
              <input id="inv" type="radio" name="environnement" value="3">
            3
              </label>

              <label for="ext">
                <input id="inv" type="radio" name="environnement" value="4">
                4
              </label>
              <label for="ext">
                <input id="inv" type="radio" name="environnement" value="5">
                5 (Très intéressant)
              </label>

          </div>

          <div class="form-group">
            <p> Si votre club de sport vous proposait de télécharger une application mobile qui vous permettrait d’être mieux informé (actualité, résultats, horaires, évènements…) et faciliter vos démarches d’inscription, trouveriez-vous cela intéressant ?
            </p>
            <label for="int">
              <input id="inv" type="radio" name="app" value="1" checked>
              1 (Pas du tout intéressant)
            </label>

            <label for="ext">
              <input id="inv" type="radio" name="app" value="2">
              2
            </label>

            <label for="noPref">
              <input id="inv" type="radio" name="app" value="3">
            3
              </label>

              <label for="ext">
                <input id="inv" type="radio" name="app" value="4">
                4
              </label>
              <label for="ext">
                <input id="inv" type="radio" name="app" value="5">
                5 (Très intéressant)
              </label>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-outline-warning" onclick="calcul1(form1),calcul2(form1),calcul3(form1),moy(),getCookie()" > Valider </button>
          </div>


    </form>
     <script>
   function getCookie(name){
    if(document.cookie.length == 0)
      return null;

    var regSepCookie = new RegExp('(; )', 'g');
    var cookies = document.cookie.split(regSepCookie);

    for(var i = 0; i < cookies.length; i++){
      var regInfo = new RegExp('=', 'g');
      var infos = cookies[i].split(regInfo);
      if(infos[0] == name){
           return unescape (infos[1]);
      }
    }
    return null;
  }
/*on insere les valeur de cookies dans les input dont les ID sont 'session-nom' et 'session-prenom'*/
var prenom = document.getElementById('span1').innerHTML = getCookie("_nom");


  function calcul1(form1){
    if (form1.sportpratic[0].checked)
    {
    document.cookie= "_note1=" + parseInt(4);
    }
    else if (form1.sportpratic[1].checked)
    {
    document.cookie= "_note1=" +parseFloat(3);
    }
    else 
    {
    document.cookie= "_note1=" +parseFloat(0);
    }
  }

  function calcul2(form1){
    if (form1.environnement[0].checked)
    {
    document.cookie= "_note2=" + parseInt(1);
    }
    else if (form1.environnement[1].checked)
    {
    document.cookie= "_note2=" +parseFloat(2);
    }
    else if (form1.environnement[2].checked)
    {
    document.cookie= "_note2=" +parseFloat(3);
    }
    else if (form1.environnement[3].checked)
    {
    document.cookie= "_note2=" +parseFloat(4);
    }
    else if (form1.environnement[4].checked)
    {
    document.cookie= "_note2=" +parseFloat(5);
    }
    else 
    {
    document.cookie= "_note2=" +parseFloat(0);
    }
  }

  function calcul3(form1){
    if (form1.app[0].checked)
    {
    document.cookie= "_note3=" + parseInt(1);
    }
    else if (form1.app[1].checked)
    {
    document.cookie= "_note3=" +parseFloat(2);
    }
    else if (form1.app[2].checked)
    {
    document.cookie= "_note3=" +parseFloat(3);
    }
    else if (form1.app[3].checked)
    {
    document.cookie= "_note3=" +parseFloat(4);
    }
    else if (form1.app[4].checked)
    {
    document.cookie= "_note3=" +parseFloat(5);
    }
    else 
    {
    document.cookie= "_note3=" +parseFloat(0);
    }
  }

  function moy(){
    var note = parseInt(getCookie('_note1'));
  var note = note + parseInt(getCookie('_note2'));
  var note = note + parseInt(getCookie('_note3'));
  document.cookie ="note=" +note;
  }
   </script>
</body>

</html>
