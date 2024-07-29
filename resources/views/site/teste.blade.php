<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   @isset($funcionarios)
    {{-- @for($i = 0; $i < count($funcionarios); $i++)  --}}
    {{-- @for($i = 0; isset($funcionarios[$i]); $i++) --}}
    {{-- @for($i = 0; $i < 10; $i++) --}}
    {{-- @foreach($funcionarios as $indices => $funcionario) --}}
    @forelse($funcionarios as $indices => $funcionario)
            Iteraçao = {{$loop->iteration}}


            Nome - {{$funcionario['nome']}}
            <br>
            Cargo - {{$funcionario['Funçao']}}
            <br>
            Telefone = {{$funcionario['ddd'] ?? ''}} {{$funcionario['tel'] ?? ''}}
            <br>
            @switch($funcionario['ddd'])
                @case ('11')
                    Sao paulo
                    @break
                @case ('21')
                    Rio de janeiro
                    @break
                @default
                    Estado nao identificado
            @endswitch
             @if ($loop->first || $loop->last)
                Primeira interaçao
            @endif
            <br>
           <hr>
            @empty
                Nao foram emcontrados nenhum usuarios
        {{-- @endfor --}}
        {{-- @endforeach --}}
        @endforelse
   @endisset



</body>
</html>