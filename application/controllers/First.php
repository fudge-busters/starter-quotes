<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author Gabriella
 */
class First extends Application {
    //put your code here
    
    function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		
		$record = $this->quotes->first();
                $this->data = array_merge($this->data, $record);

		$this->render();
	}
        
        function zzz()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		
		$record = $this->quotes->get(1);
                $this->data = array_merge($this->data, $record);

		$this->render();
	}
}
