<?php
session_start();
include('db.php');
//取数据
$sql="SELECT * FROM msg ORDER BY id DESC";
$mysqli_result = $mysqli->query($sql);

$rows = array();
while($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)){
	$rows[]=$row;
}

?>
<!DOCTPE html>
<html>
	<head>
        <meta charset="utf-8">
		<title>留言板</title>
		<link rel='stylesheet' href='style.css'/>
	</head>

	<body>
		<div class="add">
			<form action="save.php" method="POST">
				<textarea name="msg">留言内容</textarea>
				<input class="user" name="user" type='text'/>
				<input class="btn" type='submit'value="发表"/>
				<a class='btn' href="login.php"> 登 陆</a>

			</form>
		</div>
		
		<div class="msg">
		
		<?php
			foreach($rows as $row ){
				$t=date("Y-m-d H:i:s",$row['intime']);
		?>
		
		<div class="item">
			<span class="user"><?php echo $row['username'];?></span>
			<span class="time"><?php echo $t;?>
				<?php
				if(isset($_SESSION['username'])){
				?>
				
				<a href="delete.php?id=<?php echo $row['id'];?>">删除</a>
				<?php
				}
				?>
			</span>
			
			<div style="clear:both;"></div>
			<p><?php echo $row['content'];?></p>
		</div>
		
		
		<?php 
		}
		?>
		</div>
	
	</body>


</html>
