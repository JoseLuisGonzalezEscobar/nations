<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $primaryKey = "country_id";
    public $timestamps = false;
    public function region() {
        return $this->belongsTo(Region::class,"region_id");
    }
    public function idiomas() {
        return $this->belongsToMany(Languages::class,"country_languages","country_id","language_id");
    }
    use HasFactory;
}
