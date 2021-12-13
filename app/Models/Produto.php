<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function cod(){
        return $this->belongsTo(Cod::class);
    }

    public function setor(){
        return $this->belongsTo(Setor::class);
    }

    public function vendas(){
        return $this->belongsToMany(Venda::class);
    }
    
}
