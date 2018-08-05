<h2>Data Peserta</h2>
<hr>
            <table class="table table-hover table-bordered display compact" id="">
            <thead  class="btn-primary">
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Nik</th>
                <th align="center">HP</th>
                <th align="center">Email</th>
                <th align="center">Skema Sertifikasi</th>
                <th align="center">Tempat Uji Kompetensi</th>
                <th align="center">Rekomendasi</th>
                <th align="center">Tanggal Terbit Sertifikat</th>
                <th align="center">Tanggal Lahir</th>
                <th align="center">Organisasi</th>
            </thead>
             <tbody>
            <?php 
                include ('koneksi.php');

                $tampil = mysqli_query($koneksi,"SELECT * FROM data_peserta order by tanggal_lahir");
                $no = 1;
                while ($d = mysqli_fetch_array($tampil))
                {
            ?>

                <tr>
                        <td><?php echo $no; ?></td>
                        <td><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;<?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nik']; ?></td>
                        <td><?php echo $d['hp']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                        <td><?php echo $d['skema_sertifikasi']; ?></td>
                        <td><?php echo $d['tempat_uji_kompetensi']; ?></td>
                        <td><?php echo $d['rekomendasi']; ?></td>
                        <td><?php echo $d['tanggal_terbit_sertifikat']; ?></td>
                        <td><?php echo $d['tanggal_lahir']; ?></td>
                        <td><?php echo $d['organisasi']; ?></td>
                        
                </tr>
                <?php 
                    $no++;
                }
                ?>
                </tbody>
            </table>


    <script>
        window.print();
    </script>