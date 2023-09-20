@extends('layouts.Root')
@section('container')
<h1 class="py-5">Halaman Portfolio</h1>
<div class="flex flex-col px-5 gap-5 sm:flex-row">
    @foreach ($Portfolios as $Portfolio)
    <a href="/portfolios/{{$Portfolio["Slug"]}}" class="flex flex-col items-center">
    <div class="text-center">
    <h2>{{$Portfolio["Title"]}}</h2>
    <h3>{{$Portfolio["Developher"]}}</h3>
    <div>
    <p>{{$Portfolio["Technology"]}}</p>
    </div>
    </div>
    <p class="text-center">{{$Portfolio["Desc"]}}</p>
    </a>
    @endforeach
</div>
@endsection