@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <h3>{{ $description }}</h3>
    <div class="mt-4">
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Address:</strong> {{ $address }}</p>
        <p><strong>Phone number:</strong> {{ $phoneNumber }}</p>
    </div>
</div>
@endsection
