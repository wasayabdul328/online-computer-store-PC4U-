<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFeedbacks extends Model
{
    protected $fillable=['name','company_name','email','phone_no','category','comments','subject'];
}
