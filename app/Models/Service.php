<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'text', 'icon', 'icon_alt', 'url'])]
class Service extends Model
{
    //
}
