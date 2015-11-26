<!DOCTYPE html>
<html>
<head>
	<title>user</title>
</head>
<body> 

<a href="<?=base_url();?>index.php/user/user/add">Add New</a>
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td style="font-weight: bold;font-size:20px;">No</td>
		<td style="font-weight: bold;font-size:20px;">Username</td>
		<td style="font-weight: bold;font-size:20px;">Gender</td>
		<td style="font-weight: bold;font-size:20px;">Email</td>
		<td style="font-weight: bold;font-size:20px;">Action</td>
	</tr>
	<?php
	$n=1;
	foreach($user as $row):
	$gender=($row->gender==1)?'Male':'Female';
	?>
	<tr>
		<td style="font-family:Segoe Print"><?=$n?></td>
		<td style="font-family:Segoe Print"><?=$row->username;?></td>
		<td style="font-family:Segoe Print"><?=$row->gender;?></td>
		<td style="font-family:Segoe Print"><?=$row->address;?></td>
		<td>
			<a href="<?=base_url();?>index.php/user/user/edit/<?=$row->user_id;?>">Edit</a>
			<a href="javascript:;" onClick="confirm_delete(<?=$row->user_id?>)">Delete</a>
		</td>
	</tr>
	<?php $n++; endforeach; ?>
</table>
</body>
</html>

<script>

	function confirm_delete(id)
	{
		var res = confirm('Are you sure want to delete one record now?');
		if(res==true)
		{
			window.location="<?=base_url()?>index.php/user/user/delete"+id;
		}
	}

</script>