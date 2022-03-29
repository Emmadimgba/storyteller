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
    
    
    public function viewStory(){
        $this->db->select('story.id,story.title,story.short_description,story.content,story.is_published,story.image,location.location,category.categoryName,story.created_at,users.first_name,users.last_name')
         ->from('story')
         ->join('users', 'users.id = story.user_id')
         ->join('location', 'story.location_id = location.id')
         ->join('category', 'story.category_id = category.id');
        return $this->db->get();
    }
    
    public function viewPublishedStory(){
        $this->db->select('story.id,story.title,story.short_description,story.content,story.is_published,story.image,location.location,category.categoryName,story.created_at,users.first_name,users.last_name')
         ->from('story')
         ->join('users', 'users.id = story.user_id')
         ->join('location', 'story.location_id = location.id')
         ->join('category', 'story.category_id = category.id')
         ->where('story.is_published',1);
        return $this->db->get();
    }
    
    public function getStoryByID($id){
        $this->db->select('story.id,story.title,story.short_description,story.content,story.is_published,story.image,location.location,category.categoryName,story.created_at,users.first_name,users.last_name')
         ->from('story')
         ->join('users', 'users.id = story.user_id')
         ->join('location', 'story.location_id = location.id')
         ->join('category', 'story.category_id = category.id')
         ->where('story.id',$id);
        return $this->db->get();
    }
    
    
    public function getStoryByLocation($id){
        $this->db->select('story.id,story.title,story.short_description,story.content,story.is_published,story.image,location.location,category.categoryName,story.created_at,users.first_name,users.last_name')
         ->from('story')
         ->join('users', 'users.id = story.user_id')
         ->join('location', 'story.location_id = location.id')
         ->join('category', 'story.category_id = category.id')
         ->where('story.location_id',$id)
        ->where('story.is_published',1);
        return $this->db->get();
    }
    
    public function getStoryByCategory($id){
        $this->db->select('story.id,story.title,story.short_description,story.content,story.is_published,story.image,location.location,category.categoryName,story.created_at,users.first_name,users.last_name')
         ->from('story')
         ->join('users', 'users.id = story.user_id')
         ->join('location', 'story.location_id = location.id')
         ->join('category', 'story.category_id = category.id')
         ->where('story.category_id',$id)
        ->where('story.is_published',1);
        return $this->db->get();
    }
    
        public function getStoryByUserID($id){
        $this->db->select('story.id,story.title,story.short_description,story.content,story.is_published,story.image,location.location,category.categoryName,story.created_at,users.first_name,users.last_name')
         ->from('story')
         ->join('users', 'users.id = story.user_id')
         ->join('location', 'story.location_id = location.id')
         ->join('category', 'story.category_id = category.id')
        ->where('users.id',$id);
        return $this->db->get();
    }
    
    
    public function publish_story($id){
       $this->db->where('id', $id);
       $this->db->update('story', array('is_published' => 1));
       return true;
    }
        
    
    public function unpublish_story($id){
       $this->db->where('id', $id);
       $this->db->update('story', array('is_published' => 0));
       return true;
    }
    
    
}