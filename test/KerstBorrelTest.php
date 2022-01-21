<?php 
namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use PHPUnit\Framework\TestCase;
use TDD\KerstBorrel;



class KerstBorrelTest extends TestCase {
    public $kerstborrel;

    public function setUp() {
        $this->kerstborrel = new KerstBorrel();
    }

    public function tearDown() {
        unset($this->kerstborrel);
    }

    public function testKostenKerstpakket($aantalPersoneelsleden, $maxBudget, $expected) {
        $output = $this->kerstborrel->kostenKerstpakket($aantalPersoneelsleden, $maxBudget);
        $this->assertEquals(
            $expected,
            $output,
            "De kosten van het kerstpakket zijn $expected"
        );
    }

    public function provideKostenKerstpakket() {
        return [
            [21, 5000, 238],
            [32, 8000, 235],
            [1, 200, 94],
            [32, 6000, 117],
            [16, 1500, 85],
            [1, 8000, 6808],
            [4, 200, 38],
            [-1, 9000, -5000],

            
        ];
    }
}

?>