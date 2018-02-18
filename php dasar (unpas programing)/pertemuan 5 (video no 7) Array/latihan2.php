<?php 
//pengulangan oada array
//froeach

$books = [1,2,3,4,5,6,7,8,9];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 2</title>
 	<style type="text/css">
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}

 		.clear {
 			clear: both;
 		}
 	</style>
 </head>
 <body>
 <!-- 	cara 1 -->
 	<?php for ($i=0; $i< count($books); $i++) { ?> 
 		<div class="kotak"><?php echo $books[$i]; ?></div>
 	 <?php } ?>
 <!-- cara 2 -->
 <div class="clear"></div>

 	<?php foreach ( $books as $book) { ?>
 	 	<div class="kotak"><?php echo $book ?></div>
 	<?php  } ?>
 </body>
 </html>