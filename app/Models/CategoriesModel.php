<?php
namespace App\Models;

use CodeIgniter\Model;
class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $allowedFields = ['category_name', 'category_description'];
    public function getCategories($name = false)
    {
        if ($name === false) {
            return $this->findAll();
        }

        return $this->where(['category_name' => $name])->first();
    }

    public function getCategorieById($id)
    {
        // Get category by ID from database
        $query = $this->db->get_where('categories', array('id' => $id));

        return $query->row();
    }

    
}