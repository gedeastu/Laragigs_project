@extends('layouts.Root')
@section('container')
<h1 class="py-10">Halaman Home</h1>
{{-- <h3>{{$Name}}</h3> --}}
<div class="flex flex-row px-10 gap-10">
@foreach ($Datas as $Data)
<a href="/{{$Data['Slug']}}">
<h1>{{$Data["Title"]}}</h1>
<p>{{$Data["Desc"]}}</p>
</a>
@endforeach
</div>
@endsection