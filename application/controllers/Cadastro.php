<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	/**
	 * Carrega o formulário para novo cadastro
	 * @param nenhum
	 * @return view
	 */
	public function create() {       
		//$this->load->model("estado_cidade");		
		$variaveis['titulo'] = 'Novo Cadastro';
		$this->load->view('v_cadastro', $variaveis);
	}
	

	public function store() {
		$post = $_POST;
		$post['erro'] = array();
		if (isset($post['nome']) && $post['nome'] !== '' && $post['nome'] !== null) {
			$post['data']['nome'] = $post['nome'];
		} else {
			$post['erro']['nome'] = 'O campo nome precisa ser preenchido';
		}

		if (isset($post['email']) && $post['email'] !== '' && $post['email'] !== null) {
			$post['data']['email'] = $post['email'];
		} else {
			$post['erro']['email'] = 'O campo email precisa ser preenchido';
		}

		if (isset($post['colegio']) && $post['colegio'] !== '' && $post['colegio'] !== null) {
			$post['data']['colegio'] = $post['colegio'];
		} else {
			$post['erro']['colegio'] = 'O campo colégio precisa ser preenchido';
		}	

		if (isset($post['serie']) && $post['serie'] !== '' && $post['serie'] !== null) {
			$post['data']['serie'] = $post['serie'];
		} else {
			$post['erro']['serie'] = 'O campo série precisa ser preenchido!';
		}		

		$post['data']['data_cadastro'] = date('Y-m-d h:i:s');		

		$verifica = '';
		$success = false;

		if($this->input->post('id') == '') {
			$mensagem = 'O email '.$post['email'].' já existe em nossos cadastros!';
		}
		if (count($post['erro']) > 0) {
			if ($this->m_cadastros->verificaEmail($post['email']) <= 0) {
				$mensagem = '';
			}			
			$verifica = array('erro' => $post['erro'], 'success' => $success, 'mensagem' => $mensagem);
		} else {
			if ($this->m_cadastros->verificaEmail($post['email']) <= 0 || $this->input->post('id') != '') {				
				$id = $this->input->post('id');			
				$dados = array(					    
					"nome" => $post['data']['nome'],	
					"email" => $post['data']['email'],	
					"colegio" => $post['data']['colegio'],	
					"serie" => $post['data']['serie'],					
					"data_cadastro"=>$post['data']['data_cadastro']	
				);
				
				$this->m_cadastros->store($dados, $id);
				$success = true;
				$mensagem = 'Cadastro feito com sucesso!';
			}	

			/*if ($this->m_cadastros->store($dados, $id)) {
				$variaveis['mensagem'] = "Dados gravados com sucesso!";
				$this->load->view('v_sucesso', $variaveis);
			} else {
				$variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
				$this->load->view('errors/html/v_erro', $variaveis);
			}*/		
			$verifica = array('erro'=>$post['erro'], 'success' => $success, 'mensagem' => $mensagem , 'id' => $this->input->post('id'));
		}

		echo json_encode($verifica);
	}	
	
	/**
	 * Função que exclui o registro através do id.
	 * @param $id do registro a ser excluído.
	 * @return boolean;
	*/
	public function delete($id = null) {
		if ($this->m_cadastros->delete($id)) {
			//$variaveis['mensagem'] = "Registro excluído com sucesso!";
			//$variaveis['funcionario'] = 'funcionario';
			//$this->load->view('v_sucesso', $variaveis);
			$variaveis['cadastros'] = $this->m_cadastros->get();
			$this->load->view('v_home', $variaveis);
		}
	}	

	public function edit_($id = null) {       
		if ($this->m_cadastros->delete($id)) {	
			$variaveis['titulo'] = 'Alterar Cadastro - ' . $id;
			$variaveis['id'] = $id;
			$this->load->view('v_cadastro', $variaveis);
		}
	}

	/**
	 * Chama o formulário com os campos preenchidos
	 * @param $id do registro
	 * @return view
	 */
	public function edit($id = null){		
		if ($id) {			
			$cadastros = $this->m_cadastros->get($id);			
			if ($cadastros->num_rows() > 0 ) {
				$variaveis['titulo'] = 'Edição de Registro';
				$variaveis['id'] = $cadastros->row()->id;
				$variaveis['nome'] = $cadastros->row()->nome;				
				$variaveis['email'] = $cadastros->row()->email;
				$variaveis['colegio'] = $cadastros->row()->colegio;
				$variaveis['serie'] = $cadastros->row()->serie;
				$this->load->view('v_cadastro', $variaveis);
			} else {
				$variaveis['mensagem'] = "Registro não encontrado." ;
				$this->load->view('errors/html/v_erro', $variaveis);
			}			
		}		
	}

}
