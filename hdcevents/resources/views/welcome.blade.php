 @extends('layouts.main')

 @section('title', 'HCV Events')

 @section('content')
      <h1>Algum titulo</h1>
      @if(10 == 5)
            <p>A condição é true</p>
      @endif

      <p>{{$nome}}</p>

      @if($nome == "Messias")
      <p>O nome é {{$nome}}</p>
      @else 
      <p>O nome não é Mateus</p>
      @endif

      <p>{{$idade}}</p>


      @for($i = 0;$i < count($arr); $i++)
        <p>{{ $arr[$i]}}</p>
      @endfor
 @endsection
 
