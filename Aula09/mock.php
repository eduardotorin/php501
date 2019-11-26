<?php

use PHPUnit\Framework\TestCase;

class AlgumaClasse
{
    public function fazAlgo()
    {
        //Funcao a implementar
    }
    public function retornaNumero()
    {
        //Funcao a implementar
    }
}

class Mock extends TestCase
{
    public function testMock()
    {
        $duble = $this->createMock(AlgumaClasse::class);

        $duble->method('FazAlgo')
            ->willReturn('foo');
        
        $duble->method('retornaNumero')
            ->willReturn(5);

        $this->assertSame('foo',$duble->fazAlgo(),"Nao fez algo");
        $this->assertEquals(5,$duble->retornaNumero());
    }
}