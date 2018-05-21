<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class indexTest extends TestCase
{
    public function testEqualityTrue() {
        echo "\n";
        echo "testing equality... \n";
        try {
            $this -> assertEquals(2,2);
            echo "test succeded \n";
        } catch (Exception $e) {
            echo "test failed \n";
        } 
   }

    public function testEqualityFalse() {
        echo "\n";
            $this -> assertEquals(4,4);
    }
}