<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'role', 'image', 'facebook_url', 'twitter_url', 'linkedin_url'])]
class TeamMember extends Model
{
    //
}
