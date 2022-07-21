<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class MemberModel extends Model{
        protected $table = 'members';
        protected $allowedFields = ['f_name','l_name','email', 'dob', 'phone','created'];
        //protected $beforeInsert = ['beforeInsert'];
        protected $beforeUpdate = ['beforeUpdate'];

        public function getMembers($id = false) {
            if($id === false) {
              return $this->findAll();
            } else {
                return $this->getWhere(['id' => $id]);
            }
          }
      
    }