<?php 
    require_once("../db.php");
    class Management extends db{
        function getdata($sql) {
            $this->result = mysqli_query($this->conn,$sql);
            return $this->result;
        }
        function listtheloai($lang = 'vi', $AnHien=1){
            $sql="SELECT * from category";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function deletetheloai(){
            $idTL = $_GET['idTL'];
            $sql = "delete from category where idTL = $idTL";
            $kq = mysqli_query($this->conn, $sql) or die(mysqli_error());
            header("Location:list_theloai.php");
            return $kq;
        }
        function edittheloai(){
            $idTL = $_GET['idTL'];
            $sql = "select * from category where idTL = $idTL";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function xulyedittheloai(){
            $idTL = $_GET['idTL'];
            $tentheloai = $_GET['tentheloai'];
            $thutu = $_GET['thutu'];
            $anhien = $_GET['anhien'];
            $sql = "update category set TenTL = '$tentheloai', ThuTu = '$thutu', AnHien = '$anhien' where idTL = $idTL";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_theloai.php");
            return $kq;
        }
        function xulyaddtheloai(){
            $tentheloai = $_GET['tentheloai'];
            $anhien = $_GET['anhien'];

            $sql = "INSERT INTO category (TenTL, AnHien) VALUE ('$tentheloai', '$anhien')";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_theloai.php");
            return $kq;
        }
        function listloaitin($lang = 'vi', $AnHien=1){
            $sql="SELECT idLT, TenLT, AnHien, idTL from news_type";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function get_theloai($idTL){
            $sql = "select * from category where idTL =$idTL";
            $kq = mysqli_query($this->conn,$sql);
            $row = mysqli_fetch_assoc($kq);
            echo $row['TenTL'];
            return $kq;
        }
        function get_loaitin($idLT){
            $sql = "select * from news_type where idLT = $idLT";
            $kq = mysqli_query($this->conn,$sql);
            $row = mysqli_fetch_assoc($kq);
            echo $row['TenLT'];
            return $kq;
        }
        function get_tacgia($idTG){
            $sql = "select * from users where idUser = $idTG";
            $kq = mysqli_query($this->conn,$sql);
            $row = mysqli_fetch_assoc($kq);
            echo $row['HoTen'];
            return $kq;
        }
        function deleteloaitin(){
            $idLT = $_GET['idLT'];
            $sql = "delete from news_type where idLT = $idLT";
            $kq = mysqli_query($this->conn, $sql) or die(mysqli_error());
            header("Location: list_loaitin.php");
            return $kq;
        }
        function editloaitin(){
            $idLT = $_GET['idLT'];
            $sql = "select * from news_type where idLT = $idLT";
            $kq = mysqli_query($this->conn, $sql) or die(mysqli_error());
            return $kq;

        }
        function xulyeditloaitin(){
            $idLT = $_GET['idLT'];
            $tenloaitin = $_GET['tenloaitin'];
            $thutu = $_GET['thutu'];
            $idTL = $_GET['idTL'];
            $anhien = $_GET['anhien'];

            $sql = "update news_type set Ten = '$tenloaitin', ThuTu = '$thutu', AnHien = '$anhien', idTL = '$idTL' where idLT = $idLT";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_loaitin.php");
            return $kq;

        }
        function xulyaddloaitin(){
            $tenloaitin = $_GET['tenloaitin'];
            $thutu = $_GET['thutu'];
            $idTL = $_GET['idTL'];
            $anhien = $_GET['anhien'];

            $sql = "INSERT INTO news_type (Ten, ThuTu, idTL, AnHien) VALUE ('$tenloaitin', '$thutu', '$idTL', '$anhien')";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_loaitin.php");
            return $kq;
        }
        function listUser(){
            $sql = "select * from users";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function deleteuser(){
            $idUser = $_GET['idUser'];
            $sql = "delete from users where idUser = $idUser";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_user.php");
            return $kq;

        }
        function edituser(){
            $idUser = $_GET['idUser'];
            $sql = "select * from users where idUser = $idUser";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function xulyedituser(){
            $idUser = $_GET['idUser'];
            $HoTen = $_GET['hoten'];
            $Username = $_GET['username'];
            $Password = $_GET['password'];
            $phonenumber = $_GET['dienthoai'];
            $Email = $_GET['email'];
            $Ngaysinh = $_GET['ngaysinh'];
            $Gioitinh = $_GET['gioitinh'];
            $Admin = $_GET['admin'];
            $sql = "update users set HoTen = '$HoTen', Username = '$Username', Password='$Password', Dienthoai = '$phonenumber', Email = '$Email', NgaySinh = '$Ngaysinh', GioiTinh = '$Gioitinh', Admin = '$Admin' where idUser = $idUser";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_user.php");
            return $kq;

        }
        function xulyadduser(){
            $HoTen = $_GET['hoten'];
            $Username = $_GET['username'];
            $Password = md5($_GET['password']);
            $phonenumber = $_GET['dienthoai'];
            $Email = $_GET['email'];
            $Ngaysinh = $_GET['ngaysinh'];
            $Gioitinh = $_GET['gioitinh'];
            $Admin = $_GET['admin'];
            //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
            if (!$Username || !$Password || !$Email || !$HoTen || !$Ngaysinh || !$Gioitinh || !$phonenumber){
                echo "<script> alert ('Vui lòng nhập đầy đủ thông tin!!!');</script>";
            }
            //Kiểm tra Username có tồn tại hay chưa
            $sql_testusername = "select * from users where Username= '$Username'";
            $testusername = mysqli_query($this->conn, $sql_testusername);
            if(mysqli_num_rows($testusername)==1){
                echo "<script> alert ('Username đã tồn tại!!!');</script>";
            }
            $sql = "INSERT INTO users (HoTen, Username, Password, Dienthoai, Email, NgaySinh, GioiTinh, Admin) VALUE ('$HoTen', '$Username', '$Password', '$phonenumber', '$Email', '$Ngaysinh', '$Gioitinh', '$Admin')";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_user.php");
            return $kq;
        }
        function listtin(){
            $sql = "select * from news";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;

        }
        function edittin(){
            $idTin = $_GET['idTin'];
            $sql = "select * from news where idTin = $idTin";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function xulyedittin(){
            $idTin = $_GET['idTin'];
            $TieuDe = $_GET['tieude'];
            $Tacgia = $_GET['idUser'];
            $Tomtat = $_GET['tomtat'];
            $UrlImg = $_GET['urlImg'];
            $Noidung = $_GET['noidung'];
            $idLT = $_GET['idLT'];
            $idTL = $_GET['idTL'];
            $anhien = $_GET['anhien'];

            $sql = "update news set TieuDe = '$TieuDe', TomTat = '$Tomtat', urlImg='$UrlImg', Content = '$Noidung', AnHien = '$anhien', idUser = '$Tacgia', idLT = '$idLT', idTL = '$idTL' where idTin = $idTin";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_tin.php");
            return $kq;

        }
        function deletetin(){
            $idTin = $_GET['idTin'];
            $sql = "delete from news where idTin = $idTin";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_tin.php");
            return $kq;
        }
        function xulyaddtin(){
            $TieuDe = $_GET['tieude'];
            $Tacgia = $_GET['idUser'];
            $Tomtat = $_GET['tomtat'];
            $UrlImg = $_GET['urlImg'];
            $Noidung = $_GET['noidung'];
            $idLT = $_GET['idLT'];
            $idTL = $_GET['idTL'];
            $anhien = $_GET['anhien'];

            $sql = "INSERT INTO news (TieuDe, Ngay, idUser, TomTat, urlImg, Content, idLT, idTL, AnHien) VALUE ('$TieuDe',curdate(), '$Tacgia','$Tomtat','$UrlImg','$Noidung', '$idLT', '$idTL', '$anhien')";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_tin.php");
            return $kq;
        }
        
       
        function ktralogin(){
            if(isset($_SESSION['user'])==false){
                header("Location: login.php");
            }
        }
        function login(){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $sql = "select * from users where Username = '$username' and Password = '$password' and Admin =1";
            $kq = mysqli_query($this->conn, $sql);
            $row_user = mysqli_fetch_assoc($kq);

            if (mysqli_num_rows($kq)==1) {//Thành công
                header("location: index.php");
                 $_SESSION['user']=$row_user['HoTen'];
            } else { //Thất bại
              header("location: login.php");
            }
           
        }
        function register(){
            $name = $_POST['name'];
            $ngaysinh = $_POST['ngaysinh'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $username = $_POST['username'];
            $gioitinh = $_POST['gioitinh'];
            $password = md5($_POST['password']);
            //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
            if (!$username || !$password || !$email || !$name || !$ngaysinh || !$gioitinh || !$phonenumber){
                echo "<script> alert ('Vui lòng nhập đầy đủ thông tin!!!');</script>";
            }
            //Kiểm tra Username có tồn tại hay chưa
            $sql_testusername = "select * from users where Username= '$username'";
            $testusername = mysqli_query($this->conn, $sql_testusername);
            if(mysqli_num_rows($testusername)==1){
                echo "<script> alert ('Username đã tồn tại!!!');</script>";
            }
            //Nhập thông tin vào db
            $sql_adduser="INSERT INTO users (HoTen, Username, Password, Dienthoai, Email, NgayDangKy, NgaySinh, GioiTinh) VALUE ('$name','$username','$password','$phonenumber','$email',curdate(),'$ngaysinh',$gioitinh)";
            $adduser = mysqli_query($this->conn, $sql_adduser);
            //Xác nhận đăng ký
            if($adduser==true){
                echo "<script> alert ('Đăng ký thành công!!!');</script>";
            }else{
                echo "<script> alert ('Đăng ký thất bại. Vui lòng thử lại!!!');</script>";
            }
        }
        function listAdvertisement(){
            $sql = "select * from advertisement";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function listeditAdvertisement(){
            $idAdv = $_GET['idAdv'];
            $sql = "select * from advertisement where idAdv= $idAdv";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function xulyeditadvertisement(){
            $idAdv = $_GET['idAdv'];
            $urlImg1 = $_GET['urlImg1'];
            $urlImg2 = $_GET['urlImg2'];
            $ngaychayadv = $_GET['ngaychayadv'];
            $ngayketthucadv = $_GET['ngayketthucadv'];
            $Mota = $_GET['mota'];
            $sql = "update advertisement set urlImg1 = '$urlImg1', urlImg2 = '$urlImg2', ngaychayQC='$ngaychayadv', ngaykethucQC = '$ngayketthucadv', MoTa = '$Mota' where idAdv = $idAdv";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_advertisement.php");
            return $kq;
        }
        function xulyaddadvertisement(){
             $urlImg1 = $_GET['urlImg1'];
             $urlImg2 = $_GET['urlImg2'];
             $ngaychayadv = $_GET['ngaychayadv'];
             $ngayketthucadv = $_GET['ngayketthucadv'];
             $Mota = $_GET['mota'];
             echo $sql = "INSERT INTO advertisement (urlImg1, urlImg2, ngaychayQC, ngaykethucQC, MoTa) VALUE ('$urlImg1','$urlImg2', '$ngaychayadv','$ngayketthucadv','$Mota' )";
             $kq = mysqli_query($this->conn, $sql);
             header("Location: list_advertisement.php");
             return $kq;
        }
        function deleteadvertisement(){
            $idAdv = $_GET['idAdv'];
            $sql = "delete from advertisement where idAdv = $idAdv";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: list_advertisement.php");
            return $kq;
            
        }
    }
?>