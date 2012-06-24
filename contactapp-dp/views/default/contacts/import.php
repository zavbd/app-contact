<h1> Import Your Contacts </h1>
<p>
Upload a .csv file from Outlook. Contact helpdesk for assistance.
</p>
<?php
echo view::show('standard/errors');
?>
<form action="<?php echo PROJECT_URL; ?>/contacts/processimport" method="post"
enctype="multipart/form-data">
	<input type="hidden" name="importtype" value="outlook"/>
	<div class="row">
		<label for="csv">CSV File: </label>
		<input type="file" id="contactsfile" name="contactsfile" />
	</div>
	<div class="row">
		<label for="submit"></label>
		<input id="submit" type="submit" class="submitbutton" value="Upload"/>
	</div>
</form>