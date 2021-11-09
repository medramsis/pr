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
    


    <title>page3</title>
</head>
<body >
    <form action="jsFormFinal.html"   id="survey-form">

    <div class="class">
        <fieldset>
  Bonjour , <span id=span1></span> 
    <span id=span2></span>
        
    </fieldset>

        <div class="form-group">
            <p> Avez-vous été pleinement satisfait du service et pensez-vous que vous allez continuer à l'utiliser ? </p>
            <label for="oui">
              <input id="oui" type="radio" name="avisservice" checked>
              oui
            </label>

            <label for="non">
              <input id="non" type="radio" name="avisservice" >
               non
            </label>

            <label for="hesite">
              <input id="hesite" type="radio" name="avisservice" >
             j'hésite
            </label>
          </div>

          <div class="form-group">
            <p> Sur un échelle de 5, à combien recommenderiez-vous Free Up Coaching à un proche ? </p>
            <label for="inter">
            
                <input id="int" type="radio" name="environnement" value="1" checked>
                1 
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
                  5 
                </label>
  

          </div>

          <div class="form-group">
            <p> Auriez-vous des remarques ou suggestions d’amélioration ? </p>
            <label for="rem">
              <textarea name="remarque" id="rez" cols="30" rows="10" placeholder="exprimez-vous"></textarea>
            </label>
          </div>


          <div class="form-group">
            <button type="submit" class="btn btn-outline-warning" > Submit </button>
          </div>
          
<script >
  
              /*FOnction qui permet de recuperer la valeur d'un cookie*/
/*FOnction qui permet de recuperer la valeur d'un cookie*/
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
</script>
    </form>
     
</body>

</html>
