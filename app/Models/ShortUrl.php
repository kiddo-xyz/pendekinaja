<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    use HasFactory;

    protected $fillable = ['original_url', 'short_url'];
    
    public function delete_links($id){
        // Temukan data yang ingin Anda hapus
        $data = ShortUrl::find($id);

        if ($data) {
            // Hapus data dari database
            $data->delete();
        }
    }
}
