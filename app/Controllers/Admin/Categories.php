<?php
    namespace App\Controllers;

    use App\Models\CategoriesModel;
    use CodeIgniter\Exceptions\PageNotFoundException;
    class Categories extends BaseController
    {
    
        public function index()
        {
            $model = model(CategoriesModel::class);
            $data = [
                'categories'  => $model->getCategories(),
                'title' => 'Categories',
            ];
    
            // Load view

            return view('templates/header')
            .view('admin/categories/categories',$data)
            . view('templates/footer');
                    
        }

    
}
