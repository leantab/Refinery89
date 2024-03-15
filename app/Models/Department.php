<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'subdepartment_of'];

    public function subdepartmentOf(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'subdepartment_of');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
