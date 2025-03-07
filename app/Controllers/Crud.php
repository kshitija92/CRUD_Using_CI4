<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Crud extends BaseController
{

    public function index()
    {
        $data['title'] = "Home Page";

        return view('pages/select', $data);
    }

    public function insert()
    {
        $data['title'] = "Insert Page";
        $request = $this->request->getPost();
        if (!empty($request)) {
            $rules = $this->validate([
                'name' => ['label' => 'Name', 'rules' => 'required|trim'],
                'mobile' => ['label' => 'Mobile', 'rules' => 'required|trim|max_length[10]'],
                'email' => ['label' => 'Email', 'rules' => 'required|trim'],
            ]);
            if ($rules == true) {
                $name = $request['name'];
                $mobile = $request['mobile'];
                $email = $request['email'];

                echo $name, $mobile, $email;
            }
        }else{
            return view('pages/insert', $data);
        }
        return view('pages/insert', $data);

    }
}
