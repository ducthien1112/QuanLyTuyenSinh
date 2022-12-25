<?php
include "../connectdb.php";
function check_valid($name, $phone_number, $bD)
{
    global $conn;
    $sql = "select * from ho_so where ten = '$name' and phone = '$phone_number' AND ngay_sinh = '$bD'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else
        return false;
}


$msgError = false;
$info = [];
if (isset($_POST['btnTraCuu'])) {
    if ($_POST['name'] != "" && $_POST['phone'] != "" && $_POST['birthday'] != ""  && check_valid($_POST['name'],$_POST['phone'], $_POST['birthday'])) {
        
        $qr_code = 'https://img.vietqr.io/image/970423-89816092001-G3pavAY.jpg?accountName=NGUYEN+DINH+HIEU&amount=350000&addInfo='.$_POST['name'].'+'.$_POST['phone'].'+'.$_POST['birthday'];

        $info = [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'birthday' => $_POST['birthday'],
            'qr_code' => $qr_code
        ];
    }
    else{
        $msgError = true;
    }
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="../js/swfobject.js"></script>
    <script type="text/javascript" src="../slide/jquery-1.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../menu/ddlevelsfiles/ddlevelsmenu-base.css"/>
    <link rel="stylesheet" type="text/css" href="../menu/ddlevelsfiles/ddlevelsmenu-topbar.css"/>
    <script type="text/javascript" src="../menu/ddlevelsfiles/ddlevelsmenu.js"></script>
    <meta name="robots" content="INDEX,FOLLOW,ALL"/>
    <meta name="language" content="Vietnamese, VIETNAM, vietnam"/>
    <meta name="author" content="www.thietkephanmem.com"/>
    <meta name="copyright" content="Copyright (C) 2006-2010 thietkephanmem.com"/>
    <meta name="revisit-after" content="1 day"/>
    <meta name="document-rating" content="General"/>
    <meta name="document-distribution" content="Global"/>
    <meta name="distribution" content="Global"/>
    <meta name="area" content="Network Solution"/>
    <meta name="placename" content="vietnam"/>
    <meta name="resource-type" content="Document"/>
    <link rel="shortcut icon" href="../favicon.ico"/>
    <meta name="Googlebot" content="index"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta http-equiv="Page-Exit" content="progid:DXImageTransform.Microsoft.Fade(duration=.2)"/>
    <meta name="classification" content="www.thietkephanmem.com, Vietnam"/>

    <title>
        THANH TOÁN LỆ PHÍ DỰ THI
    </title>
    <meta name="description" content="THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2016-2017, Trường THPT Chuyên Sư phạm"/>
    <meta name="keywords"
          content="Xe tải chuyên dùng, THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2016-2017, Trường THPT Chuyên Sư phạm"/>
</head>
<body>
    <div align="center">
        <table border="0" cellpadding="0" cellspacing="0" width="996px">
            <tr>
                <td>
                    <table border="0" cellpadding="0" cellspacing="0" width="996px">
                        <tr>
                            <td class="head-bg">
            <span id="ctl00_MenuVi1_LabelHead">
<a href="/"><img src="../Images/3bannerhnue.jpg" border="0" width="996" height="150"></a></span>
                            </td>
                        </tr>
                        <tr>

                            <td class="menu-bg-head">

            <span id="ctl00_MenuVi1_LabelMenu"><div id="ddtopmenubar" class="mattblackmenu">
<ul>
<li><a href="index.php" title="Trang chủ">Trang chủ</a></li>
<li><a rel="ddsubmenu1" href="" title="Giới thiệu">Giới thiệu</a></li>
<li><a href="" title="Lịch tuần">Lịch tuần</a></li>

<li><a rel="ddsubmenu5559" href="" title="TIN TỨC">TIN TỨC</a></li>
<ul id="ddsubmenu5559" class="ddsubmenustyle">
<li><a href="" title="Hoạt động nội bộ">Hoạt động nội bộ</a></li>
<li><a href="" title="Hội nghị - Hội thảo">Hội nghị - Hội thảo</a></li>
<li><a href="" title="Hoạt động Đoàn">Hoạt động Đoàn</a></li>
<li><a href="" title="Học bổng - Du học">Học bổng - Du học</a></li>
</ul>


    <li><a rel="ddsubmenu55512" href="" title="55 Năm CSP">55 Năm CSP</a></li>
<ul id="ddsubmenu55512" class="ddsubmenustyle">
<li><a href="" title="Thư ngỏ">Thư ngỏ</a></li>
<li><a href="" title="Kỷ niệm 55 Năm CSP">Kỷ niệm 55 Năm CSP</a></li>
</ul>


<li><a rel="ddsubmenu3" href="" title="Đào tạo - Tuyển sinh">Đào tạo - Tuyển sinh</a></li>
<li><a rel="ddsubmenu2" href="" title="Thư viện">Thư viện</a></li>
<li class="End"><a href="" title="Liên hệ">Liên hệ</a></li>
<ul></div>
<div id="ddsubmenu1" class="ddsubmenustyle">
<li><a href="" title="Giới thiệu chung">Giới thiệu chung</a></li>
<li><a href="" title="Bảng vàng thành tích">Bảng vàng thành tích</a></li>
<li><a href="" title="50 Năm CSP">50 Năm CSP</a></li>
</div>
<div id="ddsubmenu2" class="ddsubmenustyle">
<li><a href="" title="Tài liệu tham khảo">Tài liệu tham khảo</a></li>
<li><a href="" title="Video Clip">Video Clip</a></li>
<li><a href="" title="Photo Album">Photo Album</a></li>
</div>
<div id="ddsubmenu3" class="ddsubmenustyle">
<li><a href="/thoi-khoa-bieu.aspx" title="Thời khóa biểu học sinh">Thời khóa biểu học sinh</a></li>
<li><a href="content.php" title="Thông tin tuyển sinh">Thông tin tuyển sinh</a></li>
<li><a href="tracuuphongthi.php" title="Tra cứu phòng thi">Tra cứu phòng thi</a></li>
<li><a href="tracuudiemthi.php" title="Tra cứu điểm thi">Tra cứu điểm thi</a></li>
<li><a href="lamdonphuckhao.php" title="Thanh toán lệ phí">Phúc khảo</a></li>
<li><a href="form_sign.php" title="Form đăng ký ">Đăng ký dự thi </a></li>
<li><a href="payment.php" title="Thanh toán lệ phí">Thanh toán lệ phí</a></li>


</div>
</span>
                                <script type="text/javascript">
                                    ddlevelsmenu.setup("ddtopmenubar", "topbar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
                                </script>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-head2">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td class="head-ngay" bgcolor="#f0ffff">
                                            <span id="ctl00_MenuVi1_LabelHotline">Thứ Ba, ngày 13 tháng 12 năm 2022</span>
                                        </td>
                                        <td style="text-align: right; width: 204px;">
                                            <input name="ctl00$MenuVi1$TextBoxSearch" type="text" value="Từ khóa..."
                                                   id="ctl00_MenuVi1_TextBoxSearch" class="text-search"
                                                   onfocus="if (this.value==&#39;Từ khóa...&#39;) this.value=&#39;&#39;;"
                                                   onblur="if (this.value==&#39;&#39;) this.value=&#39;Từ khóa...&#39;;"/>
                                        </td>
                                        <td style="width: 47px;">
                                            <input type="image" name="ctl00$MenuVi1$ImageButtonSearch"
                                                   id="ctl00_MenuVi1_ImageButtonSearch"
                                                   src="../Images/index_13.jpg"
                                                   style="height:31px;width:47px;border-width:0px;"/>
                                        </td>

                                    </tr>

                                </table>
                            </td>
                        </tr>

                    </table>

                </td>
            </tr>
            <tr>
                <td style="background:#9cecfa; padding-top:4px; padding-bottom:4px;" valign="top">

                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="body-main" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td class="bg-t1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-t2">
                                            <div class="tieude">
                                                <span id="ctl00_ContentPlaceHolder1_LabelTieuDeCategory"><a
                                                            href="index.php">Trang chủ</a> &raquo; <a
                                                            href=""
                                                            title="Bảng tin - Thông báo">Bảng tin - Thông báo</a></span>
                                            </div>

                                            <span id="ctl00_ContentPlaceHolder1_LabelTieuDe"></span>

                                            <span id="ctl00_ContentPlaceHolder1_LabelTen" style="color:#0565A9;"><h2> THANH TOÁN LỆ PHÍ DỰ THI</h2></span>

                                            <!-- Form TRA CỨU -->
                                            <form action="#" style="width: 600px" class="border-2 m-auto p-2" method="post" enctype="multipart/form-data">
                                                <?= ($msgError) ? '<div class="alert alert-danger">Hồ sơ không tồn tại!</div>' : "" ?>

                                                <?php 
                                                    if($info != []){
                                                        echo "Họ và tên: ". $info['name'].'<br>';
                                                        echo "Số điện thoại: ". $info['phone'].'<br>';
                                                        echo "Ngày sinh: ". $info['birthday'].'<br>';
                                                        echo "Vui lòng truy cập ứng dụng Mobile Banking và quét mã QR code dưới đây để thanh toán: ".'<br><br>';
                                                        echo "<img src='".$info['qr_code']."' alt=''><br>";
                                                    }
                                                 ?>


                                                <div class="mb-3">
                                                    <label class="form-label">Họ và tên</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Số điện thoại</label>
                                                    <input type="text" class="form-control" id="phone" name="phone">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Ngày sinh</label>
                                                    <input type="date" class="form-control" id="birthday" name="birthday">
                                                </div>
                                                <button type="submit" class="btn btn-primary p-2 " id="btndangky" name="btnTraCuu">Tra cứu</button>
                                            </form>


                                            <!-- /Form TRA CỨU -->

                                            


                                            <div style="float:right; padding-right:5px;">
                                                <!-- AddThis Button BEGIN -->
                                                <div class="addthis_toolbox addthis_default_style ">
                                                    <a class="addthis_button_facebook" style="cursor:pointer"></a>
                                                    <a class="addthis_button_yahoobkm" style="cursor:pointer"></a>
                                                    <a class="google_plusone" style="cursor:pointer"></a>
                                                    <a class="addthis_button_twitter" style="cursor:pointer"></a>
                                                    <a class="addthis_button_wordpress" style="cursor:pointer"></a>
                                                    <a class="addthis_button_myspace" style="cursor:pointer"></a>
                                                    <a class="addthis_button_email" style="cursor:pointer"></a>
                                                    <a class="addthis_button_google_plusone" style="cursor:pointer"></a>
                                                    <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=lebaviettung"
                                                       class="addthis_button_compact"></a>


                                                </div>


                                                <script type="text/javascript">var addthis_config = {"data_track_clickback": true};</script>
                                                <script type="text/javascript"
                                                        src="http://s7.addthis.com/js/250/addthis_widget.js#username=lebaviettung"></script>
                                                <!-- AddThis Button END -->
                                            </div>

                                            <br/>
                                            <div style="padding: 10px;">
                                                <span id="ctl00_ContentPlaceHolder1_LabelTinKhac"><table border="0"
                                                                                                         cellpadding="0"
                                                                                                         cellspacing="0"
                                                                                                         width="100%"><tr><td
                                                                    class="CanhLe" height="30px"><u><b>Các bài viết khác:</b></u><br></td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/thong-bao-quan-trong!-cac-cong-thong-tin-chinh-thuc-cua-nha-truong_v757.aspx">Thông báo quan trọng! Các cổng thông tin chính thức của nhà trường</a> (<i>2/11</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/phat-dong-cuoc-thi-thiet-ke-logo-truong-thpt-chuyen-dhsp-va-logo-le-ki-niem-55-nam-thanh-lap-truong_v702.aspx">Phát động cuộc thi Thiết kế Logo trường THPT Chuyên ĐHSP và logo lễ kỉ niệm 55 năm thành lập trường</a> (<i>17/7</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/van-ban-huong-dan-thuc-hien-dieu-chinh-noi-dung-day-hoc-hoc-ky-ii-nam-hoc-2019-2020_v584.aspx">Văn bản hướng dẫn thực hiện điều chỉnh nội dung dạy học học kỳ II năm học 2019-2020</a> (<i>2/4</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/thay-doi-lich-thi-hoc-bong-astar-2019_v577.aspx">Thay đổi lịch thi học bổng Astar 2019</a> (<i>8/8</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/lich-kham-suc-khoe-cho-hoc-sinh-khoi-10-k53_v575.aspx">Lịch khám sức khỏe cho học sinh khối 10 K53</a> (<i>7/8</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/thong-bao-mo-lop-8-va-9-tao-nguon-nam-2019_v574.aspx">THÔNG BÁO MỞ LỚP 8 VÀ 9 TẠO NGUỒN NĂM 2019</a> (<i>6/8</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/buoi-noi-chuyen-ve-ramsey-theory-cua-pgsts-le-thai-hoang-cuu-hoc-sinh-chuyen-su-pham-huy-chuong-vang-imo-1999-voi-hoc-sinh-chuyen-toan_v511.aspx">Buổi nói chuyện về Ramsey Theory của PGS.TS. Lê Thái Hoàng, cựu học sinh Chuyên Sư phạm, Huy chương vàng IMO 1999, với học sinh chuyên Toán</a> (<i>12/12</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/danh-sach-hoc-sinh-csp-nhan-hoc-bong-odon-valet-2017_v496.aspx">Danh sách học sinh CSP nhận học bổng ODON VALET 2017</a> (<i>4/7</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/mau-danh-sach-hsg-va-hstt-nam-hoc-2016-2017_v431.aspx">Mẫu danh sách HSG và HSTT năm học 2016-2017</a> (<i>17/5</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/danh-sach-trung-tuyen-tntn-2017_v488.aspx">Danh sách trúng tuyển TNTN 2017</a> (<i>12/5</i>)</td></tr></table></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-t3">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td class="body-r-trong">
                                <script type="text/javascript" src="/js/easypaginate.js"></script>
                                <script type="text/javascript">

                                    jQuery(function ($) {
                                        $('ul#items2').easyPaginate({
                                            step: 10,
                                            controls: 'pagination2'
                                        });

                                        $('ul#items').easyPaginate({
                                            step: 10,
                                            controls: 'pagination'
                                        });

                                    });

                                </script>


                                <div style="width: 440px; height: auto;">
                                    <div class="qc-l-r1">
                                        <table border="0" width="auto" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td class="tm12">
                                                    <span id="ctl00_ContentPlaceHolder1_r2_LabelBaiMoiNhat">Tin mới nhất</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm22">

                                                    <ul id="items2">

                                                        <li>
                                                            <a href=""
                                                               title="Nữ sinh 'lột xác' quyết trở thành 'viên ngọc sáng' giành học bổng 1,7 tỉ đồng">&bull;
                                                                Nữ sinh 'lột xác' quyết trở thành 'viên ngọc sáng' giành
                                                                học bổng 1,7 tỉ đồng</a>
                                                        </li>

                                                        <li>
                                                            <a href=""
                                                               title="Tiến sĩ toán học 9X: Bỏ cơ hội làm việc ở Pháp về Việt Nam dạy học">&bull;
                                                                Tiến sĩ toán học 9X: Bỏ cơ hội làm việc ở Pháp về Việt
                                                                Nam dạy học</a>
                                                        </li>

                                                        <li>
                                                            <a href=""
                                                               title="THÔNG BÁO LỊCH TẬP TRUNG ĐẦU NĂM HỌC 2022-2023">&bull;
                                                                THÔNG BÁO LỊCH TẬP TRUNG ĐẦU NĂM HỌC 2022-2023</a>
                                                        </li>

                                                        <li>
                                                            <a href=""
                                                               title="Các học sinh VN đạt điểm tuyệt đối tại IMO (Olympic Toán học Quốc tế)">&bull;
                                                                Các học sinh VN đạt điểm tuyệt đối tại IMO (Olympic Toán
                                                                học Quốc tế)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-dang-ki-tiem-vac-xin-ngua-covid-19-mui-3-cho-hoc-sinh-k10-nam-hoc-2022-2023_v752.aspx"
                                                               title="Thông báo về đăng kí tiêm vắc xin ngừa Covid-19 mũi 3 cho học sinh K10 năm học 2022-2023">&bull;
                                                                Thông báo về đăng kí tiêm vắc xin ngừa Covid-19 mũi 3
                                                                cho học sinh K10 năm học 2022-2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nong-thuy-hang-co-gai-dan-toc-tay-doat-vuong-mien-hoa-hau-cac-dan-toc-viet-nam-2022_v751.aspx"
                                                               title="Nông Thúy Hằng - cô gái dân tộc Tày - đoạt vương miện Hoa hậu các dân tộc Việt Nam 2022">&bull;
                                                                Nông Thúy Hằng - cô gái dân tộc Tày - đoạt vương miện
                                                                Hoa hậu các dân tộc Việt Nam 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-khan-ve-viec-cung-cap-thong-tin-tai-khoan-de-phuc-vu-cong-tac-tuyen-sinh-nam-2022_v750.aspx"
                                                               title="Thông báo khẩn về việc cung cấp thông tin tài khoản để phục vụ công tác tuyển sinh năm 2022">&bull;
                                                                Thông báo khẩn về việc cung cấp thông tin tài khoản để
                                                                phục vụ công tác tuyển sinh năm 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-2-ve-viec-ha-diem-chuan-va-nhap-hoc-bo-sung-vao-lop-10-he-khong-chuyen_v749.aspx"
                                                               title="Thông báo số 2 về việc hạ điểm chuẩn và nhập học bổ sung vào lớp 10 hệ không chuyên">&bull;
                                                                Thông báo số 2 về việc hạ điểm chuẩn và nhập học bổ sung
                                                                vào lớp 10 hệ không chuyên</a>
                                                        </li>

                                                        <li>
                                                            <a href="/chuyen-su-pham-chao-don-anh-tai-k56_v748.aspx"
                                                               title="Chuyên Sư Phạm - Chào đón anh tài K56">&bull;
                                                                Chuyên Sư Phạm - Chào đón anh tài K56</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-diem-chuan-xet-khong-chuyen-va-lich-nhap-hoc_v746.aspx"
                                                               title="TB ĐIỂM CHUẨN XÉT KHÔNG CHUYÊN VÀ LỊCH NHẬP HỌC">&bull;
                                                                TB ĐIỂM CHUẨN XÉT KHÔNG CHUYÊN VÀ LỊCH NHẬP HỌC</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-phuc-khao-ki-thi-tuyen-sinh-vao-lop-10-nam-2022_v745.aspx"
                                                               title="THÔNG BÁO KẾT QUẢ PHÚC KHẢO KÌ THI TUYỂN SINH VÀO LỚP 10 NĂM 2022">&bull;
                                                                THÔNG BÁO KẾT QUẢ PHÚC KHẢO KÌ THI TUYỂN SINH VÀO LỚP 10
                                                                NĂM 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thu-don-xet-tuyen-lop-khong-chuyen-nam-2022_v744.aspx"
                                                               title="THÔNG BÁO VỀ VIỆC THU ĐƠN XÉT TUYỂN LỚP KHÔNG CHUYÊN NĂM 2022">&bull;
                                                                THÔNG BÁO VỀ VIỆC THU ĐƠN XÉT TUYỂN LỚP KHÔNG CHUYÊN NĂM
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thu-khoa-lop-10-chuyen-su-pham-dat-gan-95-diem-moi-mon_v743.aspx"
                                                               title="Thủ khoa lớp 10 chuyên Sư phạm đạt gần 9,5 điểm mỗi môn">&bull;
                                                                Thủ khoa lớp 10 chuyên Sư phạm đạt gần 9,5 điểm mỗi
                                                                môn</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-tra-cuu-ket-qua-tuyen-sinh-vao-lop-10-nam-2022_v741.aspx"
                                                               title="Thông báo tra cứu kết quả tuyển sinh vào lớp 10 năm 2022">&bull;
                                                                Thông báo tra cứu kết quả tuyển sinh vào lớp 10 năm
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/diem-chuan-vao-lop-10-thpt-chuyen-su-pham-nam-2022_v742.aspx"
                                                               title="Điểm chuẩn vào lớp 10 THPT chuyên Sư phạm năm 2022">&bull;
                                                                Điểm chuẩn vào lớp 10 THPT chuyên Sư phạm năm 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/viet-nam-gianh-3-huy-chuong-vang-olympic-tin-hoc-chau-a-thai-binh-duong_v740.aspx"
                                                               title="Việt Nam giành 3 Huy chương Vàng Olympic Tin học Châu Á - Thái Bình Dương">&bull;
                                                                Việt Nam giành 3 Huy chương Vàng Olympic Tin học Châu Á
                                                                - Thái Bình Dương</a>
                                                        </li>

                                                        <li>
                                                            <a href="/bo-gddt-chuc-mung-thanh-tich-doi-tuyen-olympic-vat-ly-chau-a_v739.aspx"
                                                               title="Bộ GD&ĐT chúc mừng thành tích đội tuyển Olympic Vật lý Châu Á">&bull;
                                                                Bộ GD&ĐT chúc mừng thành tích đội tuyển Olympic Vật lý
                                                                Châu Á</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hon-5400-thi-sinh-do-ve-thi-thpt-chuyen-su-pham_v738.aspx"
                                                               title="Hơn 5.400 thí sinh đổ về thi THPT chuyên Sư phạm">&bull;
                                                                Hơn 5.400 thí sinh đổ về thi THPT chuyên Sư phạm</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nhung-dieu-can-luu-y-truoc-ki-tuyen-sinh-vao-chuyen-sp-2022_v737.aspx"
                                                               title="NHỮNG ĐIỀU CẦN LƯU Ý TRƯỚC KÌ TUYỂN SINH VÀO CHUYÊN SP 2022">&bull;
                                                                NHỮNG ĐIỀU CẦN LƯU Ý TRƯỚC KÌ TUYỂN SINH VÀO CHUYÊN SP
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-tra-cuu-phong-thi-so-bao-danh-tuyen-sinh-vao-lop-10-nam-2022_v731.aspx"
                                                               title="THÔNG BÁO TRA CỨU PHÒNG THI, SỐ BÁO DANH TUYỂN SINH VÀO LỚP 10 NĂM 2022">&bull;
                                                                THÔNG BÁO TRA CỨU PHÒNG THI, SỐ BÁO DANH TUYỂN SINH VÀO
                                                                LỚP 10 NĂM 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nu-sinh-chuyen-su-pham-tiep-buoc-gia-dinh-trung-hoc-bong-nganh-stem-65-ty_v735.aspx"
                                                               title="Nữ sinh chuyên Sư phạm tiếp bước gia đình trúng học bổng ngành STEM 6,5 tỷ">&bull;
                                                                Nữ sinh chuyên Sư phạm tiếp bước gia đình trúng học bổng
                                                                ngành STEM 6,5 tỷ</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hoi-cho-am-thuc-soi-dong-va-y-nghia-cua-hoc-sinh-chuyen-su-pham_v732.aspx"
                                                               title="Hội chợ ẩm thực sôi động và ý nghĩa của học sinh Chuyên Sư phạm">&bull;
                                                                Hội chợ ẩm thực sôi động và ý nghĩa của học sinh Chuyên
                                                                Sư phạm</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-6-ve-viec-tra-cuu-sbd-ki-thi-thu-lan-3-vao-lop-10-chuyen-nam-2022_v729.aspx"
                                                               title="Thông báo số 6: Về việc tra cứu SBD kì thi thử lần 3 vào lớp 10 chuyên năm 2022">&bull;
                                                                Thông báo số 6: Về việc tra cứu SBD kì thi thử lần 3 vào
                                                                lớp 10 chuyên năm 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-chuyen-phat-nhanh-den-het-ngay-0852022_v728.aspx"
                                                               title="TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG CHUYỂN PHÁT NHANH ĐẾN HẾT NGÀY 08/5/2022">&bull;
                                                                TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG CHUYỂN PHÁT
                                                                NHANH ĐẾN HẾT NGÀY 08/5/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-chuyen-phat-nhanh-den-ngay-0552022_v727.aspx"
                                                               title="TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG CHUYỂN PHÁT NHANH ĐẾN NGÀY 05/5/2022">&bull;
                                                                TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG CHUYỂN PHÁT
                                                                NHANH ĐẾN NGÀY 05/5/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-phat-hanh-ho-so-tuyen-sinh-vao-lop-10-nam-2022_v718.aspx"
                                                               title="THÔNG BÁO PHÁT HÀNH HỒ SƠ TUYỂN SINH VÀO LỚP 10 NĂM 2022">&bull;
                                                                THÔNG BÁO PHÁT HÀNH HỒ SƠ TUYỂN SINH VÀO LỚP 10 NĂM
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-xet-tuyen-thang-vao-lop-10-thpt-chuyen-dhsp-nam-2022_v726.aspx"
                                                               title="THÔNG BÁO KẾT QUẢ XÉT TUYỂN THẲNG VÀO LỚP 10 THPT CHUYÊN ĐHSP NĂM 2022">&bull;
                                                                THÔNG BÁO KẾT QUẢ XÉT TUYỂN THẲNG VÀO LỚP 10 THPT CHUYÊN
                                                                ĐHSP NĂM 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-buu-chinh-den-ngay-2142022_v724.aspx"
                                                               title="TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG BƯU CHÍNH ĐẾN NGÀY 21/4/2022">&bull;
                                                                TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG BƯU CHÍNH ĐẾN
                                                                NGÀY 21/4/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-4-ve-viec-tra-cuu-sbd-ki-thi-thu-lan-2-va-thong-bao-to-chuc-thi-thu-lan-3-vao-lop-10-chuyen-nam-2022_v723.aspx"
                                                               title="Thông báo số 4: Về việc tra cứu SBD kì thi thử lần 2  và thông báo tổ chức thi thử lần 3 vào lớp 10 chuyên năm 2022">&bull;
                                                                Thông báo số 4: Về việc tra cứu SBD kì thi thử lần 2 và
                                                                thông báo tổ chức thi thử lần 3 vào lớp 10 chuyên năm
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-3-ket-qua-thi-thu-vao-lop-10-chuyen-lan-1-va-to-chuc-thi-thu-lan-2-nam-2022_v721.aspx"
                                                               title="Thông báo số 3: Kết quả thi thử vào lớp 10 chuyên lần 1 và tổ chức thi thử lần 2 năm 2022">&bull;
                                                                Thông báo số 3: Kết quả thi thử vào lớp 10 chuyên lần 1
                                                                và tổ chức thi thử lần 2 năm 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-ki-thi-thu-vao-lop-10-chuyen-nam-2022-lan-1_v716.aspx"
                                                               title="THÔNG BÁO VỀ KÌ THI THỬ VÀO LỚP 10 CHUYÊN NĂM 2022 - LẦN 1">&bull;
                                                                THÔNG BÁO VỀ KÌ THI THỬ VÀO LỚP 10 CHUYÊN NĂM 2022 - LẦN
                                                                1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/toa-dam-van-hoc-lit-mnemosyme-–-suc-song-cua-than-thoai_v720.aspx"
                                                               title="Tọa đàm văn học LiT Mnémosyme – Sức sống của thần thoại">&bull;
                                                                Tọa đàm văn học LiT Mnémosyme – Sức sống của thần
                                                                thoại</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-so-bao-danh-phong-thi-thu-vao-lop-10-lan-1_v719.aspx"
                                                               title="TRA CỨU SỐ BÁO DANH, PHÒNG THI THỬ VÀO LỚP 10 LẦN 1">&bull;
                                                                TRA CỨU SỐ BÁO DANH, PHÒNG THI THỬ VÀO LỚP 10 LẦN 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-1-ve-ki-thi-thu-vao-lop-10-chuyen-nam-2022-lan-1_v717.aspx"
                                                               title="THÔNG BÁO SỐ 1 VỀ KÌ THI THỬ VÀO LỚP 10 CHUYÊN NĂM 2022 - LẦN 1">&bull;
                                                                THÔNG BÁO SỐ 1 VỀ KÌ THI THỬ VÀO LỚP 10 CHUYÊN NĂM 2022
                                                                - LẦN 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-ki-thi-tuyen-sinh-vao-lop-10-chuyen-dhsp-nam-hoc-2022-2023_v715.aspx"
                                                               title="THÔNG BÁO VẾ KÌ THI TUYỂN SINH VÀO LỚP 10 CHUYÊN ĐHSP NĂM HỌC 2022- 2023">&bull;
                                                                THÔNG BÁO VẾ KÌ THI TUYỂN SINH VÀO LỚP 10 CHUYÊN ĐHSP
                                                                NĂM HỌC 2022- 2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-hoan-tra-le-phi-du-thi-tuyen-sinh-vao-lop-10-nam-2021-dot-2-lan-2_v714.aspx"
                                                               title="Thông báo về việc hoàn trả lệ phí dự thi tuyển sinh vào lớp 10 năm 2021 Đợt 2 - Lần 2">&bull;
                                                                Thông báo về việc hoàn trả lệ phí dự thi tuyển sinh vào
                                                                lớp 10 năm 2021 Đợt 2 - Lần 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-cuoc-thi-thiet-ke-logo-truong-thpt-chuyen-dhsp-le-ki-niem-55-nam-thanh-lap-don-vi_v713.aspx"
                                                               title="Thông báo: Kết quả cuộc thi Thiết kế Logo trường THPT Chuyên ĐHSP & Lễ kỉ niệm 55 năm thành lập đơn vị">&bull;
                                                                Thông báo: Kết quả cuộc thi Thiết kế Logo trường THPT
                                                                Chuyên ĐHSP & Lễ kỉ niệm 55 năm thành lập đơn vị</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-hoan-tra-le-phi-thi-tuyen-sinh-vao-lop-10-truong-thpt-chuyen-dhsp-nam-2021-dot-2_v712.aspx"
                                                               title="Thông báo về việc hoàn trả lệ phí thi tuyển sinh vào lớp 10  Trường THPT Chuyên ĐHSP năm 2021-Đợt 2">&bull;
                                                                Thông báo về việc hoàn trả lệ phí thi tuyển sinh vào lớp
                                                                10 Trường THPT Chuyên ĐHSP năm 2021-Đợt 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="/45-hoc-sinh-cung-lop-o-ha-noi-duoc-tuyen-thang-dai-hoc-top-dau-cua-viet-nam_v705.aspx"
                                                               title="45 học sinh cùng lớp ở Hà Nội được tuyển thẳng đại học top đầu của Việt Nam">&bull;
                                                                45 học sinh cùng lớp ở Hà Nội được tuyển thẳng đại học
                                                                top đầu của Việt Nam</a>
                                                        </li>

                                                        <li>
                                                            <a href="/2-thi-sinh-duong-len-dinh-olympia-nam-20-‘khong-hen’-ma-cung-lua-chon-ngo-ngang_v704.aspx"
                                                               title="2 thí sinh Đường lên đỉnh Olympia năm 20 ‘không hẹn’ mà cùng 'lựa chọn' ngỡ ngàng">&bull;
                                                                2 thí sinh Đường lên đỉnh Olympia năm 20 ‘không hẹn’ mà
                                                                cùng 'lựa chọn' ngỡ ngàng</a>
                                                        </li>

                                                        <li>
                                                            <a href="/4-guong-mat-chung-ket-olympia-2020-nguoi-chuan-bi-di-du-hoc-uc-nguoi-ve-chung-mot-truong_v703.aspx"
                                                               title="4 gương mặt Chung kết Olympia 2020: Người chuẩn bị đi du học Úc, người về chung một trường">&bull;
                                                                4 gương mặt Chung kết Olympia 2020: Người chuẩn bị đi du
                                                                học Úc, người về chung một trường</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ket-qua-phuc-khao-ki-thi-tuyen-sinh-vao-lop-10-nam-2021-dot-1_v701.aspx"
                                                               title="KẾT QUẢ PHÚC KHẢO KÌ THI TUYỂN SINH VÀO LỚP 10 NĂM 2021 - ĐỢT 1">&bull;
                                                                KẾT QUẢ PHÚC KHẢO KÌ THI TUYỂN SINH VÀO LỚP 10 NĂM 2021
                                                                - ĐỢT 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ket-qua-xet-tuyen-he-khong-chuyen-mau-khai-bien-nhan-ho-so-va-khai-bao-y-te-online_v700.aspx"
                                                               title="Kết quả xét tuyển hệ không Chuyên, Mẫu khai biên nhận hồ sơ và Khai báo y tế Online">&bull;
                                                                Kết quả xét tuyển hệ không Chuyên, Mẫu khai biên nhận hồ
                                                                sơ và Khai báo y tế Online</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hanh-trinh-tiep-lua-niem-dam-me-tin-hoc-cho-cac-the-he-hoc-sinh-chuyen-su-pham_v621.aspx"
                                                               title="Hành trình tiếp lửa niềm đam mê tin học cho các thế hệ học sinh Chuyên Sư Phạm">&bull;
                                                                Hành trình tiếp lửa niềm đam mê tin học cho các thế hệ
                                                                học sinh Chuyên Sư Phạm</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-lich-nhap-hoc-cua-hoc-sinh-trung-tuyen-vao-lop-10-nam-2021_v699.aspx"
                                                               title="Thông báo lịch nhập học của học sinh trúng tuyển vào lớp 10 năm 2021">&bull;
                                                                Thông báo lịch nhập học của học sinh trúng tuyển vào lớp
                                                                10 năm 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/7-thu-khoa-trong-ky-thi-tuyen-sinh-vao-lop-10-thpt-chuyen-dh-su-pham-nam-2021_v698.aspx"
                                                               title="7 thủ khoa trong kỳ thi tuyển sinh vào lớp 10 THPT Chuyên ĐH Sư phạm năm 2021">&bull;
                                                                7 thủ khoa trong kỳ thi tuyển sinh vào lớp 10 THPT
                                                                Chuyên ĐH Sư phạm năm 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-ket-qua-thi-tuyen-sinh-vao-lop-10-chuyen-dhsp-ha-noi-nam-2021_v697.aspx"
                                                               title="Tra cứu kết quả thi tuyển sinh vào lớp 10 Chuyên ĐHSP Hà Nội năm 2021">&bull;
                                                                Tra cứu kết quả thi tuyển sinh vào lớp 10 Chuyên ĐHSP Hà
                                                                Nội năm 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hoc-sinh-truong-thpt-chuyen-dhsp-gianh-huy-chuong-vang-intarg-2021_v696.aspx"
                                                               title="Học sinh trường THPT Chuyên ĐHSP giành Huy chương vàng INTARG 2021">&bull;
                                                                Học sinh trường THPT Chuyên ĐHSP giành Huy chương vàng
                                                                INTARG 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/truong-thpt-chuyen-dhsp-ha-noi-ket-nap-dang-cho-02-doan-vien-xuat-sac_v695.aspx"
                                                               title="Trường THPT Chuyên ĐHSP Hà Nội kết nạp Đảng cho 02 Đoàn viên xuất sắc">&bull;
                                                                Trường THPT Chuyên ĐHSP Hà Nội kết nạp Đảng cho 02 Đoàn
                                                                viên xuất sắc</a>
                                                        </li>

                                                        <li>
                                                            <a href="/loi-nhac-danh-cho-cac-thi-sinh-du-thi-vao-truong-thpt-chuyen-dhsp-ngay-176_v694.aspx"
                                                               title="Lời nhắc dành cho các thí sinh dự thi vào Trường THPT Chuyên ĐHSP ngày 17/6">&bull;
                                                                Lời nhắc dành cho các thí sinh dự thi vào Trường THPT
                                                                Chuyên ĐHSP ngày 17/6</a>
                                                        </li>

                                                    </ul>


                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm32">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left:3px; padding-bottom:5px;">
                                                    <div class="fb-like-box"
                                                         data-href="https://www.facebook.com/WebsiteTruongThptChuyenDaiHocSuPham"
                                                         data-width="254" data-show-faces="true" data-stream="false"
                                                         data-show-border="true" data-header="true"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm12">
                                                    <span id="ctl00_ContentPlaceHolder1_r2_LabelDangQuanTam">Bài viết đáng quan tâm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm22">

                                                    <ul id="items">

                                                        <li>
                                                            <a href="/thong-bao-lich-tap-trung-dau-nam-hoc-2022-2023_v754.aspx"
                                                               title="THÔNG BÁO LỊCH TẬP TRUNG ĐẦU NĂM HỌC 2022-2023">&bull;
                                                                THÔNG BÁO LỊCH TẬP TRUNG ĐẦU NĂM HỌC 2022-2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/cac-hoc-sinh-vn-dat-diem-tuyet-doi-tai-imo-olympic-toan-hoc-quoc-te_v753.aspx"
                                                               title="Các học sinh VN đạt điểm tuyệt đối tại IMO (Olympic Toán học Quốc tế)">&bull;
                                                                Các học sinh VN đạt điểm tuyệt đối tại IMO (Olympic Toán
                                                                học Quốc tế)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-dang-ki-tiem-vac-xin-ngua-covid-19-mui-3-cho-hoc-sinh-k10-nam-hoc-2022-2023_v752.aspx"
                                                               title="Thông báo về đăng kí tiêm vắc xin ngừa Covid-19 mũi 3 cho học sinh K10 năm học 2022-2023">&bull;
                                                                Thông báo về đăng kí tiêm vắc xin ngừa Covid-19 mũi 3
                                                                cho học sinh K10 năm học 2022-2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-khan-ve-viec-cung-cap-thong-tin-tai-khoan-de-phuc-vu-cong-tac-tuyen-sinh-nam-2022_v750.aspx"
                                                               title="Thông báo khẩn về việc cung cấp thông tin tài khoản để phục vụ công tác tuyển sinh năm 2022">&bull;
                                                                Thông báo khẩn về việc cung cấp thông tin tài khoản để
                                                                phục vụ công tác tuyển sinh năm 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-2-ve-viec-ha-diem-chuan-va-nhap-hoc-bo-sung-vao-lop-10-he-khong-chuyen_v749.aspx"
                                                               title="Thông báo số 2 về việc hạ điểm chuẩn và nhập học bổ sung vào lớp 10 hệ không chuyên">&bull;
                                                                Thông báo số 2 về việc hạ điểm chuẩn và nhập học bổ sung
                                                                vào lớp 10 hệ không chuyên</a>
                                                        </li>

                                                        <li>
                                                            <a href="/chuyen-su-pham-chao-don-anh-tai-k56_v748.aspx"
                                                               title="Chuyên Sư Phạm - Chào đón anh tài K56">&bull;
                                                                Chuyên Sư Phạm - Chào đón anh tài K56</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-diem-chuan-xet-khong-chuyen-va-lich-nhap-hoc_v746.aspx"
                                                               title="TB ĐIỂM CHUẨN XÉT KHÔNG CHUYÊN VÀ LỊCH NHẬP HỌC">&bull;
                                                                TB ĐIỂM CHUẨN XÉT KHÔNG CHUYÊN VÀ LỊCH NHẬP HỌC</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-phuc-khao-ki-thi-tuyen-sinh-vao-lop-10-nam-2022_v745.aspx"
                                                               title="THÔNG BÁO KẾT QUẢ PHÚC KHẢO KÌ THI TUYỂN SINH VÀO LỚP 10 NĂM 2022">&bull;
                                                                THÔNG BÁO KẾT QUẢ PHÚC KHẢO KÌ THI TUYỂN SINH VÀO LỚP 10
                                                                NĂM 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thu-don-xet-tuyen-lop-khong-chuyen-nam-2022_v744.aspx"
                                                               title="THÔNG BÁO VỀ VIỆC THU ĐƠN XÉT TUYỂN LỚP KHÔNG CHUYÊN NĂM 2022">&bull;
                                                                THÔNG BÁO VỀ VIỆC THU ĐƠN XÉT TUYỂN LỚP KHÔNG CHUYÊN NĂM
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-tra-cuu-ket-qua-tuyen-sinh-vao-lop-10-nam-2022_v741.aspx"
                                                               title="Thông báo tra cứu kết quả tuyển sinh vào lớp 10 năm 2022">&bull;
                                                                Thông báo tra cứu kết quả tuyển sinh vào lớp 10 năm
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-tra-cuu-phong-thi-so-bao-danh-tuyen-sinh-vao-lop-10-nam-2022_v731.aspx"
                                                               title="THÔNG BÁO TRA CỨU PHÒNG THI, SỐ BÁO DANH TUYỂN SINH VÀO LỚP 10 NĂM 2022">&bull;
                                                                THÔNG BÁO TRA CỨU PHÒNG THI, SỐ BÁO DANH TUYỂN SINH VÀO
                                                                LỚP 10 NĂM 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-6-ve-viec-tra-cuu-sbd-ki-thi-thu-lan-3-vao-lop-10-chuyen-nam-2022_v729.aspx"
                                                               title="Thông báo số 6: Về việc tra cứu SBD kì thi thử lần 3 vào lớp 10 chuyên năm 2022">&bull;
                                                                Thông báo số 6: Về việc tra cứu SBD kì thi thử lần 3 vào
                                                                lớp 10 chuyên năm 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-chuyen-phat-nhanh-den-het-ngay-0852022_v728.aspx"
                                                               title="TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG CHUYỂN PHÁT NHANH ĐẾN HẾT NGÀY 08/5/2022">&bull;
                                                                TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG CHUYỂN PHÁT
                                                                NHANH ĐẾN HẾT NGÀY 08/5/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-chuyen-phat-nhanh-den-ngay-0552022_v727.aspx"
                                                               title="TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG CHUYỂN PHÁT NHANH ĐẾN NGÀY 05/5/2022">&bull;
                                                                TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG CHUYỂN PHÁT
                                                                NHANH ĐẾN NGÀY 05/5/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-phat-hanh-ho-so-tuyen-sinh-vao-lop-10-nam-2022_v718.aspx"
                                                               title="THÔNG BÁO PHÁT HÀNH HỒ SƠ TUYỂN SINH VÀO LỚP 10 NĂM 2022">&bull;
                                                                THÔNG BÁO PHÁT HÀNH HỒ SƠ TUYỂN SINH VÀO LỚP 10 NĂM
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-xet-tuyen-thang-vao-lop-10-thpt-chuyen-dhsp-nam-2022_v726.aspx"
                                                               title="THÔNG BÁO KẾT QUẢ XÉT TUYỂN THẲNG VÀO LỚP 10 THPT CHUYÊN ĐHSP NĂM 2022">&bull;
                                                                THÔNG BÁO KẾT QUẢ XÉT TUYỂN THẲNG VÀO LỚP 10 THPT CHUYÊN
                                                                ĐHSP NĂM 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-buu-chinh-den-ngay-2142022_v724.aspx"
                                                               title="TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG BƯU CHÍNH ĐẾN NGÀY 21/4/2022">&bull;
                                                                TB DANH SÁCH THÍ SINH NỘP HỒ SƠ QUA ĐƯỜNG BƯU CHÍNH ĐẾN
                                                                NGÀY 21/4/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-4-ve-viec-tra-cuu-sbd-ki-thi-thu-lan-2-va-thong-bao-to-chuc-thi-thu-lan-3-vao-lop-10-chuyen-nam-2022_v723.aspx"
                                                               title="Thông báo số 4: Về việc tra cứu SBD kì thi thử lần 2  và thông báo tổ chức thi thử lần 3 vào lớp 10 chuyên năm 2022">&bull;
                                                                Thông báo số 4: Về việc tra cứu SBD kì thi thử lần 2 và
                                                                thông báo tổ chức thi thử lần 3 vào lớp 10 chuyên năm
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-3-ket-qua-thi-thu-vao-lop-10-chuyen-lan-1-va-to-chuc-thi-thu-lan-2-nam-2022_v721.aspx"
                                                               title="Thông báo số 3: Kết quả thi thử vào lớp 10 chuyên lần 1 và tổ chức thi thử lần 2 năm 2022">&bull;
                                                                Thông báo số 3: Kết quả thi thử vào lớp 10 chuyên lần 1
                                                                và tổ chức thi thử lần 2 năm 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-ki-thi-thu-vao-lop-10-chuyen-nam-2022-lan-1_v716.aspx"
                                                               title="THÔNG BÁO VỀ KÌ THI THỬ VÀO LỚP 10 CHUYÊN NĂM 2022 - LẦN 1">&bull;
                                                                THÔNG BÁO VỀ KÌ THI THỬ VÀO LỚP 10 CHUYÊN NĂM 2022 - LẦN
                                                                1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-so-bao-danh-phong-thi-thu-vao-lop-10-lan-1_v719.aspx"
                                                               title="TRA CỨU SỐ BÁO DANH, PHÒNG THI THỬ VÀO LỚP 10 LẦN 1">&bull;
                                                                TRA CỨU SỐ BÁO DANH, PHÒNG THI THỬ VÀO LỚP 10 LẦN 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-1-ve-ki-thi-thu-vao-lop-10-chuyen-nam-2022-lan-1_v717.aspx"
                                                               title="THÔNG BÁO SỐ 1 VỀ KÌ THI THỬ VÀO LỚP 10 CHUYÊN NĂM 2022 - LẦN 1">&bull;
                                                                THÔNG BÁO SỐ 1 VỀ KÌ THI THỬ VÀO LỚP 10 CHUYÊN NĂM 2022
                                                                - LẦN 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-ki-thi-tuyen-sinh-vao-lop-10-chuyen-dhsp-nam-hoc-2022-2023_v715.aspx"
                                                               title="THÔNG BÁO VẾ KÌ THI TUYỂN SINH VÀO LỚP 10 CHUYÊN ĐHSP NĂM HỌC 2022- 2023">&bull;
                                                                THÔNG BÁO VẾ KÌ THI TUYỂN SINH VÀO LỚP 10 CHUYÊN ĐHSP
                                                                NĂM HỌC 2022- 2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-hoan-tra-le-phi-du-thi-tuyen-sinh-vao-lop-10-nam-2021-dot-2-lan-2_v714.aspx"
                                                               title="Thông báo về việc hoàn trả lệ phí dự thi tuyển sinh vào lớp 10 năm 2021 Đợt 2 - Lần 2">&bull;
                                                                Thông báo về việc hoàn trả lệ phí dự thi tuyển sinh vào
                                                                lớp 10 năm 2021 Đợt 2 - Lần 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-hoan-tra-le-phi-thi-tuyen-sinh-vao-lop-10-truong-thpt-chuyen-dhsp-nam-2021-dot-2_v712.aspx"
                                                               title="Thông báo về việc hoàn trả lệ phí thi tuyển sinh vào lớp 10  Trường THPT Chuyên ĐHSP năm 2021-Đợt 2">&bull;
                                                                Thông báo về việc hoàn trả lệ phí thi tuyển sinh vào lớp
                                                                10 Trường THPT Chuyên ĐHSP năm 2021-Đợt 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ket-qua-phuc-khao-ki-thi-tuyen-sinh-vao-lop-10-nam-2021-dot-1_v701.aspx"
                                                               title="KẾT QUẢ PHÚC KHẢO KÌ THI TUYỂN SINH VÀO LỚP 10 NĂM 2021 - ĐỢT 1">&bull;
                                                                KẾT QUẢ PHÚC KHẢO KÌ THI TUYỂN SINH VÀO LỚP 10 NĂM 2021
                                                                - ĐỢT 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-lich-nhap-hoc-cua-hoc-sinh-trung-tuyen-vao-lop-10-nam-2021_v699.aspx"
                                                               title="Thông báo lịch nhập học của học sinh trúng tuyển vào lớp 10 năm 2021">&bull;
                                                                Thông báo lịch nhập học của học sinh trúng tuyển vào lớp
                                                                10 năm 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-2-ve-lich-thi-chinh-thuc-ki-thi-tuyen-sinh-vao-lop-10-nam-hoc-2021-2022_v687.aspx"
                                                               title="Thông báo số 2 về lịch thi chính thức kì thi tuyển sinh vào lớp 10 năm học 2021-2022">&bull;
                                                                Thông báo số 2 về lịch thi chính thức kì thi tuyển sinh
                                                                vào lớp 10 năm học 2021-2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-tam-hoan-to-chuc-ki-thi-tuyen-sinh-vao-lop-10-nam-hoc-2021-2022_v681.aspx"
                                                               title="Thông báo về việc tạm hoãn tổ chức kì thi tuyển sinh vào lớp 10 năm học 2021-2022">&bull;
                                                                Thông báo về việc tạm hoãn tổ chức kì thi tuyển sinh vào
                                                                lớp 10 năm học 2021-2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-ho-so-truc-tuyen-qua-duong-buu-dien_v679.aspx"
                                                               title="Tra cứu hồ sơ trực tuyến (QUA ĐƯỜNG BƯU ĐIỆN)">&bull;
                                                                Tra cứu hồ sơ trực tuyến (QUA ĐƯỜNG BƯU ĐIỆN)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thu-ho-so-vao-lop-10-nam-hoc-2021-2022_v677.aspx"
                                                               title="Thông báo về việc thu hồ sơ vào lớp 10 năm học 2021-2022">&bull;
                                                                Thông báo về việc thu hồ sơ vào lớp 10 năm học
                                                                2021-2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-danh-sach-ho-so-nop-truc-tuyen-chuyen-khoan-qua-duong-buu-dien_v676.aspx"
                                                               title="Tra cứu danh sách hồ sơ nộp trực tuyến (Chuyển khoản qua đường bưu điện)">&bull;
                                                                Tra cứu danh sách hồ sơ nộp trực tuyến (Chuyển khoản qua
                                                                đường bưu điện)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-xet-tuyen-thảng-vao-lop-10-nam-học-2021-2022_v675.aspx"
                                                               title="Thông báo kết quả xét tuyển thẳng vào lớp 10 năm học 2021 - 2022">&bull;
                                                                Thông báo kết quả xét tuyển thẳng vào lớp 10 năm học
                                                                2021 - 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-tuyen-sinh-vao-lop-10-truong-thpt-chuyen-dhsp-nam-2021_v580.aspx"
                                                               title="Thông báo về việc tuyển sinh vào lớp 10 trường THPT Chuyên ĐHSP năm 2021">&bull;
                                                                Thông báo về việc tuyển sinh vào lớp 10 trường THPT
                                                                Chuyên ĐHSP năm 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/danh-sach-thi-sinh-nop-ho-so-truc-tuyen-qua-duong-buu-dien_v669.aspx"
                                                               title="Danh sách thí sinh nộp hồ sơ trực tuyến (qua đường bưu điện)">&bull;
                                                                Danh sách thí sinh nộp hồ sơ trực tuyến (qua đường bưu
                                                                điện)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nam-sinh-chuyen-su-pham-gianh-ve-cuoi-cung-vao-chung-ket-olympia-2020_v646.aspx"
                                                               title="Nam sinh Chuyên Sư Phạm giành vé cuối cùng vào chung kết Olympia 2020">&bull;
                                                                Nam sinh Chuyên Sư Phạm giành vé cuối cùng vào chung kết
                                                                Olympia 2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nu-sinh-chuyen-anh-truong-chuyen-su-pham-la-thu-khoa-khoi-d-toan-quoc_v642.aspx"
                                                               title="Nữ sinh chuyên Anh trường Chuyên Sư Phạm là thủ khoa khối D toàn quốc">&bull;
                                                                Nữ sinh chuyên Anh trường Chuyên Sư Phạm là thủ khoa
                                                                khối D toàn quốc</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-lich-tap-trung-hoc-sinh-dau-nam-hoc-2020-2021_v643.aspx"
                                                               title="Thông báo lịch tập trung học sinh đầu năm học 2020 - 2021">&bull;
                                                                Thông báo lịch tập trung học sinh đầu năm học 2020 -
                                                                2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hoc-sinh-truong-chuyen-su-pham-dat-huy-chuong-bac-tai-olympic-tin-hoc-chau-a-thai-binh-duong-2020_v641.aspx"
                                                               title="Học sinh trường Chuyên Sư phạm đạt Huy chương Bạc tại Olympic Tin học Châu Á - Thái Bình Dương 2020">&bull;
                                                                Học sinh trường Chuyên Sư phạm đạt Huy chương Bạc tại
                                                                Olympic Tin học Châu Á - Thái Bình Dương 2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-kq-xet-tuyen-va-nhap-hoc-cua-he-khong-chuyen-nam-hoc-2020-2021_v638.aspx"
                                                               title="Thông báo KQ xét tuyển và nhập học của hệ không chuyên năm học 2020-2021">&bull;
                                                                Thông báo KQ xét tuyển và nhập học của hệ không chuyên
                                                                năm học 2020-2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-thi-tuyen-sinh-vao-lop-10-nam-hoc-2020-2021_v632.aspx"
                                                               title="Thông báo kết quả thi tuyển sinh vào lớp 10 năm học 2020-2021">&bull;
                                                                Thông báo kết quả thi tuyển sinh vào lớp 10 năm học
                                                                2020-2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/dap-an-mon-toan-va-dinh-chinh-dap-an-mon-tieng-anh-thi-thu-tot-nghiep-lan-2-ngay-05072020_v628.aspx"
                                                               title="Đáp án môn toán và đính chính đáp án môn tiếng anh thi thử tốt nghiệp lần 2, ngày 05/07/2020">&bull;
                                                                Đáp án môn toán và đính chính đáp án môn tiếng anh thi
                                                                thử tốt nghiệp lần 2, ngày 05/07/2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-thong-tin-phong-thi-so-bao-danh-tuyen-sinh-thpt-chuyen-dhsp-nam-2020_v616.aspx"
                                                               title="Tra cứu Thông tin phòng thi, số báo danh tuyển sinh THPT Chuyên ĐHSP năm 2020">&bull;
                                                                Tra cứu Thông tin phòng thi, số báo danh tuyển sinh THPT
                                                                Chuyên ĐHSP năm 2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thi-thu-tot-nghiep-pho-thong-danh-cho-hoc-sinh-lop-12-nam-hoc-2019-2020_v619.aspx"
                                                               title="Thông báo về việc thi thử Tốt nghiệp phổ thông dành cho học sinh lớp 12 năm học 2019 - 2020">&bull;
                                                                Thông báo về việc thi thử Tốt nghiệp phổ thông dành cho
                                                                học sinh lớp 12 năm học 2019 - 2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thu-ho-so-tuyen-sinh-vao-lop-10-nam-hoc-2020-2021_v609.aspx"
                                                               title="Thông báo về việc thu hồ sơ tuyển sinh vào lớp 10 năm học 2020-2021">&bull;
                                                                Thông báo về việc thu hồ sơ tuyển sinh vào lớp 10 năm
                                                                học 2020-2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ha-noi-kien-nghi-chinh-phu-thong-nhat-rut-ngan-chuong-trinh-giao-duc_v598.aspx"
                                                               title="Hà Nội kiến nghị Chính phủ thống nhất rút ngắn chương trình giáo dục">&bull;
                                                                Hà Nội kiến nghị Chính phủ thống nhất rút ngắn chương
                                                                trình giáo dục</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ngay-hoi-sach-khuyen-khich-phu-huynh-huong-dan-con-doc-sach-dien-tu_v597.aspx"
                                                               title="Ngày hội sách: Khuyến khích phụ huynh hướng dẫn con đọc sách điện tử">&bull;
                                                                Ngày hội sách: Khuyến khích phụ huynh hướng dẫn con đọc
                                                                sách điện tử</a>
                                                        </li>

                                                        <li>
                                                            <a href="/van-thi-thpt-quoc-gia-vao-thang-8-neu-hoc-sinh-di-hoc-tro-lai-truoc-156_v596.aspx"
                                                               title="Vẫn thi THPT quốc gia vào tháng 8 nếu học sinh đi học trở lại trước 15/6">&bull;
                                                                Vẫn thi THPT quốc gia vào tháng 8 nếu học sinh đi học
                                                                trở lại trước 15/6</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-ket-qua-phuc-khao-va-nhap-hoc-sau-phuc-khao_v571.aspx"
                                                               title="TB KẾT QUẢ PHÚC KHẢO VÀ NHẬP HỌC SAU PHÚC KHẢO">&bull;
                                                                TB KẾT QUẢ PHÚC KHẢO VÀ NHẬP HỌC SAU PHÚC KHẢO</a>
                                                        </li>

                                                        <li>
                                                            <a href="/lich-nhap-hoc-cua-hoc-sinh-trung-tuyen-vao-lop-10-he-chuyen-nam-hoc-2019-2020_v570.aspx"
                                                               title="Lịch nhập học của học sinh trúng tuyển vào lớp 10 hệ chuyên năm học 2019 - 2020">&bull;
                                                                Lịch nhập học của học sinh trúng tuyển vào lớp 10 hệ
                                                                chuyên năm học 2019 - 2020</a>
                                                        </li>

                                                    </ul>


                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm32">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm12">
                                                    <span id="ctl00_ContentPlaceHolder1_r2_LabelLienKet">Liên kết website</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm22">

                                                    <ul class="link">

                                                        <li>
                                                            <a href="http://www.chuyensupham.net" target="_blank"
                                                               title="http://www.chuyensupham.net">&bull; Hội Cựu học
                                                                sinh trường THPT Chuyên ĐHSP</a>
                                                        </li>

                                                        <li>
                                                            <a href="http://www.hanoi.edu.vn" target="_blank"
                                                               title="http://www.hanoi.edu.vn">&bull; Sở giáo dục và đào
                                                                tạo Hà Nội</a>
                                                        </li>

                                                        <li>
                                                            <a href="http://www.hnue.edu.vn" target="_blank"
                                                               title="http://www.hnue.edu.vn">&bull; Đại học sư phạm Hà
                                                                Nội</a>
                                                        </li>

                                                        <li>
                                                            <a href="http://www.moet.gov.vn" target="_blank"
                                                               title="http://www.moet.gov.vn">&bull; Bộ giáo dục & Đào
                                                                tạo</a>
                                                        </li>

                                                    </ul>


                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm32">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td class="menu-f">
                <span id="ctl00_LabelMenuFoot"><div id="ddtopmenubar" class="mattblackmenu2">
<ul>
<li class="End"><a href="/" title="Trang chủ">Trang chủ</a></li>
<li><a href="/gioi-thieu_g0.aspx" title="Giới thiệu">Giới thiệu</a></li>
<li><a href="/lich-tuan.aspx" title="Lịch tuần">Lịch tuần</a></li>
<li><a href="/tai-lieu.aspx" title="Tài liệu tham khảo">Tài liệu tham khảo</a></li>
<li><a href="/thoi-khoa-bieu.aspx" title="Thời khóa biểu">Thời khóa biểu</a></li>
<li><a href="/phong-thi.aspx" title="Tra cứu phòng thi">Tra cứu phòng thi</a></li>
<li><a href="/diem-thi.aspx" title="Tra cứu điểm thi">Tra cứu điểm thi</a></li>
<li><a href="/lien-he.aspx" title="Liên hệ">Liên hệ</a></li>
<ul></div>
</span>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <table border="0" cellpadding="0" cellspacing="0" width="996px">
                        <tr>
                            <td style="padding:35px 10px 0 138px; width:50%; vertical-align:top;">
                                <a href="../admin/">Đăng nhập</a>
                                |
                                <a href="/sitemap.aspx">Site map</a>
                                |
                                <a href="mailto:suphamchuyen@gmail.com">Góp ý</a>
                                |
                                <a href="#">Lên đầu</a>
                                <br/>

                                <table border="0" cellpadding="0" cellspacing="2" width="100%">
                                    <tr>
                                        <td style="padding-top:15px;">


                                            <span id="ctl00_h_LabelLuotHomNay">Hôm nay: 805 lượt | Tổng truy cập: 14515093 lượt</span>
                                        </td>
                                    </tr>


                                </table>


                            </td>
                            <td style="padding:25px 10px 0 50px; width:50%; vertical-align:top;">
                            <span id="ctl00_LabelFoot"><strong>Trường THPT Chuy&ecirc;n Đại học Sư phạm<br/>
</strong><br/>
Địa chỉ: Nh&agrave; D - 136 Xu&acirc;n Thuỷ - Cầu Giấy - H&agrave; Nội.<br/>
TEL:&nbsp;<span style="font-size: 17.3333px;">(024</span><span style="font-size: 17.3333px;">3</span><span
                                        style="font-size: 17.3333px;">) 75.47.661</span>&nbsp;FAX: <span
                                        id="ctl00_ContentPlaceHolder1_LabelDetail"><span lang="EN-US"
                                                                                         style="font-size:13.0pt">(024<span
                                                style="font-size: 17.3333px;">3</span>) 75.47.661</span></span><br/>
Email: c3chuyendhsp@hanoiedu.vn<br/>
<br/></span>
                            </td>
                        </tr>
                    </table>


                </td>
            </tr>
        </table>

    </div>
</body>
</html>
