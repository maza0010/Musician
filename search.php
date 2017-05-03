<html>
	<head>
		<title>Query results</title>

<link rel="stylesheet" href="style.css" media="all">
	</head>

<body>
<div><?php include("includes/header.php"); ?></div>

<div id="main_content">
<h1>Search Results:</h1>
<?php 
include("includes/connect.php");

if(isset($_GET['search'])){

   $search_id = $_GET['value'];
	
	$search_query = "select * from posts where post_keywords like '%$search_id%'";
	
	$run_query = mysql_query($search_query);
	
	while ($search_row=mysql_fetch_array($run_query)){
	
	$post_id = $search_row['post_id'];
	$post_title = $search_row['post_title'];
	$post_image = $search_row['post_image'];
	$post_content = substr($search_row['post_content'],0,150);
	
?>

<center>


<h2>
<a href="pages.php?id=<?php echo $post_id; ?>">
<?php echo $post_title; ?>
</a>

</h2>

<img src="images/<?php echo $post_image; ?>" width="300" height="100">

<p><?php echo $post_content; ?></p>

</center>


<?php } }
 else {
     echo 'No Results found';     
}
?>

</div>
<div><?php include("includes/sidebar.php"); ?></div>
<div><?php include("includes/footer.php"); ?>/div>




</body>
</html>