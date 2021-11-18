<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ServiceModel;

class UserCtrl extends BaseController
{
    public function index()
    {
        //  Chargement du helper "CalcAge" 
        helper('CalcAge');

        $UserModel = new UserModel();
        $data['users'] = $UserModel->orderBy('id','ASC')->jointure();
        return view('index', $data);
    }

    public function form(){ 

        //  Chargement du helper "form"
        helper(['form', 'url']);

        $ServiceModel = new ServiceModel();
        $data['services'] = $ServiceModel->findAll();
       
        //  Validation des inputs
    
        $validation = $this->validate([
            'lastname' => 'required|min_length[2]',
            'firstname' => 'required|min_length[3]',
            'birthdate' => 'required|min[1950-01-01]',
            'address' => 'required',
            'phone' => 'required|numeric|max_length[10]',
            'service' => 'required'
        ]);

        return view('signup', $data);
    }
}
