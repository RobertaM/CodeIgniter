<html>
<head> <title></title>
	<style type="text/css" media="screen">
		label{display : block;}
	</style>
</head>
<body>
	<h2>Create</h2>
	<?php echo form_open('site/create'); ?>

	<p>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title"/>

	</p>

	<p>
		<label for="continent">Content:</label>
		<input type="text" name="continent" id="continent"/>
	</p>

	<p>
		<input type="submit" value="submit"/>
	</p>

	<?php echo form_close(); ?>

	<hr />

	<h2> Read <h2>

		<?php if(isset($records)) : foreach($records as $row) : ?>

		<h2><?php echo anchor("site/delete/$row->id", $row->title); $row->title; ?> </h2>
		<div><?php echo $row->continent; ?></div>
		<?php endforeach; ?>
		<?php else : ?>
		
		<h2> no records returned</h2>

		<?php endif; ?>



		<hr />

		<h2>Delete</h2>

		<p>click on a heading </p>





</body>

</html>
