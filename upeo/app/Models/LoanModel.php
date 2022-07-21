<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class LoanModel extends Model{
        protected $table = 'loans';
        protected $allowedFields = ['loan_id','l_member','amount', 'interest', 'bank_charges','p_balance','date','due_date','status'];
        protected $beforeInsert = ['beforeInsert'];
        protected $beforeUpdate = ['beforeUpdate'];

        /*public function getDeposits($id = false) {
            if($id === false) {
                    $this->join('members', 'deposits.member = members.id', 'left');
              return $this->findAll();
            } else {
                return $this->getWhere(['dep_id' => $id]);
            }
        }*/

        
      
    }