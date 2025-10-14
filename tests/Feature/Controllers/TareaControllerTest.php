<?php

use App\Models\Tarea;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);
test('muestra listado de tareas', function () {
    $tarea=Tarea::factory()->create();  
    
    $this->get(route('tarea.index'))
        ->assertSeeInOrder(['Titulo','Acciones'])
        ->assertSee($tarea->titulo)
        ->assertStatus(200);

});

test('muestra formulario de creacion de tarea', function () {

    $this->get(route('tarea.create'))
        ->assertSeeInOrder(['Creacion Tarea','Titulo','Descripcion','Guardar'])
        ->assertStatus(200);
});
test('Verifica errores al crear tarea', function () {
    $tarea=Tarea::factory()->make([
        'titulo'=>'',
        'descripcion'=>'nada'
    ]);
    #verifica que no se guarde la tarea y que muestre errores
    $this->post(route('tarea.store'),$tarea->toArray())
        ->assertInvalid(['titulo','descripcion']);
    #verifica que no se guarde la tarea en la base de datos
    $this->assertDatabaseMissing('tareas',[
        'titulo'=>$tarea->titulo,
        'descripcion'=> $tarea->descripcion,
    ]);
    /*$this->assertDatabaseHas('tareas',[
        'titulo'=>$tarea->titulo,
        'descripcion'=> $tarea->descripcion,
    ]);
    $this->get(route('tarea.index'))
        ->assertSee($tarea->titulo);*/

});

