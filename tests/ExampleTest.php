<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $name='Ariel Alcocer';
        $mail='admin@style.net';
        $user=factory (\App\User::class)->create(['name'=>$name,'email'=>$mail]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see($name)
             ->see($mail);

             /*la funcion see es -->esperemos ver en el nombre $name y el el correo $mail
             |la funcion visit hace una peticion get a la aplicacion.
             |see funcion que afirma que deberiamos ver el texto que figura en la respuesta que debuelve la aplicacion.
             |actionAs() funcion que te ayuda a autentificarse*/
    }
}
