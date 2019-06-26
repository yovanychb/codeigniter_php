<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RestController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET');
        header("Access-Control-Allow-Headers: X-Requested-With");
    }
    
    public function loadModel($modelo)
    {
        $this->load->model($modelo);
    }
    
    public function setMethod()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $this->get();
                break;

            case 'POST':
                $this->post();
                break;

            case 'PUT':
                $this->put();
                break;

            case 'DELETE':
                $this->delete();
                break;

            default:
                $this->get();
                break;
        }
    }

    public function getData()
    {
        $data = [];
        $datos = json_decode(file_get_contents("php://input"));
        foreach ($datos as $registro => $value) {
            $item = $value;
            array_push($data, $item);
        }
        return $data;
    }
}