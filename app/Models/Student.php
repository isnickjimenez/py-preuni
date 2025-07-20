<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'dni_S',
        'name_S',
        'last_name_S',
        'middle_name_S',
        // 'slug_name_S', Esto es para la URL /jimenez-baca-nick-briam/notas
        'phone_S',
        'address_S',
        'school_S',
        'guardian_id',
    ];

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }

    // public function getRouteKeyName()
    // {
    //     return 'firtsNameE';
    // }

    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
