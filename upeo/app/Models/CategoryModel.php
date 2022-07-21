<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class CategoryModel extends Model{
        protected $table = 'category';
        protected $allowedFields = ['category_name','created'];
        //protected $beforeInsert = ['beforeInsert'];
        protected $beforeUpdate = ['beforeUpdate'];

        public function getCategory($id = false) {
            if($id === false) {
              return $this->findAll();
            } else {
                return $this->getWhere(['category_id' => $id]);
            }
          }
      
    }