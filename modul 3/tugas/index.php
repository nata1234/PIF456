<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <?php
                session_start();
                ini_set('display_errors', 1);
                define('_VALID', 1);

                if(isset($_SESSION['loggedin']) || isset($_SESSION['time'])){
                        echo '<title>Silahkan Masuk</title>';
                }elseif(!isset($_SESSION['loggedin']) || !isset($_SESSION['time'])){
                        echo '<title>Sign in</title>';
                }
        ?>
        <style type="text/CSS">
        
        .tabel {background: #F0F0F0  no-repeat 10px 15px ; margin:200px auto ; padding: 20px ; width:240px}
        
        </style>

        <script type="text/javascript">                        
                function formCheck(){
                if(login.nama.value == "" && login.pass.value == ""){
                        alert("Nama dan Password Harus di isi untuk login");
                        login.nama.focus();
                        return false;
                }
                if(login.nama.value == ""){
                        alert("Nama Harus di isi untuk login");
                        login.nama.focus();
                        return false;
                }
                if(login.pass.value == ""){
                        alert("Password harus di isi untuk login");
                        login.pass.focus();
                        return false;
                }
                else
                return true;
                }
        </script>

        <script language="javascript">
                function getKey(e){
                        if (window.event)
                                return window.event.keyCode;
                        else if (e)
                                return e.which;
                        else
                                return null;
                }

                function restrictChars(e, validList){
                        var key, keyChar;
                        key = getKey(e);
                        if (key == null) return true;
                        keyChar = String.fromCharCode(key).toLowerCase();
                        if (validList.toLowerCase().indexOf(keyChar) != -1)
                                return true;
                        if(key == 0 || key == 8 || key == 9 || key == 13 || key == 27)
                                return true;
                        return false;
                }

                function alphabetOnly(e){
                        return restrictChars( e, "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
                }
        </script>

</head>
<body>
                <?php
                        if(!isset($_SESSION['loggedin']) || !isset($_SESSION['time'])){
                                echo '<h1 align=center>Silahkan Masuk</h1>';
                        }elseif(isset($_SESSION['loggedin']) || isset($_SESSION['time'])){
                                echo '<h1 align=center>Selamat Datang</h1>';
                        }
                ?>
                <?php

                        // include file eksternal
                        require_once('./auth.php');

                        init_login();
                        validate();
                        echo 'Login sebagai <b>' . $_SESSION['loggedin'] . '</b> | <a href="?logout=true"><b>logout</b></a><br />';
                ?>

                <br /><br />
                <h1 style="text-align: center">Ikutan Liburan Gratis Bareng Happy Holiday Trans7</h1>
		<br /><br />
<p style="text-align: center">Pertama, daftarkan diri kamu menjadi member detikTravel (d'Traveler)
		<br /><br />
Kedua, posting cerita pengalaman liburan kamu atau bersama teman-temanmu yang paling seru di detikTravel. Kamu bisa ceritakan tempat liburan yang paling menarik yang pernah kamu kunjungi dan juga kejadian seru dan konyol apa saja yang kamu dapetin waktu liburan itu. Jangan lupa upload juga foto-foto liburannya, biar kami bisa lihat kalau kamu emang seru banget buat diajak liburan. </p>
        
</body>
</html>
