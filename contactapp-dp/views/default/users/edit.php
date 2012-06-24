<?php
echo view::show('users/manage',
	array('title' => 'Edit User',
		'action' => '/users/processedit',
		'user' => $view['user']));