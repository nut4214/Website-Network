<!DOCTYPE html>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Video</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>HTML5 Video Tutorial by Siam HTML</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
	<div class="wrapper">
		<video id="vdo" width="500" height="250" controls>
			<source type="video/mp4" src="videos/Osi.mp4"><source>
		</video>
		
	</div>
</body>

</html>

</html>
</div>
</div>
</div>
</div>
</div>
@endsection
