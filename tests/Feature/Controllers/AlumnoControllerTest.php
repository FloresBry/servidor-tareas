<?php
use App\Models\Alumno;

use function Laravel\Prompts\text;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);
test('Se listado de alumnos', function () {
    $alumnos=Alumno::factory()->count(2)->sequence(
        ['codigo' => 'A00000001', 'nombre' => 'Juan Perez', 'correo' => 'juan@gmial.com','fecha_nacimiento'=>'2000-01-01','sexo'=>'Masculino','carrera'=>'Ingeniería de Sistemas'],
        ['codigo' => 'A00000002', 'nombre' => 'Maria Gomez', 'correo' => 'maria@gmail,com','fecha_nacimiento'=>'1999-05-15','sexo'=>'Femenino','carrera'=>'Medicina']
    )->create();
    
    $this->get(route('alumno.index'))
        ->assertSee('Crear Alumno')
        ->assertSeeInOrder(['Codigo','Nombre','Correo'])
        ->assertSee($alumnos[0]->nombre,$alumnos[0]->codigo,$alumnos[0]->correo)
        ->assertSee($alumnos[1]->nombre,$alumnos[1]->codigo,$alumnos[1]->correo)
        ->assertSee('Editar')
        ->assertSee('Eliminar')
        ->assertStatus(200);
        
        $response=$this->get(route('alumno.create'));
        $response->assertStatus(200);
        
});
test('Se muestra formulario de creacion de alumno', function () {
    $alumno=Alumno::factory()->create();
    $this->get(route('alumno.create'))
    ->assertSee('Creacion Alumno')
    ->assertSeeInOrder(['Codigo','Nombre','Correo','Fecha de Nacimiento','Sexo','Carrera','Guardar'])
    ->assertStatus(200);
});
test('Se muestra formulario edicion de alumno', function () {
    $alumno=Alumno::factory()->create();
    $this->get(route('alumno.edit',1))
    ->assertSee('Editar Alumno')
    ->assertSeeInOrder(['Codigo','Nombre','Correo','Fecha de Nacimiento','Sexo','Carrera','Guardar'])
    ->assertStatus(200);

});
test('Se muestra detalle de alumno', function () {
    $alumno=Alumno::factory()->create();
    $this->get(route('alumno.show',1))
    ->assertSeeInOrder([
        'Alumno',$alumno->codigo,
        'Nombre',$alumno->nombre,
        'Correo',$alumno->correo,
        'Fecha de Nacimiento',$alumno->fecha_nacimiento,
        'Sexo',$alumno->sexo,
        'Carrera',$alumno->carrera,
        ])
    ->assertStatus(200);
});
test('Se puede crear un alumno', function () {
    $alumno=Alumno::factory()->make();
    $this->post(route('alumno.store'),$alumno->toArray())
        ->assertRedirect(route('alumno.index'));
    $this->assertDatabaseHas('alumnos',[
        'codigo'=>$alumno->codigo,
        'nombre'=>$alumno->nombre,
        'correo'=>$alumno->correo,
        'fecha_nacimiento'=>$alumno->fecha_nacimiento,
        'sexo'=>$alumno->sexo,
        'carrera'=>$alumno->carrera,
    ]);

});
test('Se puede editar un alumno', function () {
    $alumno=Alumno::factory()->create();
    $alumnoEdit=Alumno::factory()->make();
    $this->put(route('alumno.update',$alumno->id),$alumnoEdit->toArray())
        ->assertRedirect(route('alumno.show',$alumno->id));
    $this->assertDatabaseHas('alumnos',[
        'codigo'=>$alumnoEdit->codigo,
        'nombre'=>$alumnoEdit->nombre,
        'correo'=>$alumnoEdit->correo,
        'fecha_nacimiento'=>$alumnoEdit->fecha_nacimiento,
        'sexo'=>$alumnoEdit->sexo,
        'carrera'=>$alumnoEdit->carrera,
    ]);

});

test('Se puede eliminar un alumno', function () {
    $alumno=Alumno::factory()->create();
    $this->delete(route('alumno.destroy',$alumno->id))
        ->assertRedirect(route('alumno.index'));
    $this->assertDatabaseMissing('alumnos',[
        'codigo'=>$alumno->codigo,
        'nombre'=>$alumno->nombre,
        'correo'=>$alumno->correo,
        'fecha_nacimiento'=>$alumno->fecha_nacimiento,
        'sexo'=>$alumno->sexo,
        'carrera'=>$alumno->carrera,
    ]);

});