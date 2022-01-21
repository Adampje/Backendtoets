<?php 

namespace TDD;

include("./KerstBorrel.php");
include("./KerstBorrelTest.php");

$kerstborrel = new KerstBorrel();

$aantalPersoneelsleden = 21;
$maxBudget = 5000;

?>
<div class="container" style="text-align:center;">
    <h1>Unit PHP</h1>
    <h4>Er komen op de kerstborrel <?= $aantalPersoneelsleden; ?> personeelsleden en het maximale budget wat is <br> gereserveerd
    voor de kerstborrel is: <?= $maxBudget; ?> euro. 
    Het bedrag wat we dan kunnen besteden voor een kerstpakket <br> bedraagt dan: <?= $kerstborrel->kostenKerstpakket($aantalPersoneelsleden, $maxBudget);?> euro. </h4>

</div>