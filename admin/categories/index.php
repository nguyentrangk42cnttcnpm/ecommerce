<?php
include '../../dbconnect.php';
$stmt = $pdo->prepare('SELECT * FROM categories');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
					
	<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/309/802/themes/655372/assets/bootstrap.scss.css?1638333101085" onload="this.rel='stylesheet'" />
	<link href="//bizweb.dktcdn.net/100/309/802/themes/655372/assets/bootstrap.scss.css?1638333101085" rel="stylesheet" type="text/css" />
	<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/309/802/themes/655372/assets/base.scss.css?1638333101085" onload="this.rel='stylesheet'" />
	<link href="//bizweb.dktcdn.net/100/309/802/themes/655372/assets/base.scss.css?1638333101085" rel="stylesheet" type="text/css" />			
	<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/309/802/themes/655372/assets/ant-noi-that.scss.css?1638333101085" onload="this.rel='stylesheet'" />
	<link href="//bizweb.dktcdn.net/100/309/802/themes/655372/assets/ant-noi-that.scss.css?1638333101085" rel="stylesheet" type="text/css" />		
	<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/309/802/themes/655372/assets/jquery-2.2.3.min.js?1638333101085" />
	<script src="//bizweb.dktcdn.net/100/309/802/themes/655372/assets/jquery-2.2.3.min.js?1638333101085" type="text/javascript"></script>		
</head>
<body>
    <div class="row py-5">
		<div class="col-lg-9 mx-auto text-black text-center">
			<h1 class="display-4">Danh sách</h1>
		</div>
	</div>
    <div class="container"> 
        <table class="table table-borderless table-hover">
            <thead style="background-color:	#FFCC00;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = $stmt->Fetch()){
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                </tr>
                <?php }?>
            </tbody>       
        </table>
    </div>
</body>
</html>