
<?php 
	$dato1= $_POST['val1'];
	$dato2= $_POST['val2'];
	$tipo= $_POST['t'];
 ?>
 <?php if ($tipo==1): ?>
 	<?php echo "Resultado: ".($dato1+$dato2) ; ?>
 <?php endif ?>
 <?php if ($tipo==2): ?>
 	<?php echo "Resultado: ".($dato1-$dato2) ; ?>
 <?php endif ?>
 <?php if ($tipo==3): ?>
 	<?php echo "Resultado: ".($dato1*$dato2) ; ?>
 <?php endif ?>
 <?php if ($tipo==4): ?>
 	<?php echo "Resultado: ".($dato1/$dato2) ; ?>
 <?php endif ?>