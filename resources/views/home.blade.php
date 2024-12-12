<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="utf-8">
        <title>API Gleison.dev</title>
        <link rel="stylesheet" href="/css/style.css">
        <!-- fontes do google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <style>
            body {
                margin: 0;
                font-family: "Montserrat", sans-serif;
            }
            .cabecalho {
                margin-top: 100px;
                margin-left: 30px;
            }
            .cabecalho h1 {
                font-size: 50px;                
                margin-bottom: 0;
            }
            .cabecalho span {
                font-size: 12px;
            }
            .descricao {
                margin: 50px 30px 50px 30px;
                font-size: 14px;
            }
            .conteudo {
                background-color: #E0FFFF;
                padding: 30px;
                height: auto;
            }
            .subtitulo {
                display: flex;
                align-items: center;
                padding-left: 10px;
                border-bottom: 2px solid ;
                border-radius: 5px 5px 0 0;
                background-color: white;
            }   
            .subtitulo h2 {
                font-size: 30px;
                margin-right: 30px;
            }
            .subtitulo span {
                font-size: 24px;
            }
            .rota {
                display: flex;
                align-items: center;
                border-bottom: 1px solid;
            }
            .rota h3 {
                /* background-color: #00FF7F; */
                background-color: #4682B4;
                padding: 10px;
                border-radius: 5px;
                width: 60px;
                text-align:  center;
                font-size: 20px;
                margin-right: 30px;
                color: white;
            }
            .rota span {
                font-size: 24px;
            }
            .parametros {
                font-size: 14px;
                margin-bottom: 30px;
            }
            .resposta {
                font-size: 14px;
            }
            .exemplo {
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }
            .codigo {
                background-color: black;
                color: white;
                padding: 5px;
                border-radius: 5px;
            }

        </style>


    </head>
    <body>
        <div class="cabecalho">
            <h1>Bem-vindo a API Gleison.dev</h1>
            <span>[ Base URL: api.gleison.dev.br/api ]</span>
        </div>
        <div class="descricao">
            <p>Esta API foi desenvolvida com propósito diverso, para atender projetos de interesse do seu criador, mas que pode ser útil para você também.</p>
            <p>O código desta API está disponível no repositório GitHub <a href="https://github.com/glaa/api_php">https://github.com/glaa/api_php</a>
        </div>
        <div class="conteudo">
            <div class="subtitulo">
                <h2>qrcode</h2><span>Gera imagem QR Code</span>
                <hr/>
            </div>
            <div class="api">
                <div class="rota">
                    <h3>POST</h3>
                    <span>/qrcode</span>
                </div>
                <div class="parametros">
                    <p>Parâmetros<p>
                    <p>text: Texto que será usado para criar a imagem do QR Code<p>
                </div>
                <div class="resposta">
                    <p>Resposta</p>
                    <p>Content-Type: image/png</p>
                    <p>200 : operação bem sucedida</p>
                    <div class="exemplo">
                        <p>Exemplo:</p>
                        <div class="codigo">
                            <p>data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJEAAACRCAIAAABMus10...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>