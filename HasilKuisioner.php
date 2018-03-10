<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <title>Kuisioner Kepuasan Pelanggan</title>
</head>

<body>
    <?php
$extension = strtolower(pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION));
$photo = "uploaded." . $extension;
if (file_exists($photo)) {
    unlink($photo);
}
move_uploaded_file($_FILES['pic']['tmp_name'], $photo);
?>
    <div class="form-box">
        <div>
          
                
                  <label for="name">NAMA</label>
               <div><?php echo $_POST ['name']; ?></div>

                <label for="lname">UMUR</label>
                <div><?php echo $_POST ['umur']; ?></div>


                <label for="name">TTL</label>
                <div><?php echo $_POST ['address']; ?></div>


                <label for="name">N0. HP</label>
                <div><?php echo $_POST ['number']; ?></div>



                <label for="job">PEKERJAAN</label>
                <div><?php echo $_POST ['Pekerjaan']; ?></div>
                    

                <label for="gender">JENIS KELAMIN</label>
                <div><?php echo $_POST ['JenisKelamin']; ?></div>


                <label for="question">Apakah anda menikmati pelayanan kami?</label>
                <div><?php echo $_POST ['answer']; ?></div>


                <label for="question">Apakah produk kami sesuai dengan yang anda harapkan?</label>
               <div><?php echo $_POST ['answer1']; ?></div>


                <label for="question">Apakah harga yang kami tawarkan terjangkau?</label>
                <div><?php echo $_POST ['answer2']; ?></div>


                <label for="question">Bagaimana kenyamanan tempat kami?</label>
                <div><?php echo $_POST ['answer3']; ?></div>


                <label for="question">Apakah karyawan kami tanggap dan cepat dalam melayani Anda?</label>
                <div><?php echo $_POST ['answer4']; ?></div>

                <label for="question">Produk apa yang sudah anda gunakan?</label>
               <div>
                   <ul>
                       <?php foreach ($_POST['Products'] as $Products) {
                           echo "<li> " . $Products;
                       } ?>
                   </ul>
               </div>

        
                <label for="name">KRITIK & SARAN</label>
                <div><?php echo $_POST ['kritik']; ?></div>

                
                 <div>
                    <label for="text">FOTO DENGAN PRODUK</label>
                    <br>
                    <div></div>
                    <img class="foto-pelanggan" src="<?php echo $photo ?>" alt="Foto Pelanggan" width="250px" height="150px">
                </div>
        </div>
    </div>
</body>

</html>