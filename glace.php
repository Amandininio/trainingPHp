<?php
$chosenParfums=[];
$chosenCornet="";
$chosenSupplements=[];
$ingredients = [];
$price = 0;
if( isset($_GET['parfums'])){
    $chosenParfums = $_GET['parfums'];
};
if( isset($_GET['cornet'])){
    $chosenCornet = $_GET['cornet'];
};
if( isset($_GET['supplements'])){
    $chosenSupplements = $_GET['supplements'];
};
$parfums = [
    'fraise' => 4,
    'chocolat' => 5,
    'vanille' => 3
];

$cornet = [
    'Pot' => 2,
    'cornet' => 3,
];

$supplements = [
    'Pepites de chocolat' => 1,
    'Chantilly' => 1,
];


foreach($chosenParfums as $parfum){
    $ingredients[] = $parfum;
    $price += $parfums[$parfum];
}

$ingredients[] = $chosenCornet;
$price += $cornet[$chosenCornet];

foreach($chosenSupplements as $supplement){
    $ingredients[] = $supplement;
    $price += $supplements[$supplement];
}
 

require 'header.php';
require_once 'functions.php';
?>
<div class="row">
    <div class="col-md-4 offset-md-1">
    Votre Glace : 
    <ul>
        <?php 
            foreach($ingredients as $ingredient){
                echo "<li> $ingredient </li>";
            }
            echo $price;
        ?>
    </ul>
    </div>
    <div class="col-md-6">
        <form action="./glace.php" method="GET" >
            <div class="form-group">
                <h2> Parfums </h2>
                <?php generateChkboxIntoForm('parfums[]', $parfums, $chosenParfums)?>
                <h2> Cornet</h2>
                <?php generateRadioIntoForm('cornet', $cornet, $chosenCornet) ?>
                <h2> Supplément</h2>
                <?php generateChkboxIntoForm('supplements[]', $supplements, $chosenSupplements)?>
            </div>
                <button type="submit" class="btn btn-primary mt-3"> Miam 🍧 </button>
        </form>
    </div>
</div>



<pre>
    <?php var_dump($_POST)?>
</pre>
<pre>
    <?php var_dump($_GET)?>
</pre>

<? require 'footer.php' ?>