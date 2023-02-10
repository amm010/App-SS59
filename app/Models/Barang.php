<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function merks(){
        return $this->hasOne(Merk::class, "id","merks_id");
    }

    public function kategoris(){
        return $this->hasOne(Kategori::class, "id","kategoris_id");
    }
}
