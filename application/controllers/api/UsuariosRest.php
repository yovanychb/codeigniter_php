<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'controllers/api/RestController.php';

class UsuariosRest extends RestController
{

    public function index()
    {
        $this->loadModel('UsuariosModel');
        $this->setMethod();
    }

    public function get()
    {
        echo json_encode($this->UsuariosModel->getAll());
    }

    public function post()
    {
        $this->UsuariosModel->ingresar($this->getData());
        echo json_encode(array("message" => "Usuario creado."));
    }

    public function put()
    {
        $data2 = [$this->getData()[1], $this->getData()[2], $this->getData()[0]];
        $this->UsuariosModel->update($data2);
        echo json_encode(array("message" => "Usuario modificado."));
    }

    public function delete()
    {
        $data2 = [$this->getData()[0]];
        $this->UsuariosModel->delete($data2);
        echo json_encode(array("message" => "Usuario eliminado."));
    }
}
