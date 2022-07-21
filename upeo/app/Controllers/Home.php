<?php

namespace App\Controllers;
use App\Models\MemberModel;
use App\Models\UserModel;
use App\Models\LoanModel;



class Home extends BaseController
{

    public function __construct()
    {
        helper(['form']);
        helper(['form']);
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function loan(){
        $lmodel = new LoanModel();
        $model = new UserModel();

        $data['user'] = $model->where('id', session()->get('id'))->first();
        $data['loans'] = $lmodel->findAll();

        //dd( $data['loans']);
        if ($data)
        {
            echo view('templates/header', $data);
            echo view('loans');
            echo view('templates/footer');
        }
        else
        {
           echo "Nothing";
        }
    }

    public function create_loan()
    {
        # code...
    }

    public function store()
    {
        $model = new LoanModel();

         $date = $this->request->getVar('date');

        $newData = [
            'l_member' => $this->request->getVar('l_member'),
            'amount' => $this->request->getVar('amount'),
            'interest' => $this->request->getVar('interest'),
            'bank_charges' => $this->request->getVar('bank_charges'),
            'p_balance' => $this->request->getVar('p_balance'),
            'date' => $date,
            'due_date' => date('Y-m-d', strtotime($date. "+3 months")),
            'status' => $this->request->getVar('status'),
        ];
        $model->save($newData);
        $session = session();
        $session->setFlashdata('success', 'Succesfully Created');
        return redirect()->to('loans');
    }
}
