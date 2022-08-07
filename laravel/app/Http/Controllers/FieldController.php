<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;

class FieldController extends Controller
{
    public function getFields(){
        $field = Field::all();
        return response()->json(
            [
                'fields' => $field,
                'message' => 'Fields',
                'code' => 200
            ]
        );
    }

    public function addFields(Request $request){
        $field = new Field();
        $field->student_id = $request->student_id;
        $field->date_of_birth = $request->date_of_birth;
        $field->shift = $request->shift;
        $field->admission_date = $request->admission_date;
        $field->title = $request->title;
        $field->type = $request->type;
        $field->blood_group = $request->blood_group;
        $field->height = $request->height;
        $field->weight = $request->weight;

        if($field->save()){
            return response()->json([
                'message' => 'Student fields added!',
                'code' => 200
            ]);
        }
    }
}
