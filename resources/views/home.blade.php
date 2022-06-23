
@extends('main.main')

@section('content')
  
<ul>
  @foreach($aiuto as $aiutino)
    <li>{{ $aiutino }}</li>
  @endforeach
</ul>

@endsection