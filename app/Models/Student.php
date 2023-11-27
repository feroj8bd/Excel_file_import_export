<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Student extends Model
{
    use HasFactory;
    // import excel file data
    protected $fillable = ['name', 'email', 'password'];

    //export excel file data
    public static function getAllStudent()
    {
        $result = DB::table('students')->select('id', 'name', 'email', 'address')->get()->toArray();
    }
}
