<?php


    namespace App\Repositories\Student;
    use App\Student;    
    use App\Classes;

    class StudentRepository implements StudentRepositoryInterface
    {

        public function all() {

            $student = Student::all();
            return $student;

        }

        public function getClassName() {

            $class = Classes::pluck('class_id','class_name');
            return $class;
        }

        public function saveStudent($request) {

            $request->validate([
                'name' => 'required|max:255',
                'fname' => 'required',
                'dob' => 'required',
                'reglious' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ]);
            $student=new Student();
            $student->name=$request->name;
            $student->age=$request->age;
            $student->gender=$request->gender;
            $student->father_name=$request->fname;
            $student->DOB=$request->dob;
            $student->reglious=$request->reglious;
            $student->ph_no=$request->phone;
            $student->address=$request->address;
    
            if($request->hasfile('file'))
            {
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename =time().'.'.$extension;
                $file->move('uploads/logos/', $filename);
                $student->profile_image=$filename;
            }else{
                $filename='student.png';
                $student->profile_image=$filename;
    
            }
    
            $student->save();
    
            

        }
        
    
    }
    

?>