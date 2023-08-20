<?php

namespace Xpeedstudio\Employee\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'position', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
