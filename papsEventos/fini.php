<?php
session_start();
include("database.php"); 
?>

<!DOCTYPE html>
<html>

<head>
	<title>SOLD-OUT</title>
	<link rel="shortcut icon" sizes="96x96" type="image/png" href="/img/plage.png">
	<link rel="stylesheet" href="styles.css">
</head>

<?php
function number_place($pdo)
{
	$query = $pdo->prepare("SELECT COUNT(*) as c from paps_eventos");
	$query->execute();
	$result = $query->fetch();
	return $result['c'];
}
if (number_place($pdo) < $_SESSION["total_places"]) {
	if ($_SESSION["isConnected"]) {
		header("Location: /papsEventos/index.php");
	} else {
		header("Location: /papsEventos/connexion.php");
	}
}
if ($_SESSION['shotgun']) {
	header("Location: /papsEventos/index.php");
}
?>

<body class='align'>
    <div class="grid">
        <div class="message">
            <div class="soldout_ctnr">
                <h1 id="soldout_title">SOLD-OUT</h1>
                <p> Désolé <?php echo $_SESSION["prenom"]; ?>! <br />
                    Le monde appartient à ceux qui se lèvent tôt... <br />
                    Vérifie si tu as shotgun en cliquant sur recharger:
                </p>
            </div>
        </div>
        <div class="form__field">
            <div href="#" onClick="window.location='index.php'" id="reload" class="button-submit" style="margin-top:20px;">&#8635; Recharger</div>
        </div>
        <div class="form__field">
            <div href="#" onClick="window.location='logout.php'" id="reload" class="button-submit" style="margin-top:20px;">Se Déconnecter</div>
        </div>
    </div>

</body>

</html>