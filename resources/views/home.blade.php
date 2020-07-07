@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis nulla quia optio. Eveniet ut, pariatur aut soluta maxime id laborum debitis aperiam aliquid nobis quisquam veniam, natus quidem iure laboriosam?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection