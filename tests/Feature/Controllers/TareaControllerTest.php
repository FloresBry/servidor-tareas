
<?php

use App\Models\Tarea;
uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

    test('Muestra listado de tareas', function (){
        $tarea=Tarea::factory()->create();
        

        $this->get(route('tarea.index'))
            ->assertSeeInOrder(['ID','Titulo','Acciones'])
            ->assertSee($tarea->titulo)
            ->assertStatus(200);


    });
    test('Muestra formulario de creacion de tarea', function(){
        
        $this->get(route('tarea.create'))
            ->assertSeeInOrder([ 'Titulo', 'Descripcion', 'Guardar'])
            ->assertStatus(200);

    });
    test('crear una tarea',function(){
        $tarea= Tarea::factory()->make(
        );
        $this->post(route('tarea.store'), $tarea->toArray())
            ->assertRedirect(route('tarea.index'));

        $this->assertDatabaseHas('tareas',[
            'titulo'=>$tarea->titulo,
            'descripcion'=> $tarea->descripcion
        ]);
        $this->get(route('tarea.index'))
            ->assertSee($tarea->titulo);
    });
    test('Verificar errores al crear tarea', function(){
        $tarea=Tarea::factory()->make([
            'titulo'=>'12',
            'descripcion' => '12'

        ]);
        $this->post(route('tarea.store'),$tarea->toArray())
            ->assertInvalid(['titulo','descripcion']);
        $this->assertDatabaseMissing('tareas',[
            'titulo'=>$tarea->titulo,
            'descripcion'=>$tarea->descripcion
        ]);
    });

    
?>

