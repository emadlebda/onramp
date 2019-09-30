<?php

namespace App;

use App\Completable;
use App\Completion;
use App\Resource;
use App\Skill;
use Illuminate\Database\Eloquent\Model;

class Module extends Model implements Completable
{
    protected $guarded = ['id'];

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function completions()
    {
        return $this->morphMany(Completion::class, 'completable');
    }
}