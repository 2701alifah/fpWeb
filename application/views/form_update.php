<!DOCTYPE html>
<html>
<head>
	<title>FORMASTA SURABAYA</title>
</head>
<body>
<form method="POST" action="<?php echo base_url()."index.php/control/do_update/";?>">

	<!--//helper form, referensi :-->
	<!--https://www.codeigniter.com/userguide3/helpers/form_helper.html*/<br>-->

	<table>
<tr>
 <td><label for="judul">Judul</label></td>
 <td><input type="text" name="judul" value="<?php echo $judul;?>"><br/></td>
</tr>
<tr>
 <td><label for="author">Author</label></td>
 <td><input type="text" name="author" value="<?php echo $author;?>"><br/></td>
</tr>
 <tr>
   <td><label for="foto">Foto</label></td>
   <td><input type="file" name="foto" size="20"><br/></td>
 </tr>
 <tr>
 <td><label for="teks_artikel">Isi artikel</label></td>
 <td><textarea name="teks_artikel" value="<?php echo set_value('teks_artikel', $teks_artikel); ?>"></textarea><br/></td>
</tr>
 <tr>
		<td></td>
		<td><input type="submit" name="btnSubmit" value="Simpan"></td>
 </tr>
 </table>

</form>	
</body>
</html>