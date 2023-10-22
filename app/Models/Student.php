<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public static function getAllStudent()
    {
        $result = DB::table('students')->select('id', 'name', 'email', 'address')->get()->toArray();
    }
}
