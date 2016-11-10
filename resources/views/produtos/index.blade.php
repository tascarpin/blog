<html>
    <head>
        <title>Produtos</title>
    </head>
    <body>
{{--    {{ dd($produtos->chunk(3)) }}--}}
    {{--{{ $produtos }}--}}
    {{ dd($produtos) }}

        {{--<h1>Produtos</h1>--}}

        {{--<ul>--}}
            {{--@foreach($produtos as $produto)--}}
                {{--<li>{{ $produto->nome }}--}}
                    {{--<ul>--}}
                        {{--<li>{{ $produto->descricao }}</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@foreach ($produtos->chunk(3) as $chunk)--}}
        {{--<div class="row">--}}
            {{--@foreach ($chunk as $produto)--}}
                {{--<div class="col-xs-4">{{ $produto->nome }}</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--@endforeach--}}

    </body>
<html>