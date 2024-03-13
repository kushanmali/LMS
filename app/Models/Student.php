<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone_number',
        'al_batch',
        'user_name',
        'birthday',
        'address',
        'national_id_number',
        

    ];

    /**
     * Get the user that owns the student.
     */
    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
