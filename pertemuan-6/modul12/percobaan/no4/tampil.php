<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
    </tr>
    <?php
        include 'koneksi.php';
        $q = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nim ASC");

        $no = 0;
        while($row = mysqli_fetch_assoc($q)):
            $no++;
    ?>
    <tr>
        <td><?= $no ?></td>
        <td><?= $row['nim'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['prodi'] ?></td>
    </tr>
    <?php
        endwhile;
    ?>
</table>