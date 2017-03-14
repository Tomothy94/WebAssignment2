<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
   //Set Model Table
    protected $table = 'fixtures';
    
    //Set Model Primary Key
    protected $primaryKey = 'FixtureID';
    
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('HomeTeam', 'AwayTeam', 'TeamID');
}
