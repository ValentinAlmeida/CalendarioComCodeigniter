<?php
defined('BASEPATH') or exit('Ação não permitida');

class Telegram extends CI_Controller{

    /*public function __construct(){
        parent::__construct();

        if (!$this->ion_auth->logged_in())
        {
            redirect('login');
        }

    }*/


    public function index(){

            $data = array(

                'titulo' => 'Enviar mensagens ao Telegram',
                'sub_titulo' => 'Enviando as mensagens ao grupo do telegram',
                'icone_view' => 'ik ik-message-circle',

                'scripts' => array(

                    'plugins/mask/jquery.mask.min.js',
                    'plugins/mask/custom.js',

                ),



            );

            $this->load->view('layout/header', $data);
            $this->load->view('telegram/index');
            $this->load->view('layout/footer');

        }

    public static function  getChatId(string $token) : ?string{
        $endpoint = 'https://api.telegram.org/bot'.$token.'/getupdates';

        $content = file_get_contents($endpoint);

        if ($content == '' || $content==null)
            return null;

        $arr = json_decode($content, true);

        if (!isset($arr['result'][0]['message']['chat']['id'])){
            return null;
        }

        return $chatId;
    }

    public static function sendMessage(string $mensagem) : bool{

        try{

            $bot = new \TelegramBot\Api\BotApi(TOKEN);

            $bot->sendMessage(CHAT_ID, $mensagem);

            echo "mensagem enviada;";

            return true;
        }catch (\Exception $ex){

            echo "erro na mensagem";
            return false;
        }
    }

    public function core(){

        $token = '5144383828:AAFullBnTOBu_3TH6SLn9okwuV7DzREU0no';
        //URL que tem as mensagens enviadas para o bot
        $endpoint = 'https://api.telegram.org/bot'.$token.'/getupdates';

        //Consultar a api a apartir do metodo get
        $content = file_get_contents($endpoint);

        //Verifica se o que foi consultado é valido
        if ($content == '' || $content==null)
            return null;

        //Transformar o json em array
        $arr = json_decode($content, true);

        for ($i = 0; $i<count($arr['result']); $i++){

            if (isset($arr['result'][$i]['message']['text'])){
                if($arr['result'][$i]['message']['text'] == NULL) {
                }else{
                    $text[$i] = $arr['result'][$i]['message']['text'];
                }
            }
        }

        if (isset($text)){

            if($text != NULL){

                $this->load->model("Telegram_model");

                for ($i =0; $i<sizeof($text); $i++){
                    if(isset($text[$i])){
                        if (text[$i] != NULL){

                            $this->Telegram_model->salva($text[$i]);

                        }
                    }
                }

                $data = array(

                    'titulo' => 'Mensagens no grupo do telegram',
                    'sub_titulo' => 'Listando todas as mensagens do grupo do telegram',
                    'icone_view' => 'ik ik-message-circle',

                    'scripts' => array(

                        'plugins/mask/jquery.mask.min.js',
                        'plugins/mask/custom.js',

                    ),

                    'text' => $text,

                );

                $this->load->view('layout/header', $data);
                $this->load->view('telegram/core');
                $this->load->view('layout/footer');
            }

        }else{

            $data = array(

                'titulo' => 'Mensagens no grupo do telegram',
                'sub_titulo' => 'Listando todas as mensagens do grupo do telegram',
                'icone_view' => 'ik ik-message-circle',

                'scripts' => array(

                    'plugins/mask/jquery.mask.min.js',
                    'plugins/mask/custom.js',

                ),

                'text' => NULL,

            );

            $this->load->view('layout/header', $data);
            $this->load->view('telegram/core');
            $this->load->view('layout/footer');

        }



    }

}