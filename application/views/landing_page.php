<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Penggajian</title>
      <!-- StyleSheets -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/fontawesome/css/all.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css" />
   </head>
   <body>
      <!-- Pre Loader -->
      <div class="Loader" id="Loader">
         <div class="LoaderWrapper">
            <div class="circleBall"></div>
            <div class="circleBall"></div>
            <div class="circleBall"></div>
         </div>
      </div>
      <!-- Go to top Button -->
      <a href="#Home">
         <div class="Gototop">
               <i class="fa fa-angle-double-up text-white" aria-hidden="true"></i>
         </div>
      </a>
      <!-- Header Section -->
      <div class="Header" id="Home">
         <nav class="navbar fixed-top">
            <div class="container">
               <a class="navbar-brand" href="#">Penggajian</a>
               <div class="collapse_menu deactive">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <ul class="nav">
                     <li class="nav-item">
                        <a class="nav-link" href="#Home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Tentang">Informasi Website</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#AboutMe">About Me</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login');?>">Login</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="banner">
            <div class="layer">
               <div class="row Section">
                  <div class="col">
                     <div class="box">
                        <div>
                           <h2>Penggajian <br> Karyawan</h2>
                        </div>
                        <p>aplikasi ini dibuat untuk membantu perusahaan dalam proses penggajian karyawan</p>
                     </div>
                  </div>
                  <div class="col headerImg" style="background-image: url('<?php echo base_url()?>assets/img/payroll.svg');"></div>
                  <div class="col-12 Dicover_Parent">
                     <a href="#AboutMe">
                        <div class="Discover">
                           <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Service Section -->
      <div class="Service" id="Tentang">
         <div class="Section">
            <div class="text-center">
               <h2>Informasi Website</h2>
               <div class="subHeading">
                  Berikut informasi singkat tentang website penggajian karyawan
               </div>
            </div>

            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <script> 
             $(document).ready(function(){
               $("#flip1").click(function(){
                 $("#panel1").slideToggle("slow");
               });
             });
             </script>
             <style> 
             #panel1, #flip1 {
               padding: 5px;
               text-align: center;
               background-color: #00BFD8;
               border: solid 1px #c3c3c3;
             }

             #panel1 {
               padding: 10px;
               display: none;
             }
             </style>
            <div class="content">
               <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/tentang.svg"></div>
                        <div class="body">
                           <div class="title">Tentang Website</div>
                           <div id="flip1">Read More</div>
                           <div id="panel1">aplikasi ini dibuat untuk membantu perusahaan dalam proses penggajian karyawan</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip2").click(function(){
                       $("#panel2").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel2, #flip2 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                   }

                   #panel2 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/administrator.svg"></div>
                        <div class="body">
                           <div class="title">Halaman Admin</div>
                           <div id="flip2">Read More</div>
                           <div id="panel2">Administrator dapat menggunakan website untuk mengelola data pada website, halaman administrator terdapat dashboard / informasi singkat mengenai data data, terdapat data karyawan untuk pengelolaan karyawan, terdapat data jabatan untuk pengelolaan jabatan, terdapat data transaksi yang memiliki sub menu data absensi, setting potongan gaji, data gaji, terdapat data laporan yang memiliki sub menu laporan absensi, laporan gaji, cetak slip gaji.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip3").click(function(){
                       $("#panel3").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel3, #flip3 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                   }

                   #panel3 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/karyawan.svg"></div>
                        <div class="body">
                           <div class="title">Halaman Karyawan</div>
                           <div id="flip3">Read More</div>
                           <div id="panel3">Halaman karyawan terdapat informasi tentang karyawan dan cetak slip gaji.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                  $(document).ready(function(){
                     $("#flip4").click(function(){
                       $("#panel4").slideToggle("slow");
                     });
                  });
                  </script>
                  <style> 
                   #panel4, #flip4 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                  }

                   #panel4 {
                     padding: 10px;
                     display: none;
                  }
                  </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/others-fitur.svg"></div>
                        <div class="body">
                           <div class="title">Fitur Lainnya</div>
                           <div id="flip4">Read More</div>
                           <div id="panel4">Cetak slip gaji, lupa password, login karyawan</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Team Section -->
      <div class="Team" id="AboutMe">
         <div class="Section">
            <div class="text-center">
               <h2>About Me</h2>
               <div class="subHeading">
                  Berikut informasi singkat tentang pembuat website :
                     
               </div>
               <br>
            </div>
            <div class="content">
               <div class="team row">
                  <div class="team-memeber col-md-6 col-lg-4 col-xl-3">
                     <div class="card">
                        <div class="TopImg">
                           <img src="<?php echo base_url(); ?>assets/img/bagus.png" class="rounded-circle w-100 d-block">
                        </div>
                        <div class="TeamInfo text-center">
                           <div class="Name">Bagus Budi Satoto</div>
                           <div class="bio">Seorang Mahasiswa Informatika</div>
                           <div class="Job">Software Enginnering</div>
                           <div class="social_links">
                              <div class="social">
                                 <a href="https://github.com/bagussatoto" target="_blank"><i class="fab fa-github" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                              <a href="https://www.instagram.com/bagus_satoto1/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a href="https://www.facebook.com/bagussatoto1/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                              <a href="https://twitter.com/Sibagus_nokel" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Section -->
      <div class="Footer" id="Footer">
         <div class="container">
            <div class="row">
               <div class="col-12 text-center my-3">
                  Copyright &copy; BAGUS BUDI SATOTO | Aplikasi Penggajian 2023 - All Rights Reserved
               </div>
            </div>
         </div>
      </div>
      <!-- Javascripts -->
      <script src="<?php echo base_url(); ?>assets/landing/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/script.js"></script>
   </body>
</html>