<?php

namespace App\Models;
use Illuminate\Support\Str;

class RekomendasiMakanan extends Model{
    protected $table = 'rekomendasi_makanan';

    function handleUploadFoto(){        
        if(request()->hasFile('foto')){
           $foto = request()->file('foto');
           $destination = "images/rekomendasimakanan";
           $randomstr = Str::random(5);
           $filename = $this->id."-".time()."-".$randomstr.".".$foto->extension();
           $url = $foto->storeAs($destination, $filename);
           $this->foto = "app/".$url;
           $this->save();
        }
    }
    function handleUpdateFoto(){        
      if(request()->hasFile('foto')){
         $this->handleDeleteFoto();
         $foto = request()->file('foto');
         $destination = "images/rekomendasimakanan";
         $randomstr = Str::random(5);
         $filename = $this->id."-".time()."-".$randomstr.".".$foto->extension();
         $url = $foto->storeAs($destination, $filename);
         $this->foto = "app/".$url;
         $this->save();
      }
  }

  function handleDeleteFoto(){
       $foto = $this->foto;
       $path = public_path($foto); 
       if(file_exists($path)){
            unlink($path);
        }
        return true;
   }
}