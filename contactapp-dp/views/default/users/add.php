<?php
echo view::show('users/manage',
	array('title' => 'Add User',
		'action' => '/users/processadd'));