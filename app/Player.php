<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
   //Set Model Table
    protected $table = 'players';
    
    public $timestamps = false;
    //Set Model Primary Key
    protected $primaryKey = 'PlayerID';
    
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('PlayerID', 'PlayerName', 'PlayerPosition', 'TeamName');
}
