<html>
    <head>
        <title>Belajar Get dan Post</title>
    </head>
    <body>
        <form action="" method="GET">
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama">
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat">
            <input type="submit" name="submit" value="submit">
        </form>

        <?php
        //belajar get dan post
        //GET = data di oper ke web dengan secara terlihat ( di url )
        //POST = data di oper ke web dengan secara tidak terlihat ( di url )
        if ($_GET) {
            echo "Nama : " . $_GET["nama"];
            echo "</br>";
            echo "Alamat : " . $_GET["alamat"];
        }
        ?>
        
    </body>
</html>