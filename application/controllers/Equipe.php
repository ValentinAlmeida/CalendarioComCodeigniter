<?php
defined('BASEPATH') OR exit('Ação não permitida');

class Equipe extends CI_Controller
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

        //faz o load da model de equipe
        $this->load->model("Equipe_model");

        //lista todos os equipe e guarda na variavel como um array
        $lista = $this->Equipe_model->buscaTodos();

        $data = array(
            'titulo' => 'Equipes cadastradas',
            'sub_titulo' => 'Listando todas as equipes cadastradas',
	    'icone_view' => 'ik ik-heart',

            'styles' => array(
                'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'
            ),

            'scripts' => array(
                '/plugins/datatables.net/js/jquery.dataTables.min.js',
                '/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                '/plugins/datatables.net/js/estacionamento.js'
            ),

            'equipe' => $lista,
        );


        $this->load->view('layout/header', $data);
        $this->load->view('equipe/index');
        $this->load->view('layout/footer');

    }

    public function core($id_equipe = NULL){

        if(!$id_equipe){

            $this->session->setflashdata('danger', 'Equipe invalida!');
            redirect($this->router->fetch_class());

        }else{

            $this->load->model("Equipe_model");

            $equipe = $this->Equipe_model->buscaTodos();

            $lista = $this->Equipe_model->buscaId($id_equipe);

            $data = array(
                'titulo' => 'Despacho equipe ',
                'sub_titulo' => 'Analisando o historico da equipe selecionada',
                'icone_view' => 'ik ik-archive',

                'styles' => array(
                    'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'
                ),

                'scripts' => array(
                    '/plugins/datatables.net/js/jquery.dataTables.min.js',
                    '/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                    '/plugins/datatables.net/js/estacionamento.js'
                ),

                'equipe' => $lista,
            );


            $this->load->view('layout/header', $data);
            $this->load->view('equipe/core');
            $this->load->view('layout/footer');

        }

    }

}