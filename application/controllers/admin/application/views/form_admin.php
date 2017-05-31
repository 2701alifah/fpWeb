<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head><body>
<form method="POST" enctype="multipart/form-data" action="<?php echo base_url()."control/do_insert/";?>">
	<h2>FORM ARTIKEL</h2>
	<?php ?>

	<!--//helper form, referensi :-->
	<!--https://www.codeigniter.com/userguide3/helpers/form_helper.html*/<br>-->

	<table>
<tr>
 <td><label for="judul">Judul</label></td>
 <td><input type="text" name="judul" value=" "><br/></td>
</tr>
<tr>
 <td><label for="author">Author</label></td>
 <td><input type="text" name="author" value=" "><br/></td>
</tr>
 <tr>
   <td><label for="foto">Foto</label></td>
   <td><input type="file" name="foto" size="20"><br/></td>
 </tr>
 <tr>
 <td><label for="teks_artikel">Isi artikel</label></td>
 <td><textarea name="teks_artikel"></textarea><br/></td>
</tr>
 <tr>
		<td></td>
		<td><input type="submit" name="btnSubmit" value="Kirim"></td>
 </tr>
 </table>
</form>	
</body>
</html>