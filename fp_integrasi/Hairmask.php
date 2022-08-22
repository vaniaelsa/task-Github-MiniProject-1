<!DOCTYPE html>
<html>
<header>
    <title> Female Daily Hair Care Review </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</header>

<body>
    <div class="bg-image" style="background-color: #ffc4c4; height: auto;">

        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: playfair display;">Female Daily Hair Care Review</a>
                </div>
            </div>
        </nav>

        <div class="text-center" style="margin-top: 60px;">
            <h1> Daftar Hair Mask</h1>
        </div>

        <div class="container-fluid bg-dark" style="padding: 8px; margin-top: 40px;">
            <div class="btn-group" style="margin-left: 550px;">
                <a href="Index.php" class="btn btn-dark"> Shampoo</a>
                <a href="Conditioner.php" class="btn btn-dark">Conditioner</a>
                <a href="Hairmask.php" class="btn btn-light active" aria-current="page">Hair Mask</a>
                <a href="Vitserum.php" class="btn btn-dark">Vit & Serum</a>
            </div>
        </div>

        <div class="container-fluid" style="padding: 50px; font-size: small;">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Merek</th>
                        <th>Varian</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <?php
                    $no = 1;

                    include('Connection.php');
                    if (!$koneksi) {
                        die("Connection Failed : " . mysqli_connect_error());
                    }

                    $sql = mysqli_query($koneksi, "SELECT * FROM hair_mask");

                    while ($row = mysqli_fetch_assoc($sql)) {
                        echo "<tr>";
                        echo "<td> " . $no . " </td>";
                        echo "<td> " . $row['Merek'] . " </td>";
                        echo "<td> " . $row['Varian'] . "</td>";
                        echo "<td> " . $row['Rating'] . "</td>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <br>
        <br>
        <br>

    </div>
</body>
<footer class="bg-dark text-center text-white">
    <div class="container p-4">

        <section class="mb-4">
            <p>
                <strong>Final Project Pemrograman Terintegrasi</strong>
            </p>
        </section>

    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright: Elsa Salma Nindy
        <a class="text-white">Final Project</a>
    </div>
</footer>

</html>