<?php
use PHPUnit\Framework\TestCase;
require_once('./src/varios.php');
// require_once('./src/Email.php');
final class variosTest extends TestCase
{

// metohd sumar
    public function testSumar(){
        $this->assertEquals(10 ,varios::sumar(5,5));
    }

    public function testArreglo(){
        $this->assertTrue(is_array(varios::Arreglo()));
    }





//testt
    public function testArregloVacio(){
        $this->assertEmpty([]);
    }


//assertSame : este compara el tipo de valor;
    public function testValor(){
        $this->assertSame(8,varios::valor("8"));
    }

//assertInfinite
//    public function testInf(){
//      $this->assertInfinite(varios::inf());
//    }


//metodo para probar si se instancia un obj
//    public function testIns(){
//        $this->assertSame(Email::class,varios::ins());
//    }


}
?>
