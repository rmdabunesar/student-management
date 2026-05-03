<?php
namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function addData()
    {
        // $item                = new Student();
        // $item->name          = 'Jhon Wick';
        // $item->email         = 'jhonwick@example.com';
        // $item->age           = 26;
        // $item->date_of_birth = '2004-01-01';
        // $item->gender        = 'Male';
        // $item->score         = 80;
        // $item->save();

        return "Data Added Successfully";
    }

    public function getData()
    {
        // $items = Student::all();
        // $items = Student::where('id', '>', 1)->get();
        // $items = Student::select('name', 'email')->where('id', '>', 2)->get();
        $items = Student::select('name', 'email')->find(3);

        return $items;
    }

    public function updateData()
    {
        $item        = Student::find(4);
        $item->name  = 'Jhon Sina';
        $item->email = 'jhonsina@example.com';
        $item->update();

        return "Data Updated Successfully";
    }

    public function deleteData()
    {
        $item = Student::findOrFail(4);
        $item->delete();

        return "Data Deleted Successfully";
    }

    public function whereCondition()
    {
        // $items = Student::where('score', '<', 90)
        // ->where('age', '>', 25)
        // ->orWhere('name', 'like', '%Jhon%')
        // ->get();

        // $items = Student::whereBetween('score', [80, 90])->get();
        // $items = Student::whereNotBetween('score', [80, 90])->get();
        // $items = Student::whereIn('score', [80, 85, 88])->get();
        // $items = Student::whereNotIn('score', [80, 85, 88])->get();
        // $items = Student::whereAny(['age', 'score'], '=', ['20', '85'])->get();
        $items = Student::whereAll(['age', 'score'], '=', ['20', '85'])->get();

        return $items;
    }

    public function queryScope()
    {
        $items = Student::female(20)->get();

        return $items;
    }

    public function secondQuery()
    {
        $items = Student::female(20)->get();

        return $items;
    }
}
