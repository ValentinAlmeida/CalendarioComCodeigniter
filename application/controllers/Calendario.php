<?php
defined('BASEPATH') OR exit('Ação não permitida');

class Calendario extends CI_Controller
{

    /*public function __construct(){
        parent::__construct();

        if (!$this->ion_auth->logged_in())
        {
            redirect('login');
        }

    }*/
   

    public function index()
    {
        $monthTime = strtotime(date("Y-m-1"));

        if (isset($_GET["month"])){
            extract(date_parse_from_format("Y-m-d", $_GET["month"]));

            $monthTime = strtotime("{$year}-{$month}-1");

        }

        $data = array(
            'titulo' => 'Calendario',
            'sub_titulo' => 'Faça solicitações a partir do calendario',
            'icone_view' => 'ik ik-calendar',

            'styles' => array(
                'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'
            ),

            'scripts' => array(
                '/plugins/datatables.net/js/jquery.dataTables.min.js',
                '/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                '/plugins/datatables.net/js/estacionamento.js'
            ),

            'monthTime' => $monthTime

        );


        $this->load->view('layout/header', $data);
        $this->load->view('calendario/index');
        $this->load->view('layout/footer');

    }

    public function core($startDate = NULL){

        if(!$startDate){

            $this->session->setflashdata('danger', 'Data invalida!');
            redirect($this->router->fetch_class());

        }else{

            $data = array(
                'titulo' => 'Solicitação',
                'sub_titulo' => 'Pagina para registrar novas solicitaçõe',
                'icone_view' => 'ik ik-calendar',

                'styles' => array(
                    'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'
                ),

                'scripts' => array(
                    '/plugins/datatables.net/js/jquery.dataTables.min.js',
                    '/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                    '/plugins/datatables.net/js/estacionamento.js'
                ),

            );


            $this->load->view('layout/header', $data);
            $this->load->view('calendario/core');
            $this->load->view('layout/footer');

        }

    }

    public function get($x){
        return stripslashes(htmlentities($_GET[$x]));
    }
    }