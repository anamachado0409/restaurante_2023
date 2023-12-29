<?php

/* Essa classe vai gerenciar as views da nossa aplicação
 */


namespace Core;


class View{
    private $view; /* private -> só consegue acessar ele de dentro da classe, public -> Consegue acessar do lado de fora tbm, protected -> Consegue acessar ele e seus filhos, mas só de dentro*/

    private $template;

    private $data;

    private $template_subtitle = "";

    public function __construct($view, $template = TEMPLATE_DEFAULT, $data = []){
        $this->view = $view; /* Este objeto recebe na sua view a view que o usuário passou */
        $this->template = $template;
        $this->data = $data;
    }

    private function createStringRequireView()
    {
        $view = preg_replace("(\.view.php$)", '', $this->view);
        $view = str_replace(".", '/', $view);
        return VIEWS_PATH . "/" . $view .".view.php";// return VIEWS_PATH."/".$view.".php";
    }

    private function createStringRequireTemplate()
    {
        $template = preg_replace("(\.template.php$)", '', $this->template);
        $template = str_replace(".", '/', $template);
        return TEMPLATES_PATH . "/" . $template . ".template.php";// return VIEWS_PATH."/".$view.".php";
    }

    public function __set($name, $value){
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return (isset($this->data[$name])) ? $this->data[$name] : null;
    }

    private function getTemplateConfigs(){
        $template = Configs::getConfig('templates');
        if(!empty($this->template_subtitle) && (!isset($template['subtitle']) || $template['subtitle'])){
            if(isset($template['prefix']) && !empty($template['prefix'])){
                $template['title'] .= $template['prefix'] . $this->template_subtitle;
            } else if(isset($template['sufix']) && !empty($template['sufix'])){
                $template['title'] = $this->template_subtitle.$template['sufix'].$template['title'];
            } else{
                $template['title'] = $this->template_subtitle;
            }
        }
        return $template;
    }

    public function setTitle($title){
        $this->template_subtitle = $title;
    }

    public function show($data = [])
    {
        $data = array_merge($this->data, $data);
        extract($data);
        $template = $this->getTemplateConfigs();
        ob_start();
        require $this->createStringRequireView();// require $this->view
        $view = ob_get_clean();
        require $this->createStringRequireTemplate(); /*require -> carrega um arquivo mesma que ele já tenha sido carregado - Se ele não achar o arquivo ele dá erro / require_once -> carrega um arquivo apenas se ele não foi carregado / include -> se ele não achar o arquivo, ele continua o código*/
    }
}