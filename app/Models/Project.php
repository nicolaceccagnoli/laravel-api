<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'type_id',
        'cover_img',
    ];

    /*
        Ogni volta che viene serializzato un post si porterà appresso
        full_cover_img
    */
    protected $appends = ['full_cover_img'];

    /*
        "COMPUTED PROPERTIES" DEL MODEL
    */
    //full_cover_img
    public function getFullCoverImgAttribute() {
        // Se c'è una cover_img
        if ($this->cover_img) {
            // Allora mi restituisci il percorso completo
            return asset('storage/'.$this->cover_img);
        } else {
            return null;
        }
    } 

    //Stabilisco la relazione con i Types  
    public function type() {
        return $this->belongsTo(Type::class);
    }

    //Many-to-Many con Technology
    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }
}
