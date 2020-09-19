<?php


    namespace App\Repositories\Student;

    interface StudentRepositoryInterface
    {

        public function all();


        public function getClassName();
        

        public function saveStudent($request);
    
    }
    

?>