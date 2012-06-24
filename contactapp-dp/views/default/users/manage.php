<?php
echo '<h1>' . $view['title'] . ' </h1>';
echo view::show('standard/errors');

echo '<form method="post" action="'. PROJECT_URL . $view['action'] . '">';
if (isset($view['user']) && !is_null($view['user'])) {
	echo '<input type="hidden" name="id" value="' .
	$view['user'] -> id . '"/> ';
}
//print_r($view);
echo '<div class="row"><label for="username">Username: </label>';
$value = (isset($view['user']) && !is_null($view['user']))? $view['user'] -> username : '';
echo '<input type="text" name="username" id="username" value="' .
	$value . '"/></div>';
echo '<div class="row"><label for="password">Password: </label>';
echo '<input type="password" name="password" id="password"/></div>';
echo '<div class="row"><label>Is Admin?</label>';
$options = array('No', 'Yes');
$value = (int) (isset($view['user']) && !is_null($view['user'])) ? $view['user'] -> admin : 0;
foreach ($options as $key => $option) {
	echo '<input class="radio" type="radio" name="admin" value="'
		. $key . '"';
	if ($value == $key) echo 'checked="checkedh';
	echo '/><span class="radiooption">' . $option .'</span>';
}
echo '</div>';
echo '<div class="row"><label for="submit"></label>
<input id="submit" type="submit" class="submitbuton" value="'
	. $view['title'].'"/></div>';
echo '</form>';
