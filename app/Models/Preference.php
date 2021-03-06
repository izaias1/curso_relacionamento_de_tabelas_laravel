<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;

    // arquivos que podem ser acessados e editados.
    protected $fillable = [
        'notify_emails',
        'notify',
        'backgroud_color'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
