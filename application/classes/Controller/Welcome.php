<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        $entete = View::factory('entetehtml');
        $fooer = View::factory('footerhtml');
        $this->response->body($entete->render().$footer->render());
                
        
    }

} // End Welcome
