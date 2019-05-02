@section('content')

<?php
 if (!isset($longUrl)) { ?>

 	<h1>Short URL Not Found</h1>

<?php } else {

 // https://css-tricks.com/redirect-web-page/#article-header-id-6
  header('Location: ' . $longUrl);
  exit;	
 } ?>

@endsection
