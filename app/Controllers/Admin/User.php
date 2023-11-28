<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class User extends BaseController
{
    public function login()
    {
        helper('form');
        $model = model('App\Models\UserModel');
        $data = [
            'title' => 'Đăng nhập',
        ];

        return view('admin/pages/signin', $data);
    }
    
    public function index()
    {
        $model = model('App\Models\CategoryModel');
        if (! $this->validate([
            'txt_name' => 'required|max_length[255]|min_length[3]',
            'txt_password' => 'required|max_length[255]|min_length[3]'
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        if($model->checkUser($post['txt_name'],$post['txt_password']))
            return view('admin/pages/List_Category', $data);
        else
            return view('admin/pages/signin', $data);

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