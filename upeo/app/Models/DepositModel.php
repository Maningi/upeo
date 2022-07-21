<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class DepositModel extends Model{
        protected $table = 'deposits';
        protected $allowedFields = ['dep_id','member','amount', 'payment', 'date','created'];
        //protected $beforeInsert = ['beforeInsert'];
        protected $beforeUpdate = ['beforeUpdate'];

        public function getDeposits($id = false) {
            if($id === false) {
                    $this->join('members', 'deposits.member = members.id', 'left');
              return $this->findAll();
            } else {
                return $this->getWhere(['dep_id' => $id]);
            }
          }
      
    }