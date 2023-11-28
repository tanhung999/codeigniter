<?php
    namespace App\Controllers;

    use App\Models\ProductsModel;
    use CodeIgniter\Exceptions\PageNotFoundException;
    class Categories extends BaseController
    {
    
        public function index()
        {
            $model = model(ProductsModel::class);
            $data = [
                'products'  => $model->getProducts(),
                'title' => 'Products',
            ];
    
            // Load view

            return view('templates/header')
            .view('admin/products/products',$data)
            . view('templates/footer');
                    
        }
        public function show($slug = null)
        {
            $model = model('App\Models\CategoryModel');

            $data['item'] = $model->getCategory($slug); 
            $data['title'] = $data['item']['title'];
            return view('templates/header', $data)
                . view('category/detail',$data)
                . view('templates/footer');
        }
        public function new()
        {
            helper('form');
            $data['title'] = "Thêm loại sản phẩm";
            return view('templates/header', $data)
                . view('category/create',$data)
                . view('templates/footer');
        }
        public function create()
        {
            helper('form');
    
            // Checks whether the submitted data passed the validation rules.
            if (! $this->validate([
                'name' => 'required|max_length[255]|min_length[3]',
            ])) {
                // The validation fails, so returns the form.
                return $this->new();
            }
    
            // Gets the validated data.
            $post = $this->validator->getValidated();
    
            $model = model('App\Models\CategoryModel');
            
            $model->save([
                'category_name' => $post['title'],
                'slug'  => url_title($post['title'], '-', true),
            ]);
    
            return view('templates/header', ['title' => 'Thêm loại sản phẩm'])
                . view('news/success')
                . view('templates/footer');
        }

    
}