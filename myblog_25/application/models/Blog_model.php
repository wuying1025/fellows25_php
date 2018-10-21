<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/20
 * Time: 下午2:49
 */
class Blog_model extends CI_Model
{

    public function get_blog_list(){
        $query = $this->db->get('t_blog');
        return $query->result();
    }
    public function get_catalog_list(){
        $query = $this->db->get('t_blog_catalog');
        return $query->result();
    }
}