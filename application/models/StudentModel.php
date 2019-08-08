<?php
class StudentModel extends CI_Model{
    public function __construct()
        {
                $this->load->database();
        }
    
    public function get_students(){
        // print_r($_REQUEST);
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('class', $this->input->get("search")); 
          $this->db->or_like('contact_no', $this->input->get("search")); 
        }
        $query = $this->db->get("students");
        return $query->result();
    }
    public function insert_student()
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'class' => $this->input->post('class'),
            'contact_no' => $this->input->post('contact_no'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('students', $data);
    }
    public function update_student($id) 
    {
        $data=array(
            'name' => $this->input->post('name'),
            'class'=> $this->input->post('class'),
            'contact_no'=> $this->input->post('contact_no'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );
        if($id==0){
            return $this->db->insert('students',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('students',$data);
        }        
    }
}
?>