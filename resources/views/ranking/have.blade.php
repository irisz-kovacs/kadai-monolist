@extends('layouts.app')

@section('content')
    <h1>Have Ranking</h1>

        
    @include('items.items', ['items' => $items_have, 'type' => $type])
        

@endsection