<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>

<html>
	<head>
		<title>Admin Panel</title>
	
	<link rel="stylesheet" href="admin_style.css" />
	</head>
	
<body>
<div id="header">
<a href="index.php">
<h1>Welcome to the Admin Panel</h1></a>

</div> 

<div id="sidebar">
Welcome:<h2><?php echo $_SESSION['user_name']; ?></h2>
<h2><a href="logout.php">Logout</a></h2>
<h2><a href="view_posts.php">View Posts</a></h2>
<h2><a href="index.php?insert=insert">Insert New Post</a></h2>
<h2><a href="#">View Comments</a></h2>


</div>

<div id="welcome"> 

<h1>Welcome to your Admin Panel or dashboard</h1>

<h4> Hi Dad. This is your admin panel page, where you can manage your website files and content</h4>
<p>hakuna mutu mwengine mwenye anaweza kufika hapa. ni miye tu na weye teehee :)</p>


</div>
<?php 
	
	if(isset($_GET['insert'])){
	
	include("insert_post.php");
	
	}


?>

</body>
</html>

<?php } ?>