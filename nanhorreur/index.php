<?php
session_start();

include("auth.php"); 
include("database.php");
//  //
	//
	// $_SESSION["isConnected"] = true;
	// // $_SESSION["is_cotisant"]=true;
	// // $_SESSION['shotgun']=true;
	// $_SESSION['login']='2021goulletba';
	// $_SESSION["user"]=array(
	// 	'firstName'=>'Bastien',
	// 	'lastName'=>'de Rugy',
	// 	'email'=>'bastien.goullet-de-rugy@student-cs.fr',
	// 	'promo'=>'2024',
	// );

	//
// 	//

function number_place($pdo)
{
	// Checks the number of places still available to shotgun
	$query = $pdo->prepare("SELECT COUNT(*) as c from nanhorreur");
	$query->execute();
	$result = $query->fetch();
	return $result['c'];
}


function has__already_shotgun($email, $pdo)
{
	//  Checks if email already shotgun, return 1 if true and 0 else
	$query = $pdo->prepare("SELECT COUNT(*) as c from nanhorreur where email=?");
	$query->execute(array($email));
	$result = $query->fetch();
	if ($result['c'] == 0) {
		return false;
	} else {
		return true;
	}
}


function is_cotisant($email, $pdo)
{
	$query = $pdo->prepare("SELECT COUNT(*) as c from cotisants where email=?");
	$query->execute(array($email));
	$result = $query->fetch();
	if ($result['c'] == 0) {
		return false;
	} else {
		return true;
	}
}

$_SESSION["prenom"] = $_SESSION["user"]["firstName"];
$_SESSION["nom"] = $_SESSION["user"]["lastName"];
$_SESSION["email"] = $_SESSION["user"]["email"];

$_SESSION['total_places'] = 450;
$_SESSION['shotgun'] = has__already_shotgun($_SESSION["email"], $pdo);
$_SESSION["is_cotisant"] = is_cotisant($_SESSION["email"], $pdo);

if ($_SESSION["email"] == '???') {
	header("Location: /nanhorreur/troll.php");
}

// if (isset($_SESSION["preshotgun"]) && $_SESSION["preshotgun"]) {
// 	// Si dans la liste de préshotgun -> shotgun direct, en vrai pas super utile...
// 	$url = "https://adr.cs-campus.fr/nanhorreur/action.php";
// 	header("Location: ".$url);
//   }

if (number_place($pdo) >= $_SESSION['total_places'] and !$_SESSION['shotgun']) {
	if ($_SESSION["isConnected"]) {
		header("Location: /nanhorreur/fini.php");
	} else {
		header("Location: /nanhorreur/connexion.php");
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<title>NAN'HORREUR</title>
	<meta name="google-site-verification" content="cEbrs-eyoHMLzEcQwiEu5sHkC8N61J92Z_fElR1KTMQ" />
	<!-- <meta property="og:image" content="https://adr.cs-campus.fr/nanhorreur/img/fb_banner.jpg" /> -->
	<link rel="shortcut icon" sizes="96x96" type="image/png" href="/nanhorreur/img/iconPumpk.png">
	<link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

<body onload="onLoad()">
<div id="titreNanhorreur">NAN'HORREUR</div>
<div id="sg_link_ctnr">
		<?php
		if (!$_SESSION['shotgun']) {
			echo '<a id="sg_link" class="degraMov link" href="action.php" >SHOTGUN</a></div>';
		} 
		else {
			echo '<div id="depaps" ><a id="sg_link" class="degraMov link"  href=# onClick="verif();">DEPAPS</a></div></div>';
			echo '<div id="qrLink"><a  href="/nanhorreur/QRgenerator.php" >Voir mon QR code</a></div>';
		}
		?>
	<div id="titre_sg"></div>
	<div id="counter">
		<!-- <div class="digit_holder months" id="mois">
			<p class="chiffre">00</p>
			<p class="text">mois(s)</p>
		</div> -->
		<div class="digit_holder days" id="jours">
			<p class="chiffre">00</p>
			<p class="text">jours</p>
		</div>
		<div class="digit_holder hours" id="heures">
			<p class="chiffre">00</p>
			<p class="text">heures</p>
		</div>
		<div class="digit_holder minutes" id="minutes">
			<p class="chiffre">00</p>
			<p class="text">minutes</p>
		</div>
		<div class="digit_holder seconds" id="secondes">
			<p class="chiffre">00</p>
			<p class="text">secondes</p>
		</div>
		<!-- <img src="img/soclePanneau.png" alt="teneur de panneau" id="panneau"> -->
	</div>
	

	<?php
	
	if (!$_SESSION['shotgun']) {
		if (!$_SESSION["is_cotisant"]) {
			echo "<p id='danger_msg_ctnr'><span style='color:red;'>ATTENTION !!</span> <br/> Tu n'est pas cotisant, tu NE POURRAS PAS SHOTGUN!!</p>";
		} else {
			echo "<p id='ok_msg_ctnr'> Salut " . $_SESSION["prenom"] . "! <br> Tu es bien cotisant, tu vas pouvoir Shotgun! </p>";
		}
	} else {
		echo "<p id='ok_msg_ctnr'> Bravo " . $_SESSION["prenom"] . "! <br> Tu as réussi à shotgun ta place pour le NAN'HORREUR. </p>";
	}
	if (!$_SESSION['shotgun']) {
			echo '<p id="footer">Pas besoin de recharger la page au moment du shotgun!</p>';
			
		} 
	?>

	<?php include("script.php"); 
	if (!$_SESSION["is_cotisant"] && isset($_SESSION['prev_page']) && $_SESSION['prev_page'] == "action.php") {
		// Pour ceux qui ont cliqué sur shotgun et qui ne sont pas cotisants
		echo "<script>alert(\"Tu n'es pas cotisant desolé... \")</script>";
		$_SESSION['prev_page'] = "index.php";
	}
	?>
	<script type="text/javascript">
		function shotgun() {
			window.location = 'action.php';
		}

		function verif() {
			if (confirm("ATTENTION: En cliquant sur OK, tu annules ta place et la remets en jeu.")) {
				window.location = 'action.php';
			}
		}
	</script>

</body>

</html>