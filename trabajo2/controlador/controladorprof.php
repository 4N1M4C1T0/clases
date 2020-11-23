<?php
require_once 'modelo/prof.php';

class profesorControlador
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new profesor();
    }

    public function Index()
    {
        require_once 'vista/prof.php';
    }

    public function Crud()
    {
        $profesor = new profesor();

        if (isset($_REQUEST['id'])) {
            $profesor = $this->modelo->Obtener($_REQUEST['id']);
        }

        require_once 'view/editprof.php';
    }

    public function Guardar()
    {
        $profesor = new profesor();

        $profesor->id = $_REQUEST['id'];
        $profesor->Nombre = $_REQUEST['Nombre'];
        $profesor->Idioma = $_REQUEST['Idioma'];


        $profesor->id > 0
            ? $this->modelo->Actualizar($profesor)
            : $this->modelo->Registrar($profesor);
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
    }
}
