<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Aksi</th>
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
        <td id="nama<?= $row['nim'] ?>"><?= $row['nama'] ?></td>
        <td id="prodi<?= $row['nim'] ?>"><?= $row['prodi'] ?></td>
        <td id="angkatan<?= $row['nim'] ?>"><?= $row['angkatan'] ?></td>
        <td><form method="POST" id="form_hapus<?= $row['nim'] ?>"><input type="hidden" name="hapus_nim" value="<?= $row['nim'] ?>"></form><button onclick="hapus(<?= $row['nim'] ?>)">Hapus</button><button onclick="bring(<?= $row['nim'] ?>)">Edit</button></td>
    </tr>
    <?php
        endwhile;
    ?>
</table>