<?php
namespace App\Controllers;
use App\Models\NewsModel;
use App\Models\CategoriesModel;
use App\Models\ProductsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Admin extends BaseController {
    
    public function index() {
        $newsModel = model(NewsModel::class);
        $categoryModel= model(CategoriesModel::class);
        $productModel= model(ProductsModel::class);
        $news = $newsModel->getNews();
        $categories = $categoryModel ->getCategories();
        $products =$productModel->getProducts();
        return view('templates/header')
            . view('admin/dashboard')
            .view('admin/news/news',['title'=>'New archive',
                                        'news'=> $news])
            .view('admin/categories/categories',['title'=>'Categories',
                                                'categories'=> $categories])
            .view('admin/products/products',['title'=>'Products',
                                            'products'=> $products,
                                            'categories'=>$categories])
            . view('templates/footer');
    }
    public function news (){
        $newsModel = model(NewsModel::class);
        $data = [
            'news' => $newsModel->getNews(),
            'title' => 'News archive',   
        ]; 
        return $data;
    }
    public function categories() {
        $categoryModel= model(CategoriesModel::class);
        $data =[
            'categories' => $categoryModel->getCategories(),
            'title' => 'Categories'
        ]; 
        // Hiển thị danh sách danh mục
        return $data;
    }
    
    public function products() {
        $productModel= model(ProductsModel::class);
        $data = [
            'products' => $productModel->getProducts(),
            'title' => 'Products'
        
        ] ;
        // Hiển thị danh sách sản phẩm
        return $data;
    }
    
    // Các phương thức khác như: thêm, sửa, xóa category và product...
    
}