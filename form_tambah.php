<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>Tambah Data</h3>

<div>
  <form action="proses_tambah.php" method="post">
    <label for="fname">Nama Asisten</label>
    <input type="text" id="fname" name="nama_asisten" placeholder="Your name..">
    <label for="country">Status</label>
    <select id="country" name="status">
      <option value="1">Aktif</option>
      <option value="0">Tidak Aktif</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
