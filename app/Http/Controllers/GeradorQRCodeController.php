<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use chillerlan\QRCode\Common\EccLevel;

class GeradorQRCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return 'vitoria';
    }

    public function gerarQRCode(Request $request)
    {
        $text = $request->text;
        if($text == null) return null;

        $outputFile = null;

        // Configurações do QR Code usando QROptions
        $options = new QROptions([
            'eccLevel' => EccLevel::L, // Nível de correção de erro (L, M, Q, H)
            'outputType' => 'png',     // Tipo de saída: png, svg, etc.
            'scale' => 5,              // Tamanho dos blocos
            'addQuietzone' => true,    // Adicionar margem ao redor do QR Code
            'imageTransparent' => false, // Imagem não transparente
        ]);

        // Instância do QRCode
        $qrcode = new QRCode($options);

        if ($outputFile) {
            // Salva o QR Code em um arquivo
            $qrcode->render($text, $outputFile);
            echo "QR Code gerado com sucesso: {$outputFile}";
        } else {
            // Exibe o QR Code diretamente no navegador
            header('Content-Type: image/png');
            echo $qrcode->render($text);
        }

        // return 'bem-vindo ao gerador qrcode';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return null;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}