<!DOCTYPE html>
<html>
<head>
	<title>Artikel</title>
</head>
<body>
	<table border="1px" style="width:50%;">
		<tr style="background:red;">
			<th>Judul</th>
			<th>Author</th>
			<th>Gambar</th>
			<th>Teks Artikel</th>
			<th>Action</th>
		</tr>
		<?php foreach ($data as $list){ ?>
		<tr>
			<td><?php echo $list['judul'];?></td>
			<td><?php echo $list['author'];?></td>
			<td><img src="/upload/<?php echo $list['foto'];?>"></td>
			<td><?php echo $list['teks_artikel'];?></td>
			<td align="center">
			<a href="<?php echo base_url()."index.php/control/do_delete/".$list['judul'];?>">Delete</a>||
			<a href="<?php echo base_url()."index.php/control/edit_data/".$list['judul'];?>">Update</a></td>
		</tr>
		<?php } ?>
	</table>
	<a href="<?php echo base_url()."index.php/control/add_data/"?>">Tambah Artikel</a>
</body>
</html>