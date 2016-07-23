<?php
/**
 * News_model
 */
class News_model extends CI_Model
{
    
    /**
     * 
     */
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug = FALSE, $id = FALSE) {
        
        if ($slug === FALSE && $id === FALSE ){
            
            $query = $this->db->get('news');
            return $query->result_array();
        }
        
        if($slug != FALSE) {
            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row_array();
        }
        else
        {
            $query = $this->db->get_where('news', array('id' => $id));
            echo json_encode($query->row_array());
            
        }
    }
    
    public function set_news() {
        
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $date = date('Y-m-d');
        $img = $_FILES['userfile']['name'];
        
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
            'date' => $date,
            'author' => $this->input->post('author'),
            'image' => $img
            );
            
        return $this->db->insert('news', $data);
    }
    
    public function delete_news(){
        
        $id = $this->input->post('id');
        
        return $this->db->delete('news', array('id' => $id));
    }
    
    public function update_news() {
        
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        if($_FILES['userfile']['name']) {
            $img = $_FILES['userfile']['name'];
        }
        else 
        {
            $img = $this->input->post('image');    
        }
        $id = $this->input->post('id');
        
        $data = array(
            'id' => $id,
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
            'date' => $this->input->post('date'),
            'author' => $this->input->post('author'),
            'image' => $img
            );
        
        $this->db->where('id', $id);    
        return $this->db->replace('news', $data);
    }
    
}