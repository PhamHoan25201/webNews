<?php 
    require_once("db.php");
    class Management extends db{
        function getdata($sql) {
            $this->result = mysqli_query($this->conn,$sql);
            return $this->result;
        }
        function trending(){
            $sql = "select * from news where AnHien = '1' order by SoLanXem desc limit 0,5";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function popular(){
            $sql = "select * from news_type where AnHien = '1' order by idLT desc limit 0,5";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function listtheloai(){
            $sql = "select * from category where AnHien = '1'";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function loaitintrongtheloai($idTL){
            $sql = "select * from news_type where AnHien = '1' and idTL = $idTL";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;

        }
        function tinmoinhattrongtheloai($idTL){
            $sql = "select * from news where AnHien = '1' and idTL = $idTL order by Ngay desc limit 0,3";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function get_tenloaitin($idLT){
            $sql = "select * from news_type where idLT = $idLT";
            $kq = mysqli_query($this->conn, $sql);
            $row = mysqli_fetch_assoc($kq);
            echo $row['TenLT'];
            return $kq;
        }
        function tinmoinhat(){
            $sql = "select * from news where AnHien = '1' order by Ngay desc limit 0,2";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function tinmoinhattieptheo(){
            $sql = "select * from news where AnHien = '1' order by Ngay desc limit 2,2";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function latestnews(){
            $sql = "select * from news where AnHien = '1' order by Ngay desc limit 0,4";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function tinnoibat(){
            $sql = "select * from news where AnHien = '1' and TinNoiBat = '1' limit 0,10";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function listtin(){
            $sql = "select * from news where AnHien = '1' limit 0,5";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function theloai(){
            $idTL = $_GET['idTL'];
             $sql = "select * from category where AnHien = '1' and idTL = $idTL";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function tintrongtheloai(){
            $idTL = $_GET['idTL'];
            $sql = "select * from news where AnHien = '1'  and idTL = $idTL limit 0,10";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function tintrongtheloaitieptheo(){
            $idTL = $_GET['idTL'];
            $sql = "select * from news where AnHien = '1'  and idTL = $idTL limit 10,10";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function tinxemnhieu(){
            $sql = "select * from news where AnHien = '1' order by SoLanXem desc limit 0,10";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function tinyeuthich(){
            $sql = "select * from news where AnHien = '1' order by SoLuotLike desc limit 0,6";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function showcomment(){
            $sql = "select * from comment where AnHien = '1' limit 0,4";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function recoment(){
            $sql = "select * from news where AnHien = '1' and TinNoiBat = '1' order by SoLanXem desc limit 0,1";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function recomenttieptheo(){
            $sql = "select * from news where AnHien = '1' and TinNoiBat = '1' order by SoLanXem desc limit 1,3";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function bestofweek(){
            $sql = "select * from news where AnHien = '1' and TinNoiBat = '1' and curdate() - Date(Ngay)<7";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function tintrongloaitin(){
            $idLT = $_GET['idLT'];
            $sql = "select * from news where AnHien = '1'  and idLT = $idLT limit 0,10";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function loaitin(){
            $idLT = $_GET['idLT'];
            $sql = "select * from news_type where AnHien = '1' and idLT = $idLT";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function showtin(){
            $idTin = $_GET['idTin'];
            $sql = "select * from news where AnHien = '1' and idTin = $idTin";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function get_tenuser($idUser){
            $sql = "select * from users where idUser = $idUser";
            $kq = mysqli_query($this->conn, $sql);
            $row = mysqli_fetch_assoc($kq);
            echo $row['HoTen'];
            return $kq;
        }
        function login(){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $sql = "select * from users where Username = '$username' and Password = '$password'";
            $kq = mysqli_query($this->conn, $sql);
            $row_user = mysqli_fetch_assoc($kq);

            if (mysqli_num_rows($kq)==1) {//Thành công
                header("location: index.php");
                 $_SESSION['user']=$row_user['HoTen'];
                 $_SESSION['idUser']=$row_user['idUser'];
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
        function showAdv(){
            $sql = "select * from advertisement where idAdv = 3 and Date(ngaykethucQC) - Date(ngaychayQC) > 0";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function search(){
            $key = $_POST['keysearch'];
            $sql = "SELECT * FROM news WHERE (LOWER(TieuDe) LIKE '%$key%' OR LOWER(Content) LIKE '%$key%')";
            $kq = mysqli_query ($this->conn, $sql);
            return $kq;
        }
        function xulyaddcomment(){
            $idUser = $_POST['idUser'];
            $idTin = $_POST['idTin'];
            $message = $_POST['message'];
            echo $sql = "INSERT INTO comment (idUser, idTin, Ngay, Content) VALUE ('$idUser','$idTin', curdate(),'$message')";
            $kq = mysqli_query($this->conn, $sql);
            header("Location: tinchitiet.php?idTin=$idTin");
            return $kq;
        }
        function showCommentInNews($idTin){
            $sql = "select * from comment where AnHien = '1' and idTin= $idTin";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        
    }
        
