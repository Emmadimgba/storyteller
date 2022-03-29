<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function newCategory($postData) {
        $response = "";
        if($postData['categoryName'] !=''){
            $t=time();
            $now = date("Y-m-d H:m:s",$t);
            // Insert record
            $newcategory = array(
              "categoryName" => trim($postData['categoryName']),
              "created_at" => $now,
              "updated_at" => $now
            );
            $this->db->insert('category', $newcategory);

            $response = "Record insert successfully.";

        }else{
            $response = "Form is empty.";
        }
        return $response;
    }
    
    
    public function viewLocations(){
        $query=$this->db->get("location");
        return $query->result();
    }
    
        public function newLocation($postData) {
        $response = "";
        if($postData['location'] !=''){
            $t=time();
            $now = date("Y-m-d H:m:s",$t);
            // Insert record
            $newlocation = array(
              "location" => trim($postData['location']),
              "created_at" => $now,
              "updated_at" => $now
            );
            $this->db->insert('location', $newlocation);

            $response = "Record insert successfully.";

        }else{
            $response = "Form is empty.";
        }
        return $response;
    }
    
    
    public function viewCategories(){
        $query=$this->db->get("category");
        return $query->result();
    }
    
    
    public function newStory($postData) {
        $response = "";
        if($postData['title'] !='' || $postData['short_description'] !='' || $postData['content'] !='' 
                || $postData['category_id'] !='' || $postData['image'] !='' || $postData['location_id'] !=''){
            $t=time();
            $now = date("Y-m-d H:m:s",$t);
            // Insert record
            $newStoryy = array(
              "title" => trim($postData['title']),
              "short_description" => trim($postData['short_description']),
              "content" => trim($postData['content']),
              "category_id" => trim($postData['category_id']),
              "location_id" => trim($postData['location_id']),
              "image" => trim($postData['image']),
              "user_id" => $this->ion_auth->user()->row()->id,
              "is_published" => 0,
              "created_at" => $now,
              "updated_at" => $now
            );
            $this->db->insert('story', $newStoryy);

            $response = "Record insert successfully.";

        }else{
            $response = "Error in submiting form, compulsory field empty";
        }
        return $response;
    }
    
}