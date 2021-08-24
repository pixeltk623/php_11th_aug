<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		* {
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}

		.col {
			width: 24%;
			float: left;
			margin: 6px;
		}

		img {
			width: 100%;
			height: 200px;
			/*padding: 5px;*/
			/*border: 1px solid grey;*/
		}

		figure {
			border: 1px solid grey;
		}
		.row::after {
			content: "";
			display: table;
			clear: both;
		}

		figcaption {
			text-align: center;
		}
		h2 {
			text-align: center;
			font-size: 35px;
			padding: 10px;
		}

		@media screen and (min-width: 320px) and (max-width: 767px){
    		
    		.col {
    			width: 100%;
    			float: none;
    			margin: 0px; 
    		}
    		img {
    			height: 500px;
    		}

		}	

		@media screen and (min-width: 768px) and (max-width: 1200px){
    		.col {
    			width: 49%;
    			margin: 0px;
    			margin: 2px;
    		}
		}
	</style>
</head>
<body>

	<div class="container">
		<h2>Image Gallery</h2>
		<div class="row">
			<div class="col">
				<figure>
					<img src="https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297__480.jpg">
				 	<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
				 </figure>
			</div>
			<div class="col">
				<figure>
					<img src="https://images.unsplash.com/photo-1618588507085-c79565432917?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmVhdXRpZnVsJTIwbmF0dXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80">
					<figcaption>Fig.1</figcaption>
				</figure>
			</div>
			<div class="col">
				<figure>
					<img src="https://images.unsplash.com/photo-1610878180933-123728745d22?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y2FuYWRhJTIwbmF0dXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80">
					<figcaption>Fig.1</figcaption>
				</figure>
			</div>
			<div class="col">
				<figure>
					<img src="https://iso.500px.com/wp-content/uploads/2016/03/stock-photo-142984111.jpg">
					<figcaption>Fig.1</figcaption>
				</figure>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<figure>
					<img src="https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297__480.jpg">
				 	<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
				 </figure>
			</div>
			<div class="col">
				<figure>
					<img src="https://images.unsplash.com/photo-1618588507085-c79565432917?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmVhdXRpZnVsJTIwbmF0dXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80">
					<figcaption>Fig.1</figcaption>
				</figure>
			</div>
			<div class="col">
				<figure>
					<img src="https://images.unsplash.com/photo-1610878180933-123728745d22?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y2FuYWRhJTIwbmF0dXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80">
					<figcaption>Fig.1</figcaption>
				</figure>
			</div>
			<div class="col">
				<figure>
					<img src="https://iso.500px.com/wp-content/uploads/2016/03/stock-photo-142984111.jpg">
					<figcaption>Fig.1</figcaption>
				</figure>
			</div>
		</div>
	</div>

</body>
</html>