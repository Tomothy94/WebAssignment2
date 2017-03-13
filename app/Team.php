<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   //Set Model Table
    protected $table = 'teams';
    
    //Set Model Primary Key
    protected $primaryKey = 'TeamID';
    
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('TeamName', 'TeamID');
}
