<?php
namespace TDD;
class KerstBorrel {

    public function kostenKerstpakket($aantalPersoneelsleden, $maxBudget) {

        // Kosten voor de drankjes tijdens de kerstborrel.
        $dranken = 8 * (round(0.5 * $aantalPersoneelsleden));

        // Kosten voor de snacks tijdens de kerstborrel.
        $snacks = 2 * (round(6.5 * $aantalPersoneelsleden));

        // Kosten per stuk voor het kerstpakket dat wordt uitgedeeld de kerstborrel
        $kostenKerstpakket = ($maxBudget - $dranken - $snacks) / $aantalPersoneelsleden;

        return round($kostenKerstpakket);

    }
}
?>