<?php include('header.php'); ?>
   
<?php
    $p = isset($_GET['p']) ? $_GET['p'] : '';
    switch($p) 
    {
     default :
     include('slider.php'); 
//including the database connection file
include_once("connection.php");
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM ikan");

        while($dt = mysqli_fetch_array($result, MYSQLI_ASSOC)) {   
            echo "<div id=\"sub-br\" style=\"\">
                     <div id='min-desk' class=\"min-desk\">
                      <p>
                       <a href='?p=detIkan&idProduk=$dt[idIkan]'><img src=\"img/ikan/$dt[gambarIkan]\" class=\"gambar\"/></a>
                       $dt[nama_ikan]<br/>
                       Harga Rp. $dt[harga]
                      </p>
                     </div>
                     
                    </div>";
            }
        
                break;
                case "detIkan":
                include_once("connection.php");
                echo  "<div id=\"detailIkan\">";
                $result = mysqli_query($mysqli, "SELECT * FROM ikan WHERE idIkan='".$_GET['idProduk']."'");
                 while($dt = mysqli_fetch_array($result, MYSQLI_ASSOC)) {   
            echo "<div id=\"sub-br\" style=\"\">
                     <div id='min-desk' class=\"min-desk\">
                      <p>
                       <a href='?p=detIkan&idIkan=$dt[idIkan]'><img src=\"img/ikan/$dt[gambarIkan]\" class=\"gambar\"/></a>
                       $dt[nama_ikan]<br/>
                       Harga Rp. $dt[harga]
                      </p>
                      </div>
                     </div>";


                        if(!isset($_SESSION['valid'])) {
                           echo "<form  method=\"POST\" action=\"login.php\">";
                        }
                        else
                        {
                            echo "<form action=\"keranjang.php\">";
                        }
                     echo  "<table align=center>
                            <tr><td>Jumlah</td>
                             <input type=\"hidden\" name=\"p\" value=\"tambah\">
                            <td><input type=\"text\" name=\"jumlah\"></td>
                            </tr>
                            <input type=\"hidden\" name=\"idProduk\" value=\"$dt[idIkan]\">
                            <td> <button> Tambahkan ke Keranjang </button></td></table></form>
                    </div>";
            }       
        
                break;


}
        ?>