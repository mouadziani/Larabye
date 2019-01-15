<?php

use Rakit\Validation\Validator;
use Session\Session;
// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Capsule\Manager as DB;

class Home extends Controller
{
    public function index($name = '')
    {
        $this->view('home/index', ['name' => $name]) ;
    }

    public function create()
    {
        $user = $this->model('Patient');
        $users = DB::select('select * from patients WHERE id = ?', [10]);
        var_dump($users);
        die();
        // echo 'Mouad ZIANI 1997';
        // die();
        
        // //Session::set('flush', 'flush');
        // echo Session::get('flush');
        // Session::flush();
        // die();

        // $validator = new Validator;

        // // make it
        // $validation = $validator->make($_POST + $_FILES, [
        //     'name'                  => 'required',
        //     'email'                 => 'required|email',
        //     'password'              => 'required|min:6',
        //     'confirm_password'      => 'required|same:password',
        //     'avatar'                => 'required|uploaded_file:0,500K,png,jpeg',
        //     'skills'                => 'array',
        //     'skills.*.id'           => 'required|numeric',
        //     'skills.*.percentage'   => 'required|numeric'
        // ]);

        // // then validate
        // $validation->validate();

        // if ($validation->fails()) {
        //     // handling errors
        //     $errors = $validation->errors();
        //     echo "<pre>";
        //     print_r($errors->firstOfAll());
        //     echo "</pre>";
        //     exit;
        // } else {
        //     // validation passes
        //     echo "Success!";
        // }




        // Patient::create([
        //     'nom' => 'Mouad mmmmmmmmm'
        // ]);
        
        // Post::create([
        //     'title' => 'Mouad',
        //     'slug' => 'mouad.ziani1997@gmail.com',
        //     'content' => '123sdfgsdfgsdfg456'
        // ]);

        // $user = User::find(9);
        // $user->delete();

        //$data = Patient::all();

        //$data = $user;

        //var_dump($data);


    }
}
