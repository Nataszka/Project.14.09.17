<?php 
	$site = isset( $_GET['site'] ) ? $_GET['site'] : 'home';

?>

<a class=" <?php echo $site == 'home' ? 'active' : '';  ?> " href="index.php">Strona Główna</a>
<a class=" <?php echo $site == 'maroko' ? 'active' : '';  ?> " href="index.php?site=maroko">Maroko</a>
<a class=" <?php echo $site == 'Filipiny' ? 'active' : '';  ?> " href="index.php?site=Filipiny">Filipiny</a>
<a class=" <?php echo $site == 'Bali' ? 'active' : '';  ?> " href="index.php?site=Bali">Bali</a>
<a class=" <?php echo $site == 'Taj' ? 'active' : '';  ?> " href="index.php?site=Taj">Tajlandia</a>
<a class=" <?php echo $site == 'kambodza' ? 'active' : '';  ?> " href="index.php?site=kambodza">Tajlandia+Kambodża</a>

