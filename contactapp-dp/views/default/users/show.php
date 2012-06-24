<div class="sidebar"><br/>
<a class="featured" href="<?php echo PROJECT_URL; ?>/users/add"> Add User </a>
</div>
<h1> User Admin </h1>
<p>
Create, Edit or Delete users of the Contact System here.
</p>
<table>
<tr>
<th> Username </th>
<th> Admin? </th>
<th> </th>
<th> </th>
</tr>
<?php
foreach ($view['users'] as $user) {
	echo view::show('users/row', array('user' => $user));
}
?>
</table>
<script type="text/javascript" src="<?php echo PROJECT_URL;?>/assets/removal.js">
</script>
