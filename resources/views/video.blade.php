<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>HTML5 Video Tutorial by Siam HTML</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
	<div class="wrapper">
		<video id="vdo" width="1500" height="500" controls>
			<source type="video/mp4" src="videos/Osi.mp4"><source>
		</video>
		<div class="controls">
		  <button id="button">Play/Pause</button>
		  <button id="play">Play</button>
		  <button id="pause">Pause</button>
		</div>
	</div>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script>
		jQuery(function($){
			var vdo = $('#vdo')[0];
			$('#play').click(function(){
				vdo.play();
			});
			$('#pause').click(function(){
				vdo.pause();
			});
			
			$('#button').click(function(){
				if(vdo.paused == true){
					vdo.play();
				}else{
					vdo.pause();
				}
			});
			
			vdo.addEventListener('playing', function(){
				console.log('วิดีโอได้เริ่มเล่นแล้ว');
			});
			vdo.addEventListener('ended', function(){
				console.log('วิดีโอได้เล่นจนจบแล้ว');
			});
		});
		
		var currentSrc = document.getElementById('vdo').currentSrc;
		console.log(currentSrc);
		
		var videoWidth = document.getElementById('vdo').videoWidth;
		console.log(videoWidth);
		
		var videoHeight = document.getElementById('vdo').videoHeight;
		console.log(videoHeight);
		
	</script>
</body>
</html>