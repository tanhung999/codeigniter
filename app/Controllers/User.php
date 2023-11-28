<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\NewsModel;
use App\Models\CategoriesModel;
use App\Models\ProductsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class User extends BaseController
{

    public function login()
    {
        $session = session();
        $successMessage = session()->getFlashdata('success');

        helper('form');
        $model = model('App\Models\UserModel');
        $data = [     
            'title' => 'Signup',
            'successMessage' => $successMessage
        ];
        return view('admin/auth/login',$data);
    }
    public function signup()
    {
        $session = session();
        
        helper('form');
        $model = model('App\Models\UserModel');
        $data = [     
            'title' => 'Signup',
        ];
        return view('admin/auth/signup',$data);
    }
    public function act_login()
    {
        $session = session();
        helper('form');

        $model = model('App\Models\UserModel');
        if (! $this->validate([
            'username' => 'required|max_length[255]|min_length[3]',
            'password' => 'required|max_length[255]|min_length[3]'
        ])) {
            return $this->login();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();
        $data['user_item']=($model->checkUser($post['username'],md5($post['password'])));
        if(isset($data['user_item']))
        {
            $infoUser = [
                'username'  => $data['user_item']['username'],
                'email'     => $data['user_item']['email'],
                'logged_in' => true,
            ];
            $_SESSION['infoUser']=$infoUser;
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
        else
        {
            $data = [     
                'title' => 'Đăng nhập',
            ];
            return view('admin/auth/login',$data);
        }
    }
    public function act_sign(){
        $data = [];
        
        if ($this->request->getMethod() === 'post') {
            // Lưu thông tin người dùng vào cơ sở dữ liệu
            $userModel = new UserModel();
            $validationRules = [
                'username' => 'required|max_length[255]|min_length[3]',
                'password' => 'required|max_length[255]|min_length[3]',
                'password_confirm' => 'required|matches[password]',
                'email' => 'required|valid_email',
            ];

            if ($this->validate($validationRules)) {
                // Lấy dữ liệu từ form
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');
                $email = $this->request->getPost('email');
                
                if ($userModel->isUsernameExists($username)) {
            
                    return redirect()->to(base_url('/signup'))->withInput()->with('error', 'Username đã tồn tại');
                }

                if ($userModel->isEmailExists($email)) {
                    return redirect()->to(base_url('/signup'))->withInput()->with('error', 'Email đã tồn tại');
                }
                // Mã hóa mật khẩu (thường nên sử dụng bcrypt thay vì md5)
                $hashedPassword = md5($password);
                $userModel->save([
                    'username' => $username,
                    'password' => $hashedPassword,
                    'email' =>$email,
                ]);

                // Hiển thị thông báo thành công hoặc chuyển hướng đến trang đăng nhập
                return redirect()->to(base_url('/login'))->with('success', 'Đăng ký thành công!');
            } else {
                $data = ['validation' => $this->validator,'title' => 'Đăng ký'
                ]; 
            }
        }
            return view('admin/auth/signup',$data);
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