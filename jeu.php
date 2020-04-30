<?php
/* partie logique */
$aDeviner = 150;
$guessedNumber = null;
$error = null;
$success = null;
if(isset($_GET['guessedNumber'])){ 
    
}
 if(isset($_GET['guessedNumber'])){
    $guessedNumber = htmlentities($_GET['guessedNumber']);

    if($guessedNumber > $aDeviner){
        $error = "votre chiffre est trop grand";
    }
    elseif($guessedNumber < $aDeviner){
        $error = "votre chiffre est trop petit";
    }
    else{
        $success = "Bravo ! Vous avez deviné le chiffre $aDeviner";
    }
}

require 'header.php';
?>

<!-- partie VUE, minimum de conditions -->

<?php if ($error):?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php elseif ($success):?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
<?php endif ?>

<form action="./jeu.php" method="GET" class="m-5">
    <div class="form-group">
        <input type="number" name="guessedNumber" class="form-control" placeholder="entre 0 et 1000" value="<?=$guessedNumber ?>">
        <button type="submit" class="btn btn-primary mt-3"> Deviner </button>
    </div>
</form>
<? require 'footer.php' ?>