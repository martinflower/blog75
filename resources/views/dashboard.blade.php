<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')
@section('title', 'Tableau de Bord')
@section('content')
    Bienvenue sur le tableau de bord de notre applicationphp!
@endsection
@section('footerScripts')
    @parent
    <script src="dashboard.js"></script>
@endsection