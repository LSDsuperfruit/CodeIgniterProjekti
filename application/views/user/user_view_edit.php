<?=form_open('user/user/update')?>
	<table cellpadding="5" border="0">
		<tr>
			<td>Username</td>
			<td>
			<?=form_input('txtusername', $get_edit->username);?>
			<?=form_hidden('txtid', $get_edit->user_id);?>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><?=form_dropdown('slogender',array('1'=>'Male', '2'=>'Female'), $get_edit->gender);?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?=form_textarea('txtaddress', $get_edit->address);?></td>
		</tr>	
		<tr>
			<td></td>
			<td><?=form_submit('btnsubmit', 'Save');?></td>
		</tr>
	</table>
<?=form_close();?>