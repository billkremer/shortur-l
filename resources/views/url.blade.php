@extends('layouts.app')

@section('content')

<?php 
var_dump($longUrl);
  header('Location: '.$longUrl);
  exit;
?>

@endsection
