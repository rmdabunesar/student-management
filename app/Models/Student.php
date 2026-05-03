<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function scopeMale($query, $age = 20)
    {
        return $query->where('gender', 'male')->where('age', '=', $age);
    }

    public function scopeFemale($query, $age = 20)
    {
        return $query->where('gender', 'female')->where('age', '=', $age);
    }
}
