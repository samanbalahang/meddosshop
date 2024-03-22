<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        "cat_id",
        "prodoct_id",
        "Feature_name",
        "Feature_values",
    ];
}
