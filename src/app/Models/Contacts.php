<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    const GENDER_LABELS=[
        1=>'男性',
        2=>'女性',
        3=>'その他',
    ];

    public function getGenderLabelAttribute(){
        return self::GENDER_LABELS[$this->gender];
    }
}
