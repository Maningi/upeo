<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class OtherIncomeModel extends Model{
        protected $table = 'other_income';
        protected $allowedFields = ['income_item','amount','date','created'];
        //protected $beforeInsert = ['beforeInsert'];
        protected $beforeUpdate = ['beforeUpdate'];

        public function getOtherIncome($id = false) {
            if($id === false) {
              return $this->findAll();
            } else {
                return $this->getWhere(['income_id' => $id]);
            }
          }
      
    }