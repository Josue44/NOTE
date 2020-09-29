


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>


<link href="css/styles.css" rel="stylesheet">
<link href="LoginCss/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<br><br><br>	
 <form action="inscription_bd.php" method="POST">		
			<div class=" panel ">


  <div class="box" style="height: 670px; top:-80px">
  <div id="header">
  <h1 id="logintoregister">S'inscrire</h1>
  </div> 
  
    <div class="group">      
      <input class="inputMaterial" type="text" name="nom" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Nom</label>
    </div>
    <div class="group">      
      <input class="inputMaterial" type="text" name="prenom" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Prénom</label>
    </div>

     <div class="group">      
      <input class="inputMaterial" type="text" name="date" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Date de naissance  (aaaa-mm-jj)</label>
    </div>
     <div class="group">      
      <input class="inputMaterial" type="email" name="email" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div>
	    <div class="group">      
      <input class="inputMaterial" type="password" name="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Mot de passe</label>
    </div>
      <div class="group"><label>Votre Image</label>
        <span class="btn btn-info col-xs-6 col-sm-4 col-lg-2">      
           
      
      <br><br>
      <input value"Voter image" class="btn btn-info col-xs-6 col-sm-4 col-lg-2" type="file" name="image" placeholder="Idée Générale" required>

      </span>
      
      
    </div>
    <button name="btn"   type="submit">Enregister</button>
</form>  
  <div id="footer-box" ><p class="footer-text"><a href="index.php"><span class="sign-up" > Se connecter</span></a></p></div>
</div>

	
</body>

</html>
