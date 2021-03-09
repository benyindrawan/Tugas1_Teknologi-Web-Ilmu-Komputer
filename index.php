<!DOCTYPE html>
<html lang="en">

<head>

    <title>
        Sistem Informasi Perpustakaan
    </title>
    <script src="jquery-3.5.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content=" ">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="article:publisher" content="">
    <meta property="article:modified_time" content="2021-02-12T06:55:22+00:00" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header4>
        <h1>
        <?php
        echo "Deret Aritmatika";
        echo "<br>";
            function print_deret_ar($total)
        {
                $pertama=3;
                $kedua=4;
  
                    $hasil1 = "$pertama $kedua";
 
                    for ($i=0; $i<$total-2; $i++)
                    {
                        $keluaran = $pertama + $kedua;

                        $hasil1 = $hasil1." $keluaran";
  
                        $pertama = $kedua;
                        $kedua = $keluaran;
                    }
            return $keluaran;
        }

            function print_deret_fb1($jumlah)
        {
                $angka1=3;
                $angka2=4;
  
                $hasil = "$angka1 $angka2";
 
                        for ($i=0; $i<$jumlah-2; $i++)
                        {
                            $output = $angka1 + $angka2;

                            $hasil = $hasil." $output";
  
                             $angka1 = $angka2;
                            $angka2 = $output;
                        }
            return $hasil;
        }
  
echo print_deret_fb1(4);
echo "<br>";
echo "<br>";
echo "Hasil Suku ke 10";
        echo "<br>";
echo print_deret_ar(10);
echo "<br>";

?>
        </h1>
    </header4>

    <header2>
        <h1>
        <?php
        echo "Deret Fibonacci";
        echo "<br>";
function print_deret_fibonacci($jumlah)
{

  $angka1=4;
  $angka2=7;
  

  $hasil = "$angka1 $angka2";
 
  for ($i=0; $i<$jumlah-2; $i++)
  {

    $output = $angka1 + $angka2;

    $hasil = $hasil." $output";
  

    $angka1 = $angka2;
    $angka2 = $output;
  }
  return $hasil;
}
  
echo print_deret_fibonacci(10);
echo "<br>";
 
echo print_deret_fibonacci(15);
echo "<br>";
?>
        </h1>
    </header2>
    <header>
        <div class="main">
            <div class="ig">
                <img src="assets/ig.png">
            </div>

            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="title">
            <h1> Sistem Informasi Perpustakaan</h1>
        </div>
        <div class="button">
            <a href="#" class="btn">Watch Video</a>
            <a href="#" class="btn">Learn More</a>
        </div>
    </header>

    <header1>
        <div class="container  ">
            <div class="content">
                <div class="col-lg-8  bg-info">
                    <h1>Form Registrasi</h1>
                    <hr>
                    <form class="  form-horizontal  " action="  ">
                        <div class="form-group  ">
                            <label class="control-label  col-sm-3  ">Nama:</label>
                            <div class="col-sm-9  ">
                                <input type="text" class="form- control  " required placeholder="Masukkan  Nama  " name="nama  ">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="control-label  col-sm-3  ">NIK:</label>
                            <div class="col-sm-9  ">
                                <input type="number" class="form- control  " required placeholder="Masukkan  NIK  " name="nik  ">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="control-label  col-sm-3  ">Email:</label>
                            <div class="col-sm-9  ">
                                <input type="email" class="form- control  " placeholder="Email  " name="email  ">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="control-label  col-sm-3  ">Status  Pekerjaan:</label>
                            <div class="col-sm-9  ">
                                <select name="status_pekerjaan" class="form-control  sp">
                                        <option  value="  ">Pilih</option>
                                        <option  value="bekerja">Bekerja</option>
                                        <option  value="mahasiswa">Mahasiswa</option>
                                        <option  value="siswa">Siswa</option>
                                        <option  value="tidakbekerja">Tidak  Bekerja</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group  hide  keterangan  spo">
                            <label class="control-label  col-sm-3  ket  ">Nama  Perusahaan  :</label>
                            <div class="col-sm-9  ">
                                <input type="text" class="form- control" name="keterangan" placeholder="Enter  password  ">
                            </div>
                        </div>
                        <div class="form-group  hide  ps  spo">
                            <label class="control-label  col-sm-3  ">Program  Studi:</label>
                            <div class="col-sm-9  ">
                                <input type="text" class="form- control" name="ps" placeholder="Enter  password  ">
                            </div>
                        </div>
                        <div class="form-group  hide  kelas  spo">
                            <label class="control-label  col-sm-3  ">Kelas:</label>
                            <div class="col-sm-9  ">
                                <input type="text" class="form- control" name="kelas" placeholder="Enter password ">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="control-label  col-sm-3  ">Password:</label>
                            <div class="col-sm-9  ">
                                <input type="password" class="form- control  psw  " placeholder="Enter  password  ">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="control-label  col-sm-3  ">Re  Password:</label>
                            <div class="col-sm-9  ">
                                <input type="password" class="form- control  repsw  " placeholder="Enter  password  ">
                                <small class="errpsw  "></small>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <div class="col-sm-offset-2  col-sm-9  ">
                                <div class="checkbox ">
                                    <label><input  type="checkbox"  name="remember  ">  Remember  me</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <div class="col-sm-offset-3  col-sm-9  ">
                                <button type="submit  " class="btn  btn-default  ">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-4  ">
                </div>
            </div>

        </div>
        <div id="myModal  " class="modal  fade  " role="dialog  ">
            <div class="modal-dialog  ">
                <!--  Modal  content-->
                <div class="modal-content  ">
                    <div class="modal-header  ">
                        <button type="button  " class="close  " data- dismiss="modal  ">&times;</button>
                        <h4 class="modal-title  ">Berhasil</h4>
                    </div>
                    <div class="modal-body  ">
                        <p></p>
                    </div>
                    <div class="modal-footer  ">
                        <button type="button  " class="btn  btn-default  " data- dismiss="modal  ">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </header1>

</body>

<script>
    $(document).ready(function() {
        $(".form-horizontal  ").submit(function() {

            var ps1 = $('.psw').val();
            var ps2 = $('.repsw').val();
            var valid = 0;
            $('.err').html('');
            if (ps1 == ps2) {
                valid = 1;
            } else {
                $('.errpsw').html('Passsword  Tidak  Sama');
            }
            if (valid == 0) {
                event.preventDefault();
            } else {
                $('p').html("Selamat  pendaftaran  A.N  " + $('input[name="nama  "]').val() + " telah  berhasil  ");
                $('.modal').modal('show');
                event.preventDefault();
            }
        });
        $('.sp').change(function() {

            $('.spo').addClass('hide');
            if ($(this).val() == 'bekerja') {
                $('.keterangan').removeClass('hide');
                $('.ket').html('Nama  Perusahaan');
            }
            if ($(this).val() == 'mahasiswa') {
                $('.keterangan').removeClass('hide');
                $('.ps').removeClass('hide');
                $('.kelas').addClass('hide');
                $('.ket').html('Nama  Universitas');
            }
            if ($(this).val() == 'siswa') {
                $('.keterangan').removeClass('hide');
                $('.kelas').removeClass('hide');
                $('.ps').addClass('hide');
                $('.ket').html('Nama  Sekolah');
            }
        });
    });
</script>

</html>
