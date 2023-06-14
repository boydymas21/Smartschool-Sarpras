<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approvals extends Model
{
    use HasFactory;
    protected $fillable = [
        'approvalbarang',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
