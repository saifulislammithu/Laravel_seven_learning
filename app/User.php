<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','profile_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function upload_profile_image($image)
    {
        $fileName=$image->getClientOriginalname();
        (new self())->deleteOldImage();
        $image->storeAs('images',$fileName,'public');
        auth()->user()->update(['profile_image'=>$fileName]);
    }
    protected function deleteOldImage()
    {
        if($this->profile_image)
            {
                Storage::delete('/public/images/'.$this->profile_image);
                
    }
    }

    
}

