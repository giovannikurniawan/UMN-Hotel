<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="forminput">
		<h3>Input Kamar</h3>
		<form method="post" action="fungsi/prosesinput" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="table">ID Kamar</td>
					<td class="table"><input type="text" required="required" name="id"></td>
				</tr>
				<tr>
					<td class="table">Tipe</td>
					<td class="table">
						<select name="tipe" required="required" style="font-weight: bold; border: 2px solid white">
						<option selected="selected" disabled="disabled">--Pilih--</option>
						<option>Standard</option>
						<option>Superior</option>
						<option>Deluxe</option>
						<option>Junior Suite</option>
						<option>Suite</option>
						<option>Executive</option>
						<option>Presidential/Penthouse</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="table">Jumlah</td>
					<td class="table"><input type="text" required="required" name="jumlah"></td>
				</tr>
				<tr>
					<td class="table">Harga</td>
					<td class="table"><input type="text" required="required" name="harga"></td>
				</tr>
				<tr>
					<td class="table">Gambar</td>
					<td class="table"><input type="file" required="required" name="gambar"></td>
				</tr>
				<tr>
					<td class="table"></td>
					<td class="table"><button type="submit" style="width:100px;background:#008B8B; color:white;font-weight:bold;padding:4px;border:2px solid white;">Simpan</button></td>
				</tr>
			</table>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>