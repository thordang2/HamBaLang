<!DOCTYPE html>
<html>
	<head>
		<title>JP Tranining</title>
		<link href="assets/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			.warning {
				border-color: #eea236;
			}
		</style>
	</head>
	<body>
		<div class="container well">
	  		<h3 class="text-left">Character Map Training</h3>
		</div>
		<div id="instafeed"></div>
	</body>
	<script src="assets/jquery-1.11.2.js"></script>
	<script src="lib.js"></script>
	<script type="text/javascript">
		//Define
		
		var userFeed = new Instafeed({
			    get: 'tagged',
				tagName: 'yoga',
				target:'instafeed',
			    clientId: '831f5eac21f149afbc3ffefee3011306',
			    accessToken: '6548873774.831f5ea.35112181b29849d3b1525d8584a4149c',
			    resolution: 'standard_resolution',
			    template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
			    sortBy: 'most-recent',
			    limit: 24,
			    links: false
		});

		userFeed.run();

	</script>
</html>


