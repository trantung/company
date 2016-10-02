<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class AdminTeam extends Eloquent {
    use SoftDeletingTrait;
    protected $table = 'team';
    protected $fillable = ['name', 'position', 'image_url', 'description'];
    protected $dates = ['deleted_at'];
}