<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A4 landscape</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="<?= base_url() ?>/paper-css/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4 landscape" onload="print()">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-100mm">
        <center>
            <h2>Laporan Data Pekerjaan</h2>
        </center>
        <table style="width: 100%;" border="1">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Perusahaan</th>
                <th>Salary</th>
                <th>Tipe Waktu</th>
                <th>Pengalaman</th>
                <th>Deskripsi</th>
                <th>Tags</th>
                <th>Kontak</th>
            </tr>
            <?php $no = 1;
            foreach ($jobs as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['Judul'] ?></td>
                    <td><?= $value['perusahaan'] ?></td>
                    <td><?= $value['salary'] ?></td>
                    <td><?= $value['TipeWaktu'] ?></td>
                    <td><?= $value['Pengalaman'] ?></td>
                    <td><?= $value['Deskripsi'] ?></td>
                    <td><?= $value['Tags'] ?></td>
                    <td><?= $value['kontak'] ?></td>
                </tr>
            <?php } ?>
        </table>

    </section>

    <script>
        window.print();
    </script>

</body>

</html>