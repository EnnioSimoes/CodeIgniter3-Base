<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model{

        private $table = 'crud';
        
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function postDataValidate()
        {
            $this->load->library('form_validation');
            
            $data['id'] = $this->input->post('id', TRUE);
            $data['nome'] = $this->input->post('nome', TRUE);
            $data['telefone'] = $this->input->post('telefone', TRUE);
            $data['idade'] = $this->input->post('idade', TRUE);    
            
            /*
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('telefone', 'Telefone', 'required');
            $this->form_validation->set_rules('idade', 'Idade', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                echo 'erro';
            }
            else
            {
                echo 'OK';
            }           
            */
            return $data;
        }        
        
        public function getAllPagination($startIndex = null, $pageSize = null, $jtSorting = null)
        {
            if($startIndex == null){$startIndex=10;}  
            if($pageSize == null){$pageSize=10;}  
            if($jtSorting == null){$jtSorting='id DESC';}  
            $query = "SELECT * FROM ".$this->table." ORDER BY $jtSorting LIMIT $startIndex,$pageSize";
            $result = $this->db->query($query);
            return $result->result();
        }

        public function insert()
        {
            $data = Crud_model::postDataValidate();
            $this->db->insert('crud', $data);
            
            $id = $this->db->insert_id();
            $this->db->where('id', $id);
            $data = $this->db->get('crud')->result();
            
            return $data;
        }

        public function update()
        {
            $data = Crud_model::postDataValidate();
            $this->db->where('id', $data['id']);
            $this->db->update('crud', $data);
        }
        
        public function delete()
        {
            $data = Crud_model::postDataValidate();
            $this->db->where('id', $data['id']);
            $this->db->delete('crud');
        }
        
        public function countAll()
        {
            $result = $this->db->count_all($this->table);
            return $result;
        }    
}