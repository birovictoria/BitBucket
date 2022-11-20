<?php

session_start(); 
$error = "";
$msg = "";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quick Quiz</title>
    <p>A név megadása után ki lehet tölteni kvízünkket</p>
    <label id="nev">Add mega neved</label>
    <input type="text" placeholder="név"></input>
    <input type="submit" value="Bejelentkezés" name="submitLogin">
   <!-- <?php

    if (isset($_POST["submitReg"])){
        $name = trim($_POST["name"]);
        if(!empty($name)){
           try{$queryNewUser = $conn->prepare($sql);
			$queryNewUser->bindParam("name",$name,PDO::PARAM_STR);
            $queryNewUser->execute();
			$msg .= "Regisztráció sikerült, jelentkezzen be!";
		}
		catch (PDOException $e){
			$error = "Regisztráció mentési hiba: ".$e->getMessage();
		}
        }
      }
        ?>
   
<?php

    if (!empty($_SESSION["user"])){	
      echo "<p>Üdvözlünk oldalunkon ".$_SESSION["user"]["name"]."</p>";
      echo "<p><a href='index.php'>Profil</a></p>\n";
      echo "<form method='post' action='".htmlspecialchars($_SERVER["PHP_SELF"])
      ?> 
    <link rel="stylesheet" href="app.css" />
  </head>-->
  <body>
    <div class="container">
      <div id="home" class="flex-center flex-column">
        <h1>Quick Quiz</h1>
        <a class="btn" href="/game.html">Play</a>
        <a class="btn" href="/highscores.html">High Scores</a>
        <ul>
          <li><a href="game.html">Kvízek</a></li>
          <li><a href="highscores.html">High Score</a></li>
         
      </div>
    </div>
    </body>
    </html>