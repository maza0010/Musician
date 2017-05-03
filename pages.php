<html>
	<head>
		<title>Welcome to Malala Yousfazia</title>

<link rel="stylesheet" href="style.css" media="all">
	</head>

<body>
<div><?php include("includes/header.php"); ?></div>

<div id="main_content">
<?php 
include("includes/connect.php");

if(isset($_GET['id'])){

$page_id = $_GET['id'];

	$select_query = "select * from posts where post_id='$page_id'";

$run_query = mysql_query($select_query);

while($row=mysql_fetch_array($run_query)){

	$post_id = $row['post_id']; 
	$post_title = $row['post_title'];
	$post_date = $row['post_date'];
	$post_author = $row['post_author'];
	$post_image = $row['post_image'];
	$post_content =$row['post_content'];
?>

<h2>
<a href="pages.php?id=<?php echo $post_id; ?>">

<?php echo $post_title; ?>

</a>

</h2>

<p align="left">Published on:&nbsp;&nbsp;<b><?php echo $post_date; ?></b></p>

<p align="right">Posted by:&nbsp;&nbsp;<b><?php echo $post_author; ?></b></p>

<center><img src="images/<?php echo $post_image; ?>" width="500" height="300" /></center>

<p align="justify"><?php echo $post_content; ?></p>
<?php } }?>
</div>
<div><?php include("includes/sidebar.php"); ?></div>
<div><?php include("includes/footer.php"); ?></div>
</body>
</html>