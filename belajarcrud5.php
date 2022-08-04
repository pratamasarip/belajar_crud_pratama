<html>

<head>
    <title>Menampilkan Database Web</title>
</head>

<body>
    <h2>CRUD data perpustakaan</h2>
    <br />
    <h3>ADMIN</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>username</th>
            <th>passsword</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "db_perpusweb";

        $connect = mysqli_connect($servername, $username, $password, $database);

        $no = 1;
        $data = mysqli_query($connect, "SELECT * FROM admin");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['username'] ?></td>
                <td><?php echo $d['password'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h3>ANGGOTA</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "db_perpusweb";

        $connect = mysqli_connect($servername, $username, $password, $database);

        $no = 1;
        $data = mysqli_query($connect, "SELECT * FROM anggota");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['nama'] ?></td>
                <td><?php echo $d['no_telp'] ?></td>
                <td><?php echo $d['alamat'] ?></td>
                <td><?php echo $d['email'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h3>BUKU</h3>
    <table border="1">
        <tr>
            <th>id_katalog</th>
            <th>judul_buku</th>
            <th>pengarang</th>
            <th>thn_terbit</th>
            <th>penerbit</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "db_perpusweb";

        $connect = mysqli_connect($servername, $username, $password, $database);

        $no = 1;
        $data = mysqli_query($connect, "SELECT * FROM buku");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['id_katalog'] ?></td>
                <td><?php echo $d['judul_buku'] ?></td>
                <td><?php echo $d['pengarang'] ?></td>
                <td><?php echo $d['thn_terbit'] ?></td>
                <td><?php echo $d['penerbit'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>