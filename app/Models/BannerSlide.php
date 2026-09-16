<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'item_class',
    'category',
    'title',
    'text',
    'primary_label',
    'primary_url',
    'secondary_label',
    'secondary_url',
])]
class BannerSlide extends Model
{
    //
}
