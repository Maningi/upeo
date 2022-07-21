<?php

namespace App\Controllers;
use App\Models\MemberModel;
use App\Models\UserModel;
use App\Models\DepositModel;
use App\Models\OtherIncomeModel;
use App\Models\CategoryModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        helper(['form']);

        echo view('templates/header', $data);
        echo view('dashboard');
        echo view('templates/footer');
    }

    public function members(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();

        $model = new MemberModel();
        $data['members'] = $model->getMembers();
        helper(['form']);
        helper(['form']);
        $rules = [
            'f_name' => 'required|min_length[3]|max_length[5]'
        ];

        if(! $this->validate($rules)){
            $data['validation'] = $this->validator;
        }else{
            $newData = [
                'f_name' => $this->request->getVar('f_name'),
                'l_name' => $this->request->getVar('l_name'),
                'email' => $this->request->getVar('email'),
                'dob' => $this->request->getVar('dob'),
                'phone' => $this->request->getVar('phone'),
            ];
            
           // print_r($newData);
            $model->save($newData);
            return redirect()->to('members');
        }

        echo view('templates/header', $data);
        echo view('members');
        echo view('templates/footer');

    }

    public function usersRoles(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();

        $model = new MemberModel();
        $data['members'] = $model->getMembers();
        helper(['form']);
        helper(['form']);


        echo view('templates/header', $data);
        echo view('usersRoles');
        echo view('templates/footer');

    }


    public function deposit(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();

        $model = new DepositModel();
        $data['deposits'] = $model->getDeposits();

        $model = new MemberModel();
        $data['members'] = $model->getMembers();

        //add deposit
        $model = new DepositModel();

        helper(['form']);
        helper(['form']);
        $rules = [
            'amount' => 'required|min_length[2]|max_length[5]'
        ];
       // $model = new UserModel();
        if(! $this->validate($rules)){
            $data['validation'] = $this->validator;
        }else{
            $newData = [
                'member' => $this->request->getVar('member'),
                'amount' => $this->request->getVar('amount'),
                'payment' => $this->request->getVar('payment'),
                'date' => $this->request->getVar('date'),
            ];
            
           // print_r($newData);
            $model->save($newData);
            return redirect()->to('deposit');
        }
        

        echo view('templates/header', $data);
        echo view('deposit');
        echo view('templates/footer');

    }

    public function otherIncome(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();
       
        $model = new OtherIncomeModel();
        $data['other_income'] = $model->getOtherIncome();
        helper(['form']);
        helper(['form']);

        $rules = [
            'income_item' => 'required|min_length[3]|max_length[5]'
        ];

        $newData = [
            'income_item' => $this->request->getVar('income_item'),
            'amount' => $this->request->getVar('amount'),
            'date' => $this->request->getVar('date'),
        ];

        if(! $this->validate($rules)){
            $data['validation'] = $this->validator;
        }else{
           // $newData = [
           //     'income_item' => $this->request->getVar('income_item'),
           //     'amount' => $this->request->getVar('amount'),
           //     'date' => $this->request->getVar('date'),
           // ];
            
            //print_r($newData);
            $model->save($newData);
            return redirect()->to('otherIncome');
        }
        echo view('templates/header', $data);
        echo view('otherIncome');
        echo view('templates/footer');

    }

    public function loan(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        helper(['form']);
        helper(['form']);


        echo view('templates/header', $data);
        echo view('loan');
        echo view('templates/footer');

    }

    public function loanActive(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        helper(['form']);
        helper(['form']);


        echo view('templates/header', $data);
        echo view('loanActive');
        echo view('templates/footer');

    }

    public function loanRecord(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        helper(['form']);
        helper(['form']);


        echo view('templates/header', $data);
        echo view('loanRecord');
        echo view('templates/footer');

    }


    public function expense(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();

        $model = new CategoryModel();
        $data['category'] = $model->getCategory();
        helper(['form']);
        helper(['form']);

        $rules = [
            'category_name' => 'required|min_length[3]|max_length[5]'
        ];

        if(! $this->validate($rules)){
            $data['validation'] = $this->validator;
        }else{
            $newData = [
                'category_name' => $this->request->getVar('category_name'),
            ];
            
           // print_r($newData);
            $model->save($newData);
            return redirect()->to('expense');
        }

        echo view('templates/header', $data);
        echo view('expense');
        echo view('templates/footer');

    }

    public function sharesReport(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        $model = new MemberModel();
        $data['members'] = $model->getMembers();
        //add deposit
        $model = new DepositModel();

        helper(['form']);
        helper(['form']);
        $rules = [
            'amount' => 'required|min_length[2]|max_length[5]'
        ];
       // $model = new UserModel();
        if(! $this->validate($rules)){
            $data['validation'] = $this->validator;
        }else{
            $newData = [
                'member' => $this->request->getVar('member'),
                'amount' => $this->request->getVar('amount'),
                'payment' => $this->request->getVar('payment'),
                'date' => $this->request->getVar('date'),
            ];
            
           // print_r($newData);
            $model->save($newData);
            return redirect()->to('sharesReport');
        }


        echo view('templates/header', $data);
        echo view('sharesReport');
        echo view('templates/footer');

    }

    public function report(){
        $model = new UserModel();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        helper(['form']);
        helper(['form']);


        echo view('templates/header', $data);
        echo view('report');
        echo view('templates/footer');

    }
}
