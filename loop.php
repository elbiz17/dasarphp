<?php 
 


$nama = "Lukman Budiman"; 

$nama_depan = "Lukman";
$nama_belakang ="Budiman";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Belajar PHP</title>
	 <style>
		 .warna_baris{
			 background-color:blue;
		}
	 </style>
 </head>
 <body>
	 <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
	 <p> <?php echo $nama_depan ." ". $nama_belakang; ?></p>
	 <!-- for -->
	 <p>
		<?php 
			for( $i = 5; $i < 5; $i++){
				echo "Hellow <br>";
			}
		?>

	 </p>

<!-- while -->
	 <p>while <br>
		<?php 
			$i = 0;
			while( $i < 5){
				echo "Hellow <br>";
			$i++;
			}
		?>

	 </p>

	 <p>do while <br>
		 <?php 
		 $i=10;
		 do {
			 echo "Hello world <br>";
		$i++;
		 }while ($i < 5);
		 
		 ?>
	 </p>
 <br>
 <br>


 <table border="1" cellpading="1" cellspacing="0">
		 <?php 
		 	$i=1;
			while($i<=3){
				echo "<tr>";
				$j=1;
				while($j<=5){
					echo "<td>$i, $j </td>";		
					$j++;
				}
				echo "</tr>";
				$i++;
			}
			
		 ?>
	</table>
	<br>


<p>while</p>
<table border="1" cellpadding="1" cellspacing="0">
			<?php $i=1; 
			while($i<=3) { ?>
				<tr>
					<?php $j=1; 
					while($j<=5){ ?>
						<td> <?php echo "$i, $j";?></td>
						
					<?php $j++;} ?>
					
				</tr>
				
			<?php $i++;} ?>
</table>

	<br>
	<table border="1" cellpading="1" cellspacing="0">
	<?php 
		$i=1;
		do {
			echo "<tr>";
			$j=1;
			do{
				echo "<td> $i, $j</td>";
				$j++;
				}while($j<=5);
			
		echo"</tr>";
	  	$i++;
		
		}while ($i <=10);
		
		
		
	?>

	</table>
<br>


<p>tabel do while</p>
	<table border="1" cellpadding="1" cellspacing="0">
			<?php 
			 $i=1;
			 do{ ?>
			
			 <?php  ?>
				<?php if($i % 2 == 1) : ?>
				<tr class="warna_baris">
				<?php else :  ?>
					<tr>
				<?php endif; ?>
					<?php 
					$j=1;
					do{ ?>
					<td> <?php echo "$i, $j"; ?></td>
					<?php $j++;}while($j<=5); ?>
				</tr>
				 
			 <?php $i++; }while($i<=10); ?>
			 

	</table>
	<br>


	 <table border="1", cellpading="10" cellspacing="0">
		 <!-- <tr>
			 <td>1,1</td>
			 <td>1,2</td>
			 <td>1,3</td>
		</tr> -->


		
		
		<?php
			for($i=1; $i<=3; $i++){
				echo "<tr>";
					for($j =1; $j <=5; $j++){
						echo "<td>$i,$j</td>";
					}
				echo"</tr>";
			}
		?>
		
	</table>
		&ensp;

	<p>Warna Tabel For</p>
	 <table border="1", cellpading="10" cellspacing="0">
			<?php 
					for($i=1; $i <=5; $i++): ?>
					<?php if($i % 2 == 0) : ?>
						<tr class="warna_baris">
					<?php else : ?>
						<tr>
					<?php endif; ?>
				
						<?php for($j=1; $j<=5; $j++) : ?>
							<td><?php echo "$i, $j" ?></td>
						<?php endfor; ?>
					</tr>
			<?php endfor;?>
	<table>
	&ensp;
<?php 
echo date("l", time()+60*60*24*100);

echo date("d  M  Y", time()-60*60*24*100);

?> <br>
 <br>
<!-- mktime -->
<!-- (0,0,0,0,0,0)
jam, menit, detik, bulan, tanggal, tahun -->
<?php
echo date("l", mktime(0,0,0,5,13,1998));
?>

 </body>
 </html>

