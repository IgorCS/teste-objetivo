<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Método principal do mini-crud
	 * @param nenhum
	 * @return view
	 */
	
	public function index() {		
		$this->load->view('v_sistema', $variaveis);
	}

	public function acesso() {
		//CVariaveis de Cadastro
		$variaveis['cadastros'] = $this->m_cadastros->get();
		$this->load->view('v_home', $variaveis);
	}
}
