<?php $n = 1; ?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-color: darkgray;
}
.item
{
	filter: brightness(70%) blur(1px);
}
.rest
{
	margin: auto;
	color: white;
	position: relative;
	z-index: 1337;
	text-decoration: none;
}
a
{
	text-decoration: none;
	color: #b5bd68;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.fuckshit
{
	text-decoration: none;
	color: white !important;
}
.endarken
{
	width: 50%;
	background-color: rgba(0, 0, 0, .5);
	overflow-wrap: break-word;
}
<?php
srand(time());
$fuck = scandir("./imgs");
shuffle($fuck);
for ($i = 0; $i < $n; $i++)
{
	foreach($fuck as $imgfn)
	{
		if ($imgfn == ".." || $imgfn == ".") {continue;}
		echo(".".str_replace(".", "-", $imgfn).$i."\n{");
?>
	width: <?php echo(rand(75, 300)); ?>px;
	left: <?php echo(rand(-5, 90)); ?>%;
	top: <?php echo(rand(-5, 90)); ?>%;
	position: fixed;
	display: block;
}
<?php
	}
}

?>
</style>
</head>
<body>
<div class='bg'>
<?php
for ($i = 0; $i < $n; $i++)
{
	foreach($fuck as $imgfn)
	{
		if ($imgfn == ".." || $imgfn == ".") {continue;}
		echo("<img class='item ".str_replace(".", "-", $imgfn).$i."' "."src='/imgs/".$imgfn."'>");
	}
}
?>
</div>
<div class='rest'>
<center>
<a href='/' class='fuckshit'><h1>cynic</h1></a>
<div class='endarken'>
<?php

$pages = explode("\nSPLITPOST\n", file_get_contents("./pages.shitfmt"));

foreach($pages as $page)
{
	$data = explode("===", $page);
	$linkname = $data[0];
	$path = $data[1];
	$contents = $data[2];

	if (!isset($_GET[$path]))
	{
	?>
	<a href="/?<?php echo($path); ?>">><?php echo($linkname); ?></a><br>
	<?php
	}
	else
	{
	?>
	<?php echo($contents); ?>
	<?php
	}
}
?>
</div>

</center>
</div>
</body>
</html>
