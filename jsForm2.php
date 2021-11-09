<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylejs.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    


    <title>page2</title>
</head>
<body>

  
    <form action="jsForm3.php" method="post"  id="survey-form">

        <div class="form-group">
        <div class="class">
        <fieldset>
  Bonjour , <span id=span1></span> 
    <span id=span2></span>
        </br>
   
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
              <input id="int" type="radio" name="environnement" value="1" checked>
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
              <input id="int" type="radio" name="app" value="1" checked>
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
            <button type="submit" class="btn btn-outline-warning" onclick="getCookie()" > Submit </button>
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
  var prenom = document.getElementById('span1').innerHTML = getCookie('_prenom');    
   </script>
</body>

</html>
