<?php defined('SYSPATH') or die('No direct script access.');




class Controller_Home extends Controller {

    protected $html_header = NULL;
    protected 

    public function __construct()
    {
        parent::__construct();

    }
    public function before()
    {
        $this->html_header = new HTML_Header();
        $this->html_header->set_title('Partage de mot de passe');
        $this->html_header->add(new HTML_Header_Meta(array('charset' => 'utf-8')));
        

    }









}