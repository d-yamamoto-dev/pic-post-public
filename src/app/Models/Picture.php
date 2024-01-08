<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $table = 'pictures';

    protected $fillable = [
        'file_name',
        'file_path',
        'content_type'
    ];

    public function getAll()
    {
        return $this->get();
    }

}
