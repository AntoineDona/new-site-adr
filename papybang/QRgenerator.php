<?php
session_start();
if(!isset($_SESSION['isConnected']) or (isset($_SESSION['isConnected']) and !$_SESSION['isConnected'])){
    header('Location: /papybang/index.php');
}
include('database.php');

$sqlQuery = 'SELECT * FROM papybang WHERE email=:email';
$pdoStatement = $pdo->prepare($sqlQuery);
$pdoStatement->execute([
    'email'=>$_SESSION['email'],
]);
$users = $pdoStatement->fetchAll();
$id=$users[0]['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR code</title>
</head>
<body>
    <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&choe=UTF-8&chl=http://adr.cs-campus.fr/actionNano/scanBillet/billet.php?id=<?php echo $id;?>" title="QR code soirée" /> 
    <div id="content" >
        <?php echo '<p>'.$_SESSION['prenom'].' '.$_SESSION['nom'];'</p>'?> 
        <div><a href="/papybang/index.php">Revenir à la page d'avant</a></div>
    </div>

</body>
    <style>
        body{
            text-align:center;
        }
        #content{
            display:flex;
            flex-direction:column;
        }
        #content div,#content p{
            margin:15px;
        }
        a{
        border-radius: 10px;
        background-color:#506AD4 ;
        color:#FFFCE6;
        border:#506AD4;
        padding: 8px 12px;
        text-decoration:none;
    }
    </style>
</html>