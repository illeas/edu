<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function student(){
        $student = Student::all();
        return response()->json(
            [
                'student' => $student,
                'message' => 'Students',
                'code' => 200
            ]
        );
    }

    public function register(Request $request){
        $student = new Student();
        $student->class = $request->class;
        $student->name = $request->name;
        $student->email_address = $request->email_address;
        $student->contact_number = $request->contact_number;
        $student->password = bcrypt($request->password);

        if($student->save()){
            return response()->json([
                'message' => 'Student registration successfully!',
                'code' => 200
            ]);
        }
    }

    public function deleteStudent($id){
        $student = Student::find($id);
        if($student){
            $student->delete();
            return response()->json([
                'message' => 'Student successfully deleted!',
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => "Student with id:$id dose not exits"
            ]);
        }
    }
}
