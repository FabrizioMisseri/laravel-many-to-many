<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\str;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    // collegamenti tra tabelle

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
