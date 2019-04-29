<!-- @extends('layouts.app') -->

@section('content')

<?php
// https://css-tricks.com/redirect-web-page/#article-header-id-6
  header('Location: ' . $longUrl);
  exit;
?>

@endsection
