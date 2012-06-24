<?php
$PROJECT_URL = PROJECT_URL;
echo "<a href=\"{$PROJECT_URL}/contacts/view/" . $view['contact'] -> id . '">';
echo "{$view['contact'] -> firstname}";
echo "{$view['contact'] -> middlename} {$view['contact'] -> lastname}";
echo '</a>';