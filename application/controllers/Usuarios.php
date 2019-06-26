<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
    //metodo constructor
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsuariosModel');
    }

    //Metodo index
    public function index()
    {
        $dato['titulo'] = 'Usuarios';
        //Cargando la vista
        $this->load->view('usuarios/index', $dato);
    }

    //metodo para cargar los datos
    public function recargar()
    {
        $data = ['usuarios' => $this->UsuariosModel->getAll()];
        //renderizando la vista
        $this->load->view('usuarios/tabla', $data);
    }

    /**
     * Metodo para registrar
     */
    public function ingresar()
    {
        $data = [
            $_POST['nombre'],
            $_POST['apellido']
        ];
        $this->UsuariosModel->ingresar($data);
    }

    /**
     * Metodo para eliminar un registro
     */
    public function delete($id)
    {
        $id =[$id];
        $this->UsuariosModel->delete($id);
    }

    /**
     * Metodo para obtener un registro
     */
    public function getById($id)
    {
        $id = [$id];
        $dato = ['usuario' => $this->UsuariosModel->getById($id)];
        $this->load->view('usuarios/form',$dato);
    }

    public function editar()
    {
        $data = [
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['id']
        ];
        $this->UsuariosModel->update($data);
    }
    
    public function json()
    {
        echo json_encode($this->UsuariosModel->getAll());
    }
}
