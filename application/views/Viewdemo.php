<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>thanh cong</h1>
	

        <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <?php $value = $dulieucontroller ?>
        
        <tr><?= $value['id'] ?></tr>
        <hr>
        <tr><?= $value['name'] ?></tr>
        <hr>
        <tr><?= $value['Position'] ?></tr>
        <hr>
        <tr><?= $value['Location'] ?></tr>
        <hr>
        <tr><?= $value['Age'] ?></tr>
        <hr>
        <tr><?= $value['Start_date'] ?></tr>
        <hr>
        <tr><?= $value['Salary'] ?></tr>
        <hr>
        <tr><a class="btn btn-warning" href="changeDataStaff">Details</a></tr>
        
        <?php ?>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</body>
</html>