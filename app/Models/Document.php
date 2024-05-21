<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = "documents";
    protected $fillable = [
        "from",
        "to",
        "subject",
        "description",
        "prioritization",
        "classification",
        "subclasssification",
        "action",
        "deadline",
        "file",
    ];
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_user_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_user_id');
    }

}