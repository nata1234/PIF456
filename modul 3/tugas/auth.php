<?php
        defined('_VALID')or die('not allowed');

        function init_login(){
                // Simulasi data account nama dan password
                
                $nama = 'admin';
                $pass = 'admin';

                if(isset($_POST['nama']) && isset($_POST['pass'])){
                        $n = trim($_POST['nama']);
                        $p = trim($_POST['pass']);

                        if(($n === $nama) && ($p === $pass)){
                                // Jika sama, set session
                                $_SESSION['loggedin'] = $n;
                                $_SESSION['time'] = time();

                                // Redireksi halaman
                                ?>

                                <script type="text/javascript">
                                        document.location.href="./";
                                </script>

                                <?php
                        }else{
                                return false;
                        }
                }
        }

        function validate(){

                if(!isset($_SESSION['loggedin']) || !isset($_SESSION['time'])){
                        ?>
			<div class="tabel">
                                <?php
                                        if(isset($_POST['nama']) && isset($_POST['pass'])){
                                                if(is_string($_POST['nama']) && is_string($_POST['pass'])){ // Validasi form bernilai string
                                                        if($_POST['nama'] == $nama && $_POST['pass'] != $pass){
                                                                print '<blockquote>Pass salah</blockquote>';
                                                        }elseif($_POST['nama'] != $nama && $_POST['pass'] == $pass){
                                                                print '<blockquote>Nama salah</blockquote>';
                                                        }elseif($_POST['nama'] != $nama && $_POST['pass'] != $pass){
                                                                print '<blockquote>Nama & Pass salah</blockquote>';
                                                        }
                                                }
                                        }
                                ?>
                                <form id="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return formCheck();">
                                        <table>
                                                <tr>
                                                        <td>Nama</td>
                                                        <td><input type="text" name="nama" id="nama" value="<?php
                                                                echo isset($_POST['nama']) ? $_POST['nama'] : '';
                                                        ?>" onkeypress="return alphabetOnly(event)"></td>
                                                </tr>
                                                <tr>
                                                        <td>Pass</td>
                                                        <td><input type="pass" name="pass" id="pass" onkeypress="return alphabetOnly(event)"></td>
                                                </tr>
						<tr>
							<td></td>
                                        		<td><input class="button" type="submit" value="LOGIN" /></td>
						</tr>
                                        </table>
                                      
                                </form>
                        </div>
                                <?php
                        exit;
                }

                if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
                        // Hapus session
                        if(isset($_SESSION['loggedin'])){
                                unset($_SESSION['loggedin']);
                        }
                        if(isset($_SESSION['time'])){
                                unset($_SESSION['time']);
                        }

                        // Redireksi halaman
                        ?>

                        <script type="text/javascript">
                                document.location.href="./";
                        </script>

                        <?php
                }
        }
?>
