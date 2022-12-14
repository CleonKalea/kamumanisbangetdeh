@extends('layout.main')
@section('top')
    
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/FormStyle.css">
    </head>
    <body>
        <div class="box"> 
            <h1 class="header">SUBMITTED DATA</h1>
            <h6 class="headersubtext"><i>RUMAH SAKIT RUMAH SEHAT</i></h6>
            <?php
                echo "Username : ";
                echo "<br>";
                echo '<div class="dataoutput">'.$_POST["username"].'</div>';
                echo "<br>";

                echo "Nama : ";
                echo "<br>";
                echo '<div class="dataoutput">'.$_POST["nama"].'</div>';
                echo "<br>";

                echo "Email : ";
                echo "<br>";
                echo '<div class="dataoutput">'.$_POST["email"].'</div>';
                echo "<br>";
                
                echo "No Telepon : ";
                echo "<br>";
                echo '<div class="dataoutput">'.$_POST["notelp"].'</div>';
                echo "<br>";

                echo "Alamat : ";
                echo "<br>";
                echo '<div class="dataoutput">'.$_POST["alamat"].'</div>';
                echo "<br>";

                // echo "Password : ";
                // echo "<br>";
                // echo '<div class="dataoutput">'.$_POST["Password"].'</div>';
                // echo "<br>";
            ?>
            <div class="loader triangle" style="margin-top: 1%; margin-left: 90%; margin-bottom: -2%;">
                <svg viewBox="0 0 86 80">
                    <polygon points="43 8 79 72 7 72"></polygon>
                </svg>
            </div>
        </div>
    </body>
</html>
@endsection