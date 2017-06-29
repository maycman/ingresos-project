<?php

#use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Session\Middleware\StartSession;
use App\Ingreso;

class AdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    #use WithoutMiddleware;
    public function testPagPrincipal()
    {
    	$this->visit("/")
    		->see("Administración de ingresos");
    }
    public function testCapturarIngreso()
    {
        $this->visit("/")
            ->click("Registrar Ingreso")
            ->seePageIs("capturar")
            ->see("Concepto")
            ->see("Monto")
            ->press("Guardar")
            ->seePageIs("capturar");
            /*->seeInDataBase('ingreso', [
                'fecha_alta' => '04/26/2017',
                'concepto' => 'uno',
                'monto' => '1'
            ]);*/
    }
    public function testRemoverIngreso()
    {
        /*$this->visit("/")
            ->press("Eliminar")
            ->seeIsPage("/");*/
    }
}