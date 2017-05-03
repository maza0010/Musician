<div id="sidebar">

<div id="searchbox">
	
	<form action="search.php" method="get" enctype="multipart/form-data">
	<!-- Set size to 25 as africans tend to search whole name of things -->
	<input type="text" name="value" placeholder="Search/tafuta ..." size="25">
	
	<input type="submit" name="search" value="Search">

	
	<form>

</div>


<div id="social">
	<h2>Follow Us</h2>
	<a href="http://wwww.facebook.com/faustinkibukila" target="blank"><img src="images/facebook.gif"></a>
	<img src="images/google.png">
	<img src="images/twitter.png">
	<img src="images/pin.png">

</div>
<h2 align="center">Recent Posts</h2>
<div>
<?php 
include("includes/connect.php");

$query = "select * from posts order by 1 DESC LIMIT 0,5";

	$run = mysql_query($query); 
	
	while ($row=mysql_fetch_array($run)){
	
	$post_id = $row['post_id'];
	$title = $row['post_title'];
	$image = $row['post_image'];

?>
	<center>
	
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<h3><?php echo $title; ?></h3></a>
	
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<img src='images/<?php echo $image; ?>' width='140' height='140'></a>
	
	</center>
	
<?php } ?>

</div>

</div>