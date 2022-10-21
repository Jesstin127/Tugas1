<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curicullum Vitae</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<style>
    th,td{
        color: white;
    }

    h4 {
        margin:0;
    }
</style>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <a class="s-header__menu-toggle" href="#0" class="">
                <span class="s-header__menu-text">Menu</span>
                <span class="s-header__menu-icon"></span>
            </a>

            <nav class="s-header__nav">

                <a href="#0" class="s-header__nav-close-btn" title="close"><span>Close</span></a>
                <h3>Jesstin Jodhanto</h3>

                <ul class="s-header__nav-list">
                    <li><a href="welcome">Intro</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="education">Education & Experiences</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="lihatkrs">Lihat KRS</a></li>
                </ul>
            </nav>

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- intro
            ----------------------------------------------- -->
            <section id="services" class="s-services"  style="padding-top:100px;">

                <div class="s-services__bg"></div>
                
                <div class="row narrow section-header section-header--dark has-bottom-sep">
                    <div class="column lg-12" >
                    



            <table style="padding:0; margin:0;">
                <tr>
                    <td><h4 style = 'color: white'>Nama</h4></td>
    
                    <?php
                        $nama = DB::table('mahasiswa')
                        ->where('ID_Mahasiswa', '3')
                        ->value('Nama');
    
                        echo "<td><h4 style = 'color: white';>".$nama." </h4></td>";
                    ?>
    
                    </tr>

                <tr>
                        <td><h4 style = 'color: white'>NIM</h4></td>
        
                        <?php
                            $studentID = DB::table('mahasiswa')
                            ->where('id_mahasiswa', '3')
                            ->value('StudentID');
        
                            echo "<td><h4 style = 'color: white';>".$studentID."</h4></td>";
                        ?>
                </tr>

                <tr>
                    <td><h4 style = 'color: white'>Term</h4></td>
                    <?php
                    $term = DB::table('mahasiswa')
                    ->where('id_mahasiswa', '3')
                    ->value('term');

                    echo "<td><h4 style = 'color: white';>".$term."</h4></td>";
                ?>
                </tr>



                <tr>
                    <td><h4 style = 'color: white'>Jumlah SKS</h4></td>
                    <?php
                    $total=0;
                    $id=1;
                    while($id<7){                    
                        $temp = $total + DB::table('matakuliah')->where('id_matakuliah',$id)->value('sks');
                        $total = $temp;
                        $id++;
                    }
                    echo "<td><h4 style = 'color: white'>".$total."</h4></td>";
                ?>
                </tr>



            </table>

            <hr style="background-color: white; height: 2px">
                       
            <table width="700px">
                <tr>
                    <th>No.</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th style='text-align:center'>SKS</th>
                </tr>
                <?php
                    $no=1;
                    while ($no<7) {
                        
                        $kodematakuliah = DB::table('matakuliah')
                        ->where('id_matakuliah', $no)
                        ->value('kode_matakuliah');

                        $namamatakuliah = DB::table('matakuliah')
                        ->where('id_matakuliah', $no)
                        ->value('nama_matakuliah');

                        $sks = DB::table('matakuliah')
                        ->where('id_matakuliah', $no)
                        ->value('sks');

                        echo "<tr>";
                        echo "<td>".$no."</td>";                        
                        echo "<td>".$kodematakuliah."</td>";
                        echo "<td>".$namamatakuliah."</td>";
                        echo "<td style='text-align:center'; 'color: white';>".$sks."</td>";
                        echo "</tr>";

                        $no++;
                    }  
                ?>
              

            </table>
                        
                    </div> <!-- end column -->
                </div> <!-- end section header -->

                		

            </section>

            


            


    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>