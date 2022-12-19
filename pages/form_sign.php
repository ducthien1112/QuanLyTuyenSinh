
<?php

function check_valid_phone($phone){
    if (strlen($phone) != 10){
        return false;
    }
    if( preg_match( '/^0(1\d{9}|9\d{8})$/', $phone == false)){
        return false;
    }
    return true;

}
$loi="";

if (isset($_POST['btndangky']) == true) {
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $dantoc = $_POST['dantoc'];
    $hokhau = $_POST['hokhau'];
    $noisinh = $_POST['noisinh'];
    $value_gioitinh = $_POST['gioitinh'];
    if ($value_gioitinh == 1) {
        $gioitinh = 'Nam';
    } else {
        $gioitinh = 'Nữ';
    }
    $monchuyen = $_POST['monchuyen'];
    $truong_thcs = $_POST['thcs'];
    $sdt = $_POST['phone'];
    $img = $_FILES['img-duthi']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir .$img;
    move_uploaded_file($_FILES ["img-duthi"]["tmp-name"], $target_file);
//        echo "$hoten, $gioitinh, $monchuyen, $dantoc, $hokhau, $ngaysinh, $noisinh, $sdt, $truong_thcs";

    if (strlen($hoten) == 0 || strlen($ngaysinh) ==0 || strlen($truong_thcs) ==0  || strlen($dantoc) ==0
        || strlen($hokhau) ==0
        || strlen($noisinh) ==0
        || strlen($monchuyen) ==0
        || strlen($sdt) ==0 ) {
        $loi = "Vui lòng nhập thông tin đầy đủ !!! </br>";
    }
    else if (!check_valid_phone($sdt)){
        $loi = "Vui lòng nhập đúng số điện thoại !!! </br>";
    }
    else {
        $loi = "validate success";
        /// ghi du lieu vao bang trong db dum toi voi
    }
}
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<form style="width: 600px" class="border border-primary border-2 m-auto p-2" method="post" enctype="multipart/form-data">
    <?php if ( $loi != "" && $loi != "validate success" ) { ?>
        <div class="alert alert-danger"> <?php echo $loi ?> </div>
    <?php
    }
    ?>
    <div class="mb-3">
        <label class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="hoten" name="hoten">
    </div>
    <div class="mb-3">
        <label class="form-label">Ngày sinh</label>
        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh">
    </div>
    <div class="mb-3">
        <label class="form-label">Dân tộc</label>
        <input type="text" class="form-control" id="dantoc" name="dantoc">
    </div>
    <div class="mb-3">
        <label class="form-label">Hộ khẩu</label>
        <input type="text" class="form-control" id="hokhau" name="hokhau">
    </div>
    <div class="mb-3">
        <label class="form-label">Nơi sinh</label>
        <input type="text" class="form-control" id="noisinh" name="noisinh">
    </div>
    <div class="mb-3">
        <div>Giới tính</div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="nam" name="gioitinh" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Nam</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="nu" name="gioitinh" value="2">
            <label class="form-check-label" for="nu">Nữ</label>
        </div>
    </div>

    <div class="mb-3">
        <div>Môn thi chuyên</div>
        <select class="form-select form-select-sm p-2" aria-label=".form-select-sm example" name="monchuyen"
                id="monchuyen">
            <option selected>Chọn môn thi chuyên</option>
            <option value="Toán">Toán</option>
            <option value="Văn">Văn học</option>
            <option value="Anh">Tiếng Anh</option>
            <option value="Tin">Tin học</option>
            <option value="Lý">Vật lý</option>
            <option value="Hoá">Hoá học</option>
            <option value="Sinh">Sinh học</option>

        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Trường THCS</label>
        <input type="text" class="form-control" id="thcs" name="thcs">
    </div>

    <div class="mb-3">
        <label class="form-label">Số điện thoại </label>
        <input type="text" class="form-control" id="phone" name="phone">
    </div>

    <div class="mb-3">
        <div>Ảnh dự thi</div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01" name="img-duthi">
        </div>
    </div>

    <button type="submit" class="btn btn-primary p-2 " id="btndangky" name="btndangky">Đăng ký</button>
</form>