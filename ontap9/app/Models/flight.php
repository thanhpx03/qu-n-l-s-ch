<?php

namespace App\Models;
use App\Models\airline;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    use HasFactory;
    protected $fillable=['flight_number','image','total','desctription','airline_id'];

    public function airline(){
        return $this->belongsTo(airline::class);
    }
}
