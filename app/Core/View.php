<?php

/* Essa classe vai gerenciar as views da nossa aplicação
 */


namespace Core;

class View{
    private $view; /* private -> só consegue acessar ele de dentro da classe, public -> Consegue acessar do lado de fora tbm, protected -> Consegue acessar ele e seus filhos, mas só de dentro*/

    private $template;

    public function __construct($view,$template = TEMPLATE_DEFAULT){
        $this->view = $view; /* Este objeto recebe na sua view a view que o usuário passou */
        $this->template = $template;
    }

    private function createStringRequireView()
    {
        $view = str_replace(".php", '', $this->view);
        $view = str_replace('.view', '', $view);
        $view = str_replace(".", '/', $view);
        return VIEWS_PATH . "/" . $view .".view.php";// return VIEWS_PATH."/".$view.".php";
    }

    private function createStringRequireTemplate()
    {
        $template = str_replace(".", "/",
        str_replace(".template", "",
        str_replace(".php", "",  $this->template)));
        return TEMPLATES_PATH . "/" . $template . ".template.php";// return VIEWS_PATH."/".$view.".php";
    }

    public function show(){
        ob_start();
        require $this->createStringRequireView();// require $this->view
        $view = ob_get_clean();
        require $this->createStringRequireTemplate(); /*require -> carrega um arquivo mesma que ele já tenha sido carregado - Se ele não achar o arquivo ele dá erro / require_once -> carrega um arquivo apenas se ele não foi carregado / include -> se ele não achar o arquivo, ele continua o código*/
    }
}