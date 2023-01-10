<?php 
		include("config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rainbow Sport</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
</head>
<body>
    <form action="index.php" method="post">
    	   <table border="1" align="center" width="1000" cellpadding="5"cellspacing="10">
    	   <thead>
    	   	<tr>
                   <th>STT</th>
    	   	   	   <th>Tên sinh viên</th>
    	   	   	   <th>Email</th>
    	   	   	   <th>Phone</th>
    	   	   	   <th>PassWord</th>
    	   	   	   <th>Date</th>
    	   	        <th colspan="2">Aside</th>
    	   	   </tr>
    	   </thead>

			<tbody>
				<?php 
    	   		 $sql="select * from account";
    	   		 $sqlQuery = mysqli_query($conn, $sql);
    	   		 while($row=mysqli_fetch_assoc($sqlQuery)){
    	   	?>
    	   	<br>
    	   	<tr>
    	   		 <td><?php echo $row['ID'] ?></td>
    	   		  <td><?php echo $row['name']?></td>
    	   		  <td><?php echo $row['email']?></td>
    	   		  <td><?php echo $row['phone']?></td>
    	   		  <td><?php echo $row['password']?></td>
    	   		  <td><input type="date" value="<?php echo $row['date']?>"></td>
    	   		  <td><a href="./View/delete.php?this_id=<?php echo $row['ID']?>" class="btn btn-danger btnXoa"><i class="fa fa-trash" aria-hidden="true"></i> Xóa </a></td>
    	   		  <td><a href="./View/editaccount.php?this_id=<?php echo $row['ID']?>" class="btn btn-warning btnSua"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa </a></td>
    	   	</tr>
			</tbody>
    	   	
    	   	
    	   	 

    	   	   	
<?php }?>

    	   </table>
    </form>
</body>
</html>

<style>
table th{
   background: green;
   color: #fff;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   height: 40px;
   padding: 20px;
   width: 20px;
   text-align: center;
}
table td{
   background: #fff;
   font-family:'Times New Roman', Times, serif ;
   padding: 10px;
   font-size: 20px;
   text-align: center;
}
.btnXoa
{
	height: 30px;
	margin:4px;
	
}

.btnSua
{
	height: 30px;
	margin:4px;
	
}
</style>