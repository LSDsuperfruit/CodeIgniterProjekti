<?=form_open('user/user/submit')?>
	<table cellpadding="5" border="0">
		<tr>
			<td>Username</td>
			<td><?=form_input('txtusername');?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><?=form_dropdown('slogender',array('1'=>'Male', '2'=>'Female'));?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?=form_textarea('txtaddress');?></td>
		</tr>	
		<tr>
			<td></td>
			<td><?=form_submit('btnsubmit', 'Save');?></td>
		</tr>
	</table>
<?=form_close();?>