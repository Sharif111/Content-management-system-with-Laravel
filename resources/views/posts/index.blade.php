<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<ul>
		<?php foreach($data as $row) { ?>
		<li>
			<?php echo $row['name']; ?><br/>
			<?php echo $row['company']; ?><br/>
        </li>
        <?php } ?>
        
    </ul>
		
</body>
</html>
