
<?php include "fileslogic.php"?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>PDF</title>
	<style>
		
table,th,td{

			border: 2px solid rgba(0,0,0,1);
			border-collapse: collapse;
		}
table{
	position: relative;
	top:0;
	
}


	</style>
</head>
<body>
	 <h1 style="position:relative;left:40vw;">PDF</h1>
	 <table>
	 	<tr>
	 		<th>S.NO</th>
	 		<th>DEPARTMENT</th>
	 		<th>NAME</th>
	 		<th>SEM</th>
	 		<th>SUBJECT</th>
	 		<th>S.CODE</th>
	 		<th>STAFF</th>
	 		<th>DOCUMENT</th>
	 		<?php if($files!=NULL)foreach ($files as $file): ?>  
      <tr>
      <td><?php echo $i;$i++?></td>
      <td><?php echo $file['department'];?></td>
      <td><?php echo $file['name'];?></td>
      <td><?php echo $file['sem'];?></td>
      <td><?php echo $file['subject'];?></td>
      <td><?php echo $file['scode'];?></td>
      <td><?php echo $file['teacher'];?></td>

      <td><a href="display.php?np=<?php echo $file['np'] ?>">Download</a></td>
    <?php endforeach; ?>

	 		
	 	
</table>
</body>