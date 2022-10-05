<?php
    // include '../Models/';
  
class CadastroController
{
    function teste()
    {
        if (isset($_POST['nom_cientista']))
        {
          $nom_cientista = addslashes($_POST['nom_cientista']);
          echo ($nom_cientista);
        }
    }

    
/*
    private $cadastro;

        public function __construct()
        {
            $this->cadastro = new Cadastro();
            $this->CadastroBanco();
        }
    
    private function CadastroBanco()
    {     

        
        $nom_cientista = addslashes($_POST['nom_cientista']);
        $cpf_cientista = addslashes($_POST['cpf_cientista']);
        $dtn_cientista = addslashes($_POST['dtn_cientista']);
        $email_cientista = addslashes($_POST['email_cientista']);
        $email_alternativo_cientista = addslashes($_POST['email_alternativo_cientista']);
        $lattes_cientista = addslashes($_POST['lattes_cientista']);
        $snh_cientista = mb_strimwidth(md5(addslashes($_POST['snh_cientista'])), 0, 10);
        $confirmarSenha = mb_strimwidth(md5(addslashes($_POST['confirmarSenha'])), 0, 10);


        
        print_r ($nom_cientista,  $cpf_cientista, $dtn_cientista, $email_cientista, 
        $email_alternativo_cientista, $lattes_cientista, $snh_cientista, $confirmarSenha);

    }*/
}

?>