<?php
namespace App\Models;

use CodeIgniter\Model;
class ProductsModel extends Model
{
    protected $table = 'products';
    protected $allowedFields = ['category_id','product_name','product_quantity','product_decscription','product_detail','product_price','product_image'];
    public function getProducts($name = false)
    {
        if ($name === false) {
            return $this->findAll();
        }

        return $this->where(['product_name' => $name])->first();
    }

    public function getProductById($id)
    {
        // Get category by ID from database
        $query = $this->db->get_where('categories', array('id' => $id));

        return $query->row();
    }

    
}