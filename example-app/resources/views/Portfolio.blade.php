@extends('layouts.Root')
@section('container')
<article>
    <div class="flex flex-col items-center">
        <div class="text-center">
        <h2>{{$Portfolio["Title"]}}</h2>
        <h3>{{$Portfolio["Developher"]}}</h3>
        <div>
        <p>{{$Portfolio["Technology"]}}</p>
        </div>
        </div>
        <p class="text-center">{{$Portfolio["Desc"]}}</p>
        <a href="/portfolios">Back to Portfolios</a>
    </div>
</article>
@endsection