<?php
echo validation_errors();
?>
<?php echo form_open_multipart('users/create'); ?>

<form method="post" action="<?php echo site_url('MyController/upload')?>">

<tr>
<td><label for="userfile">Image</label></td>
<td><input type="file" name="userfile" size="20" /></td>
</tr>
<tr>
<td><input type="hidden" name="is_submit" value="1" /></td>
<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>

<?php echo form_close(); ?>