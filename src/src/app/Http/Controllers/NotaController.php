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

    public function salvarNotas()
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
          echo "cURL Error #:" . $err;
        } else {
         
            ob_flush();//Flush the data here

            if($result['data'] == null){
                echo "Serviço indisponível.";
            }
            else{
                for ($i = 0; $i < count($result['data']); $i++) {

                    $chave = $result['data'][$i]['access_key'];
                    $xml = $result['data'][$i]['xml'];

                    $nota = new Nota([
                        'chave' => $chave,
                        'xml' => $xml
                    ]);

                    $nota->save();
                    
                }
                echo "Notas salvas com sucesso.";
            }
        }
    } 
    
    public function getNfe($chv)
    {
        if(strlen($chv) != 44){
            return "Tamanho da chave inválido";
        }
        
        $nota = Nota::getData($chv);
        
        if($nota == null){
            return "Nota não encontrada.";
        }
        else{
            $chave = $nota->chave;
            $xml = base64_decode($nota->xml);
            return $xml;
        }
      
    }
}
