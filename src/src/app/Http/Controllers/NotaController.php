<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
    
    public function index()
    {
        $chave = $r->chave;
        $chave = $chave.'sasa';
        //return view('home.show')->with('chave', $chave);
        return view('nota')->with('chave', $chave);

        $data['squirrel'] = $squirrel;
        return View::make('simple', $data);

    }

    public function buscarNota(Request $request)
    {
        $chave = $request->chave;

        $xml = $this->getNfe($chave);

        $data['chave'] = $chave;
        $data['xml'] = $xml;
        
        return view('nota')->with('chave', $chave)->with('xml', $xml);
    }

    public function salvarNotas(Request $request)
    {
        echo($this->getNfe('35180104710149000115550010000084031000084036'));
    } 
    
    public function getNfe($chv)
    {
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://apiuat.arquivei.com.br/v1/nfe/received",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "x-api-id: p7WHm8CxRVKi9VnQZh7T",
            "x-api-key: FnXr5RkM60V7O9c7Wdzh"
          ),
        ));
        
        $response = curl_exec($curl);
        $result = json_decode($response, true);
        $err = curl_error($curl);
        
        curl_close($curl);
        $xml = null;
        if ($err) {
          return "cURL Error #:" . $err;
        } else {
         
            ob_flush();//Flush the data here

            for ($i = 0; $i < count($result['data']); $i++) {

                $chave = $result['data'][$i]['access_key'];

                if($chave == $chv){
                    $xml = base64_decode($result['data'][$i]['xml']);
                }
            }

            if($xml == null){
                return "Nota não encontrada.";
            }
            else{
                return htmlspecialchars($xml, ENT_QUOTES, 'UTF-8');
            }
     
        }
    }
}
