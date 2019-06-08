<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chave', 'xml',
    ];
    
    public $timestamps = false;
    protected $primaryKey = 'chave';
    
    public static function getData($chave=0){
    
        if($chave==0){
        $value=DB::table('notas')->orderBy('chave', 'asc')->get(); 
        }else{
        $value=DB::table('notas')->where('chave', $chave)->first();
        }
        return $value;
    }
    
    public static function insertData($data){
        $value=DB::table('notas')->where('chave', $data['chave'])->get();
        if($value->count() == 0){
        DB::table('notas')->insert($data);
        return 1;
        }else{
            return 0;
        }
    
    }
    
    public static function updateData($chave,$data){
        DB::table('notas')
        ->where('chave', $chave)
        ->update($data);
    }
    
    public static function deleteData($chave){
        DB::table('notas')->where('chave', '=', $chave)->delete();
    }
}
