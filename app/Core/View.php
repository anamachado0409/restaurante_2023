<?php

/* Essa classe vai gerenciar as views da nossa aplicação
 */


namespace Core;

class View{
    private $view; /* private -> só consegue acessar ele de dentro da classe, public -> Consegue acessar do lado de fora tbm, protected -> Consegue acessar ele e seus filhos, mas só de dentro*/

    private $template;

    public function __construct($view,$template){
        $this->view = $view; /* Este objeto recebe na sua view a view que o usuário passou */
        $this->template = $template;
    }

    private function createStringRequireView(){
        return VIEWS_PATH."/".$this->view.".php";// return VIEWS_PATH."/".$view.".php";
    }

    public function show(){
        ob_start();
        require $this->createStringRequireView();// require $this->view
        $view = ob_get_clean();
        require $this->template; /*require -> carrega um arquivo mesma que ele já tenha sido carregado - Se ele não achar o arquivo ele dá erro / require_once -> carrega um arquivo apenas se ele não foi carregado / include -> se ele não achar o arquivo, ele continua o código*/
    }
}