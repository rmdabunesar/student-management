<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addData()
    {
        DB::table('students')->insert([
            [
                'name'          => 'John Doe',
                'email'         => 'johndoe@example.com',
                'age'           => 20,
                'date_of_birth' => '2004-01-01',
                'gender'        => 'Male',
                'score'         => 85,
            ],
            [
                'name'          => 'Jane Smith',
                'email'         => 'janesmith@example.com',
                'age'           => 22,
                'date_of_birth' => '2002-05-15',
                'gender'        => 'Female',
                'score'         => 92,
            ],
            [
                'name'          => 'Alice Johnson',
                'email'         => 'alicejohnson@example.com',
                'age'           => 21,
                'date_of_birth' => '2003-08-20',
                'gender'        => 'Female',
                'score'         => 88,
            ],
        ]);
        return "Data Added Successfully";
    }

    public function getData()
    {
        $students = DB::table('students')
            // ->select('name', 'email')
            // ->where('id', '>', 15)
            // ->orWhere('id', '=', 14)
            // ->get();
            // ->where('score', '>', 90)
            // ->count();
            // ->max('score');
            // ->min('score');
            ->avg('score');

        return $students;
    }

    public function updateData()
    {
        DB::table('students')
            ->where('id', 15)
            ->update(['name' => 'Updated Name']);

        return "Data Updated Successfully";
    }

    public function deleteData()
    {
        DB::table('students')
            ->where('id', 15)
            ->delete();

        return "Data Deleted Successfully";
    }
}
