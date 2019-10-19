<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>おみくじの結果</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">

    </head>


    <body class="vh-100 d-flex align-items-center justify-content-center text-center">

            <div class="content mt-3">
                <div class="text-black-50 mt-3">
                    <p>あなたの運勢は {{$result}} です</p>
                </div>

                <div class="mt-3">
                  <a href="" class="btn btn-outline-secondary">
                    おみくじんじゃへ戻る
                  </a>
                </div>
            </div>

    </body>


</html>
