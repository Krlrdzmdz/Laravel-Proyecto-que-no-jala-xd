<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarVacante extends Component
{
    public $vacante_id;
    public $titulo;
    public $salario;
    public $categoria;
    public $puesto;
    public $ultimo_dia;
    public $imagen;
    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'puesto' => 'required',
        'ultimo_dia' => 'required',
        //'decripcion' => 'required',
        'imagen_nueva' => 'nullable |image|max:1024'
    ];

    public function mount(Vacante $vacante)
    {
       // $this->id = $vacante->id; //ESTO NO JALA PORQUE ID ES UNA PALABRA RESERVADA DE LIVEWIRE
        $this->vacante_id = $vacante->id;
        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        $this->puesto = $vacante->puesto;
        $this->ultimo_dia = Carbon::parse($vacante->ultimo_dia)->format('Y-m-d');
        $this->imagen = $vacante->imagen;
    }

    public function editarVacante()
    {
        $datos = $this->validate();

        //Si hay una nueva imagen 
        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/vacantes');
            $datos['imagen'] = str_replace('public/vacantes/','',$imagen);
        }
        //Encontrar la vacante a editar
        $vacante = Vacante::find($this->vacante_id);

        //Asignar los valores
        $vacante->titulo = $datos['titulo'];
        $vacante->salario_id = $datos['salario'];
        $vacante->categoria_id = $datos['categoria'];
        $vacante->puesto = $datos['puesto'];
        $vacante->ultimo_dia = $datos['ultimo_dia'];
        $vacante->imagen = $datos['imagen'] ?? $vacante->imagen;

        //Guardar la vacante
        $vacante->save();

        //redireccionar
        session()->flash('mensaje', 'La vacante ha sido actualizada correctamente');

        return redirect()->route('vacantes.index');
        
    }

    public function render()
    {

        //Consultar DB
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.editar-vacante',[
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
