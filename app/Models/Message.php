<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Chatroom;

class Message extends Model
{
    protected $fillable = ['room', 'sender', 'receiver', 'content'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver');
    }

    public function room()
    {
        return $this->belongsTo(Chatroom::class, 'room');
    }
}
