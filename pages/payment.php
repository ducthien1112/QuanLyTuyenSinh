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
        THANH TO??N L??? PH?? D??? THI
    </title>
    <meta name="description" content="TH??NG B??O TUY???N SINH L???P 10 N??M H???C 2016-2017, Tr?????ng THPT Chuy??n S?? ph???m"/>
    <meta name="keywords"
          content="Xe t???i chuy??n d??ng, TH??NG B??O TUY???N SINH L???P 10 N??M H???C 2016-2017, Tr?????ng THPT Chuy??n S?? ph???m"/>
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
<li><a href="index.php" title="Trang ch???">Trang ch???</a></li>
<li><a rel="ddsubmenu1" href="" title="Gi???i thi???u">Gi???i thi???u</a></li>
<li><a href="" title="L???ch tu???n">L???ch tu???n</a></li>

<li><a rel="ddsubmenu5559" href="" title="TIN T???C">TIN T???C</a></li>
<ul id="ddsubmenu5559" class="ddsubmenustyle">
<li><a href="" title="Ho???t ?????ng n???i b???">Ho???t ?????ng n???i b???</a></li>
<li><a href="" title="H???i ngh??? - H???i th???o">H???i ngh??? - H???i th???o</a></li>
<li><a href="" title="Ho???t ?????ng ??o??n">Ho???t ?????ng ??o??n</a></li>
<li><a href="" title="H???c b???ng - Du h???c">H???c b???ng - Du h???c</a></li>
</ul>


    <li><a rel="ddsubmenu55512" href="" title="55 N??m CSP">55 N??m CSP</a></li>
<ul id="ddsubmenu55512" class="ddsubmenustyle">
<li><a href="" title="Th?? ng???">Th?? ng???</a></li>
<li><a href="" title="K??? ni???m 55 N??m CSP">K??? ni???m 55 N??m CSP</a></li>
</ul>


<li><a rel="ddsubmenu3" href="" title="????o t???o - Tuy???n sinh">????o t???o - Tuy???n sinh</a></li>
<li><a rel="ddsubmenu2" href="" title="Th?? vi???n">Th?? vi???n</a></li>
<li class="End"><a href="" title="Li??n h???">Li??n h???</a></li>
<ul></div>
<div id="ddsubmenu1" class="ddsubmenustyle">
<li><a href="" title="Gi???i thi???u chung">Gi???i thi???u chung</a></li>
<li><a href="" title="B???ng v??ng th??nh t??ch">B???ng v??ng th??nh t??ch</a></li>
<li><a href="" title="50 N??m CSP">50 N??m CSP</a></li>
</div>
<div id="ddsubmenu2" class="ddsubmenustyle">
<li><a href="" title="T??i li???u tham kh???o">T??i li???u tham kh???o</a></li>
<li><a href="" title="Video Clip">Video Clip</a></li>
<li><a href="" title="Photo Album">Photo Album</a></li>
</div>
<div id="ddsubmenu3" class="ddsubmenustyle">
<li><a href="/thoi-khoa-bieu.aspx" title="Th???i kh??a bi???u h???c sinh">Th???i kh??a bi???u h???c sinh</a></li>
<li><a href="content.php" title="Th??ng tin tuy???n sinh">Th??ng tin tuy???n sinh</a></li>
<li><a href="tracuuphongthi.php" title="Tra c???u ph??ng thi">Tra c???u ph??ng thi</a></li>
<li><a href="tracuudiemthi.php" title="Tra c???u ??i???m thi">Tra c???u ??i???m thi</a></li>
<li><a href="lamdonphuckhao.php" title="Thanh to??n l??? ph??">Ph??c kh???o</a></li>
<li><a href="form_sign.php" title="Form ????ng k?? ">????ng k?? d??? thi </a></li>
<li><a href="payment.php" title="Thanh to??n l??? ph??">Thanh to??n l??? ph??</a></li>


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
                                            <span id="ctl00_MenuVi1_LabelHotline">Th??? Ba, ng??y 13 th??ng 12 n??m 2022</span>
                                        </td>
                                        <td style="text-align: right; width: 204px;">
                                            <input name="ctl00$MenuVi1$TextBoxSearch" type="text" value="T??? kh??a..."
                                                   id="ctl00_MenuVi1_TextBoxSearch" class="text-search"
                                                   onfocus="if (this.value==&#39;T??? kh??a...&#39;) this.value=&#39;&#39;;"
                                                   onblur="if (this.value==&#39;&#39;) this.value=&#39;T??? kh??a...&#39;;"/>
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
                                                            href="index.php">Trang ch???</a> &raquo; <a
                                                            href=""
                                                            title="B???ng tin - Th??ng b??o">B???ng tin - Th??ng b??o</a></span>
                                            </div>

                                            <span id="ctl00_ContentPlaceHolder1_LabelTieuDe"></span>

                                            <span id="ctl00_ContentPlaceHolder1_LabelTen" style="color:#0565A9;"><h2> THANH TO??N L??? PH?? D??? THI</h2></span>

                                            <!-- Form TRA C???U -->
                                            <form action="#" style="width: 600px" class="border-2 m-auto p-2" method="post" enctype="multipart/form-data">
                                                <?= ($msgError) ? '<div class="alert alert-danger">H??? s?? kh??ng t???n t???i!</div>' : "" ?>

                                                <?php 
                                                    if($info != []){
                                                        echo "H??? v?? t??n: ". $info['name'].'<br>';
                                                        echo "S??? ??i???n tho???i: ". $info['phone'].'<br>';
                                                        echo "Ng??y sinh: ". $info['birthday'].'<br>';
                                                        echo "Vui l??ng truy c???p ???ng d???ng Mobile Banking v?? qu??t m?? QR code d?????i ????y ????? thanh to??n: ".'<br><br>';
                                                        echo "<img src='".$info['qr_code']."' alt=''><br>";
                                                    }
                                                 ?>


                                                <div class="mb-3">
                                                    <label class="form-label">H??? v?? t??n</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">S??? ??i???n tho???i</label>
                                                    <input type="text" class="form-control" id="phone" name="phone">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Ng??y sinh</label>
                                                    <input type="date" class="form-control" id="birthday" name="birthday">
                                                </div>
                                                <button type="submit" class="btn btn-primary p-2 " id="btndangky" name="btnTraCuu">Tra c???u</button>
                                            </form>


                                            <!-- /Form TRA C???U -->

                                            


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
                                                                    class="CanhLe" height="30px"><u><b>C??c b??i vi???t kh??c:</b></u><br></td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/thong-bao-quan-trong!-cac-cong-thong-tin-chinh-thuc-cua-nha-truong_v757.aspx">Th??ng b??o quan tr???ng! C??c c???ng th??ng tin ch??nh th???c c???a nh?? tr?????ng</a> (<i>2/11</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/phat-dong-cuoc-thi-thiet-ke-logo-truong-thpt-chuyen-dhsp-va-logo-le-ki-niem-55-nam-thanh-lap-truong_v702.aspx">Ph??t ?????ng cu???c thi Thi???t k??? Logo tr?????ng THPT Chuy??n ??HSP v?? logo l??? k??? ni???m 55 n??m th??nh l???p tr?????ng</a> (<i>17/7</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/van-ban-huong-dan-thuc-hien-dieu-chinh-noi-dung-day-hoc-hoc-ky-ii-nam-hoc-2019-2020_v584.aspx">V??n b???n h?????ng d???n th???c hi???n ??i???u ch???nh n???i dung d???y h???c h???c k??? II n??m h???c 2019-2020</a> (<i>2/4</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/thay-doi-lich-thi-hoc-bong-astar-2019_v577.aspx">Thay ?????i l???ch thi h???c b???ng Astar 2019</a> (<i>8/8</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/lich-kham-suc-khoe-cho-hoc-sinh-khoi-10-k53_v575.aspx">L???ch kh??m s???c kh???e cho h???c sinh kh???i 10 K53</a> (<i>7/8</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/thong-bao-mo-lop-8-va-9-tao-nguon-nam-2019_v574.aspx">TH??NG B??O M??? L???P 8 V?? 9 T???O NGU???N N??M 2019</a> (<i>6/8</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/buoi-noi-chuyen-ve-ramsey-theory-cua-pgsts-le-thai-hoang-cuu-hoc-sinh-chuyen-su-pham-huy-chuong-vang-imo-1999-voi-hoc-sinh-chuyen-toan_v511.aspx">Bu???i n??i chuy???n v??? Ramsey Theory c???a PGS.TS. L?? Th??i Ho??ng, c???u h???c sinh Chuy??n S?? ph???m, Huy ch????ng v??ng IMO 1999, v???i h???c sinh chuy??n To??n</a> (<i>12/12</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/danh-sach-hoc-sinh-csp-nhan-hoc-bong-odon-valet-2017_v496.aspx">Danh s??ch h???c sinh CSP nh???n h???c b???ng ODON VALET 2017</a> (<i>4/7</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/mau-danh-sach-hsg-va-hstt-nam-hoc-2016-2017_v431.aspx">M???u danh s??ch HSG v?? HSTT n??m h???c 2016-2017</a> (<i>17/5</i>)</td></tr><tr><td
                                                                    height="20px">&bull; <a
                                                                        href="/danh-sach-trung-tuyen-tntn-2017_v488.aspx">Danh s??ch tr??ng tuy???n TNTN 2017</a> (<i>12/5</i>)</td></tr></table></span>
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
                                                    <span id="ctl00_ContentPlaceHolder1_r2_LabelBaiMoiNhat">Tin m???i nh???t</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm22">

                                                    <ul id="items2">

                                                        <li>
                                                            <a href=""
                                                               title="N??? sinh 'l???t x??c' quy???t tr??? th??nh 'vi??n ng???c s??ng' gi??nh h???c b???ng 1,7 t??? ?????ng">&bull;
                                                                N??? sinh 'l???t x??c' quy???t tr??? th??nh 'vi??n ng???c s??ng' gi??nh
                                                                h???c b???ng 1,7 t??? ?????ng</a>
                                                        </li>

                                                        <li>
                                                            <a href=""
                                                               title="Ti???n s?? to??n h???c 9X: B??? c?? h???i l??m vi???c ??? Ph??p v??? Vi???t Nam d???y h???c">&bull;
                                                                Ti???n s?? to??n h???c 9X: B??? c?? h???i l??m vi???c ??? Ph??p v??? Vi???t
                                                                Nam d???y h???c</a>
                                                        </li>

                                                        <li>
                                                            <a href=""
                                                               title="TH??NG B??O L???CH T???P TRUNG ?????U N??M H???C 2022-2023">&bull;
                                                                TH??NG B??O L???CH T???P TRUNG ?????U N??M H???C 2022-2023</a>
                                                        </li>

                                                        <li>
                                                            <a href=""
                                                               title="C??c h???c sinh VN ?????t ??i???m tuy???t ?????i t???i IMO (Olympic To??n h???c Qu???c t???)">&bull;
                                                                C??c h???c sinh VN ?????t ??i???m tuy???t ?????i t???i IMO (Olympic To??n
                                                                h???c Qu???c t???)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-dang-ki-tiem-vac-xin-ngua-covid-19-mui-3-cho-hoc-sinh-k10-nam-hoc-2022-2023_v752.aspx"
                                                               title="Th??ng b??o v??? ????ng k?? ti??m v???c xin ng???a Covid-19 m??i 3 cho h???c sinh K10 n??m h???c 2022-2023">&bull;
                                                                Th??ng b??o v??? ????ng k?? ti??m v???c xin ng???a Covid-19 m??i 3
                                                                cho h???c sinh K10 n??m h???c 2022-2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nong-thuy-hang-co-gai-dan-toc-tay-doat-vuong-mien-hoa-hau-cac-dan-toc-viet-nam-2022_v751.aspx"
                                                               title="N??ng Th??y H???ng - c?? g??i d??n t???c T??y - ??o???t v????ng mi???n Hoa h???u c??c d??n t???c Vi???t Nam 2022">&bull;
                                                                N??ng Th??y H???ng - c?? g??i d??n t???c T??y - ??o???t v????ng mi???n
                                                                Hoa h???u c??c d??n t???c Vi???t Nam 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-khan-ve-viec-cung-cap-thong-tin-tai-khoan-de-phuc-vu-cong-tac-tuyen-sinh-nam-2022_v750.aspx"
                                                               title="Th??ng b??o kh???n v??? vi???c cung c???p th??ng tin t??i kho???n ????? ph???c v??? c??ng t??c tuy???n sinh n??m 2022">&bull;
                                                                Th??ng b??o kh???n v??? vi???c cung c???p th??ng tin t??i kho???n ?????
                                                                ph???c v??? c??ng t??c tuy???n sinh n??m 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-2-ve-viec-ha-diem-chuan-va-nhap-hoc-bo-sung-vao-lop-10-he-khong-chuyen_v749.aspx"
                                                               title="Th??ng b??o s??? 2 v??? vi???c h??? ??i???m chu???n v?? nh???p h???c b??? sung v??o l???p 10 h??? kh??ng chuy??n">&bull;
                                                                Th??ng b??o s??? 2 v??? vi???c h??? ??i???m chu???n v?? nh???p h???c b??? sung
                                                                v??o l???p 10 h??? kh??ng chuy??n</a>
                                                        </li>

                                                        <li>
                                                            <a href="/chuyen-su-pham-chao-don-anh-tai-k56_v748.aspx"
                                                               title="Chuy??n S?? Ph???m - Ch??o ????n anh t??i K56">&bull;
                                                                Chuy??n S?? Ph???m - Ch??o ????n anh t??i K56</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-diem-chuan-xet-khong-chuyen-va-lich-nhap-hoc_v746.aspx"
                                                               title="TB ??I???M CHU???N X??T KH??NG CHUY??N V?? L???CH NH???P H???C">&bull;
                                                                TB ??I???M CHU???N X??T KH??NG CHUY??N V?? L???CH NH???P H???C</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-phuc-khao-ki-thi-tuyen-sinh-vao-lop-10-nam-2022_v745.aspx"
                                                               title="TH??NG B??O K???T QU??? PH??C KH???O K?? THI TUY???N SINH V??O L???P 10 N??M 2022">&bull;
                                                                TH??NG B??O K???T QU??? PH??C KH???O K?? THI TUY???N SINH V??O L???P 10
                                                                N??M 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thu-don-xet-tuyen-lop-khong-chuyen-nam-2022_v744.aspx"
                                                               title="TH??NG B??O V??? VI???C THU ????N X??T TUY???N L???P KH??NG CHUY??N N??M 2022">&bull;
                                                                TH??NG B??O V??? VI???C THU ????N X??T TUY???N L???P KH??NG CHUY??N N??M
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thu-khoa-lop-10-chuyen-su-pham-dat-gan-95-diem-moi-mon_v743.aspx"
                                                               title="Th??? khoa l???p 10 chuy??n S?? ph???m ?????t g???n 9,5 ??i???m m???i m??n">&bull;
                                                                Th??? khoa l???p 10 chuy??n S?? ph???m ?????t g???n 9,5 ??i???m m???i
                                                                m??n</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-tra-cuu-ket-qua-tuyen-sinh-vao-lop-10-nam-2022_v741.aspx"
                                                               title="Th??ng b??o tra c???u k???t qu??? tuy???n sinh v??o l???p 10 n??m 2022">&bull;
                                                                Th??ng b??o tra c???u k???t qu??? tuy???n sinh v??o l???p 10 n??m
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/diem-chuan-vao-lop-10-thpt-chuyen-su-pham-nam-2022_v742.aspx"
                                                               title="??i???m chu???n v??o l???p 10 THPT chuy??n S?? ph???m n??m 2022">&bull;
                                                                ??i???m chu???n v??o l???p 10 THPT chuy??n S?? ph???m n??m 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/viet-nam-gianh-3-huy-chuong-vang-olympic-tin-hoc-chau-a-thai-binh-duong_v740.aspx"
                                                               title="Vi???t Nam gi??nh 3 Huy ch????ng V??ng Olympic Tin h???c Ch??u ?? - Th??i B??nh D????ng">&bull;
                                                                Vi???t Nam gi??nh 3 Huy ch????ng V??ng Olympic Tin h???c Ch??u ??
                                                                - Th??i B??nh D????ng</a>
                                                        </li>

                                                        <li>
                                                            <a href="/bo-gddt-chuc-mung-thanh-tich-doi-tuyen-olympic-vat-ly-chau-a_v739.aspx"
                                                               title="B??? GD&??T ch??c m???ng th??nh t??ch ?????i tuy???n Olympic V???t l?? Ch??u ??">&bull;
                                                                B??? GD&??T ch??c m???ng th??nh t??ch ?????i tuy???n Olympic V???t l??
                                                                Ch??u ??</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hon-5400-thi-sinh-do-ve-thi-thpt-chuyen-su-pham_v738.aspx"
                                                               title="H??n 5.400 th?? sinh ????? v??? thi THPT chuy??n S?? ph???m">&bull;
                                                                H??n 5.400 th?? sinh ????? v??? thi THPT chuy??n S?? ph???m</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nhung-dieu-can-luu-y-truoc-ki-tuyen-sinh-vao-chuyen-sp-2022_v737.aspx"
                                                               title="NH???NG ??I???U C???N L??U ?? TR?????C K?? TUY???N SINH V??O CHUY??N SP 2022">&bull;
                                                                NH???NG ??I???U C???N L??U ?? TR?????C K?? TUY???N SINH V??O CHUY??N SP
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-tra-cuu-phong-thi-so-bao-danh-tuyen-sinh-vao-lop-10-nam-2022_v731.aspx"
                                                               title="TH??NG B??O TRA C???U PH??NG THI, S??? B??O DANH TUY???N SINH V??O L???P 10 N??M 2022">&bull;
                                                                TH??NG B??O TRA C???U PH??NG THI, S??? B??O DANH TUY???N SINH V??O
                                                                L???P 10 N??M 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nu-sinh-chuyen-su-pham-tiep-buoc-gia-dinh-trung-hoc-bong-nganh-stem-65-ty_v735.aspx"
                                                               title="N??? sinh chuy??n S?? ph???m ti???p b?????c gia ????nh tr??ng h???c b???ng ng??nh STEM 6,5 t???">&bull;
                                                                N??? sinh chuy??n S?? ph???m ti???p b?????c gia ????nh tr??ng h???c b???ng
                                                                ng??nh STEM 6,5 t???</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hoi-cho-am-thuc-soi-dong-va-y-nghia-cua-hoc-sinh-chuyen-su-pham_v732.aspx"
                                                               title="H???i ch??? ???m th???c s??i ?????ng v?? ?? ngh??a c???a h???c sinh Chuy??n S?? ph???m">&bull;
                                                                H???i ch??? ???m th???c s??i ?????ng v?? ?? ngh??a c???a h???c sinh Chuy??n
                                                                S?? ph???m</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-6-ve-viec-tra-cuu-sbd-ki-thi-thu-lan-3-vao-lop-10-chuyen-nam-2022_v729.aspx"
                                                               title="Th??ng b??o s??? 6: V??? vi???c tra c???u SBD k?? thi th??? l???n 3 v??o l???p 10 chuy??n n??m 2022">&bull;
                                                                Th??ng b??o s??? 6: V??? vi???c tra c???u SBD k?? thi th??? l???n 3 v??o
                                                                l???p 10 chuy??n n??m 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-chuyen-phat-nhanh-den-het-ngay-0852022_v728.aspx"
                                                               title="TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG CHUY???N PH??T NHANH ?????N H???T NG??Y 08/5/2022">&bull;
                                                                TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG CHUY???N PH??T
                                                                NHANH ?????N H???T NG??Y 08/5/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-chuyen-phat-nhanh-den-ngay-0552022_v727.aspx"
                                                               title="TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG CHUY???N PH??T NHANH ?????N NG??Y 05/5/2022">&bull;
                                                                TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG CHUY???N PH??T
                                                                NHANH ?????N NG??Y 05/5/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-phat-hanh-ho-so-tuyen-sinh-vao-lop-10-nam-2022_v718.aspx"
                                                               title="TH??NG B??O PH??T H??NH H??? S?? TUY???N SINH V??O L???P 10 N??M 2022">&bull;
                                                                TH??NG B??O PH??T H??NH H??? S?? TUY???N SINH V??O L???P 10 N??M
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-xet-tuyen-thang-vao-lop-10-thpt-chuyen-dhsp-nam-2022_v726.aspx"
                                                               title="TH??NG B??O K???T QU??? X??T TUY???N TH???NG V??O L???P 10 THPT CHUY??N ??HSP N??M 2022">&bull;
                                                                TH??NG B??O K???T QU??? X??T TUY???N TH???NG V??O L???P 10 THPT CHUY??N
                                                                ??HSP N??M 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-buu-chinh-den-ngay-2142022_v724.aspx"
                                                               title="TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG B??U CH??NH ?????N NG??Y 21/4/2022">&bull;
                                                                TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG B??U CH??NH ?????N
                                                                NG??Y 21/4/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-4-ve-viec-tra-cuu-sbd-ki-thi-thu-lan-2-va-thong-bao-to-chuc-thi-thu-lan-3-vao-lop-10-chuyen-nam-2022_v723.aspx"
                                                               title="Th??ng b??o s??? 4: V??? vi???c tra c???u SBD k?? thi th??? l???n 2  v?? th??ng b??o t??? ch???c thi th??? l???n 3 v??o l???p 10 chuy??n n??m 2022">&bull;
                                                                Th??ng b??o s??? 4: V??? vi???c tra c???u SBD k?? thi th??? l???n 2 v??
                                                                th??ng b??o t??? ch???c thi th??? l???n 3 v??o l???p 10 chuy??n n??m
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-3-ket-qua-thi-thu-vao-lop-10-chuyen-lan-1-va-to-chuc-thi-thu-lan-2-nam-2022_v721.aspx"
                                                               title="Th??ng b??o s??? 3: K???t qu??? thi th??? v??o l???p 10 chuy??n l???n 1 v?? t??? ch???c thi th??? l???n 2 n??m 2022">&bull;
                                                                Th??ng b??o s??? 3: K???t qu??? thi th??? v??o l???p 10 chuy??n l???n 1
                                                                v?? t??? ch???c thi th??? l???n 2 n??m 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-ki-thi-thu-vao-lop-10-chuyen-nam-2022-lan-1_v716.aspx"
                                                               title="TH??NG B??O V??? K?? THI TH??? V??O L???P 10 CHUY??N N??M 2022 - L???N 1">&bull;
                                                                TH??NG B??O V??? K?? THI TH??? V??O L???P 10 CHUY??N N??M 2022 - L???N
                                                                1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/toa-dam-van-hoc-lit-mnemosyme-???-suc-song-cua-than-thoai_v720.aspx"
                                                               title="T???a ????m v??n h???c LiT Mn??mosyme ??? S???c s???ng c???a th???n tho???i">&bull;
                                                                T???a ????m v??n h???c LiT Mn??mosyme ??? S???c s???ng c???a th???n
                                                                tho???i</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-so-bao-danh-phong-thi-thu-vao-lop-10-lan-1_v719.aspx"
                                                               title="TRA C???U S??? B??O DANH, PH??NG THI TH??? V??O L???P 10 L???N 1">&bull;
                                                                TRA C???U S??? B??O DANH, PH??NG THI TH??? V??O L???P 10 L???N 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-1-ve-ki-thi-thu-vao-lop-10-chuyen-nam-2022-lan-1_v717.aspx"
                                                               title="TH??NG B??O S??? 1 V??? K?? THI TH??? V??O L???P 10 CHUY??N N??M 2022 - L???N 1">&bull;
                                                                TH??NG B??O S??? 1 V??? K?? THI TH??? V??O L???P 10 CHUY??N N??M 2022
                                                                - L???N 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-ki-thi-tuyen-sinh-vao-lop-10-chuyen-dhsp-nam-hoc-2022-2023_v715.aspx"
                                                               title="TH??NG B??O V??? K?? THI TUY???N SINH V??O L???P 10 CHUY??N ??HSP N??M H???C 2022- 2023">&bull;
                                                                TH??NG B??O V??? K?? THI TUY???N SINH V??O L???P 10 CHUY??N ??HSP
                                                                N??M H???C 2022- 2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-hoan-tra-le-phi-du-thi-tuyen-sinh-vao-lop-10-nam-2021-dot-2-lan-2_v714.aspx"
                                                               title="Th??ng b??o v??? vi???c ho??n tr??? l??? ph?? d??? thi tuy???n sinh v??o l???p 10 n??m 2021 ?????t 2 - L???n 2">&bull;
                                                                Th??ng b??o v??? vi???c ho??n tr??? l??? ph?? d??? thi tuy???n sinh v??o
                                                                l???p 10 n??m 2021 ?????t 2 - L???n 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-cuoc-thi-thiet-ke-logo-truong-thpt-chuyen-dhsp-le-ki-niem-55-nam-thanh-lap-don-vi_v713.aspx"
                                                               title="Th??ng b??o: K???t qu??? cu???c thi Thi???t k??? Logo tr?????ng THPT Chuy??n ??HSP & L??? k??? ni???m 55 n??m th??nh l???p ????n v???">&bull;
                                                                Th??ng b??o: K???t qu??? cu???c thi Thi???t k??? Logo tr?????ng THPT
                                                                Chuy??n ??HSP & L??? k??? ni???m 55 n??m th??nh l???p ????n v???</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-hoan-tra-le-phi-thi-tuyen-sinh-vao-lop-10-truong-thpt-chuyen-dhsp-nam-2021-dot-2_v712.aspx"
                                                               title="Th??ng b??o v??? vi???c ho??n tr??? l??? ph?? thi tuy???n sinh v??o l???p 10  Tr?????ng THPT Chuy??n ??HSP n??m 2021-?????t 2">&bull;
                                                                Th??ng b??o v??? vi???c ho??n tr??? l??? ph?? thi tuy???n sinh v??o l???p
                                                                10 Tr?????ng THPT Chuy??n ??HSP n??m 2021-?????t 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="/45-hoc-sinh-cung-lop-o-ha-noi-duoc-tuyen-thang-dai-hoc-top-dau-cua-viet-nam_v705.aspx"
                                                               title="45 h???c sinh c??ng l???p ??? H?? N???i ???????c tuy???n th???ng ?????i h???c top ?????u c???a Vi???t Nam">&bull;
                                                                45 h???c sinh c??ng l???p ??? H?? N???i ???????c tuy???n th???ng ?????i h???c
                                                                top ?????u c???a Vi???t Nam</a>
                                                        </li>

                                                        <li>
                                                            <a href="/2-thi-sinh-duong-len-dinh-olympia-nam-20-???khong-hen???-ma-cung-lua-chon-ngo-ngang_v704.aspx"
                                                               title="2 th?? sinh ???????ng l??n ?????nh Olympia n??m 20 ???kh??ng h???n??? m?? c??ng 'l???a ch???n' ng??? ng??ng">&bull;
                                                                2 th?? sinh ???????ng l??n ?????nh Olympia n??m 20 ???kh??ng h???n??? m??
                                                                c??ng 'l???a ch???n' ng??? ng??ng</a>
                                                        </li>

                                                        <li>
                                                            <a href="/4-guong-mat-chung-ket-olympia-2020-nguoi-chuan-bi-di-du-hoc-uc-nguoi-ve-chung-mot-truong_v703.aspx"
                                                               title="4 g????ng m???t Chung k???t Olympia 2020: Ng?????i chu???n b??? ??i du h???c ??c, ng?????i v??? chung m???t tr?????ng">&bull;
                                                                4 g????ng m???t Chung k???t Olympia 2020: Ng?????i chu???n b??? ??i du
                                                                h???c ??c, ng?????i v??? chung m???t tr?????ng</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ket-qua-phuc-khao-ki-thi-tuyen-sinh-vao-lop-10-nam-2021-dot-1_v701.aspx"
                                                               title="K???T QU??? PH??C KH???O K?? THI TUY???N SINH V??O L???P 10 N??M 2021 - ?????T 1">&bull;
                                                                K???T QU??? PH??C KH???O K?? THI TUY???N SINH V??O L???P 10 N??M 2021
                                                                - ?????T 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ket-qua-xet-tuyen-he-khong-chuyen-mau-khai-bien-nhan-ho-so-va-khai-bao-y-te-online_v700.aspx"
                                                               title="K???t qu??? x??t tuy???n h??? kh??ng Chuy??n, M???u khai bi??n nh???n h??? s?? v?? Khai b??o y t??? Online">&bull;
                                                                K???t qu??? x??t tuy???n h??? kh??ng Chuy??n, M???u khai bi??n nh???n h???
                                                                s?? v?? Khai b??o y t??? Online</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hanh-trinh-tiep-lua-niem-dam-me-tin-hoc-cho-cac-the-he-hoc-sinh-chuyen-su-pham_v621.aspx"
                                                               title="H??nh tr??nh ti???p l???a ni???m ??am m?? tin h???c cho c??c th??? h??? h???c sinh Chuy??n S?? Ph???m">&bull;
                                                                H??nh tr??nh ti???p l???a ni???m ??am m?? tin h???c cho c??c th??? h???
                                                                h???c sinh Chuy??n S?? Ph???m</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-lich-nhap-hoc-cua-hoc-sinh-trung-tuyen-vao-lop-10-nam-2021_v699.aspx"
                                                               title="Th??ng b??o l???ch nh???p h???c c???a h???c sinh tr??ng tuy???n v??o l???p 10 n??m 2021">&bull;
                                                                Th??ng b??o l???ch nh???p h???c c???a h???c sinh tr??ng tuy???n v??o l???p
                                                                10 n??m 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/7-thu-khoa-trong-ky-thi-tuyen-sinh-vao-lop-10-thpt-chuyen-dh-su-pham-nam-2021_v698.aspx"
                                                               title="7 th??? khoa trong k??? thi tuy???n sinh v??o l???p 10 THPT Chuy??n ??H S?? ph???m n??m 2021">&bull;
                                                                7 th??? khoa trong k??? thi tuy???n sinh v??o l???p 10 THPT
                                                                Chuy??n ??H S?? ph???m n??m 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-ket-qua-thi-tuyen-sinh-vao-lop-10-chuyen-dhsp-ha-noi-nam-2021_v697.aspx"
                                                               title="Tra c???u k???t qu??? thi tuy???n sinh v??o l???p 10 Chuy??n ??HSP H?? N???i n??m 2021">&bull;
                                                                Tra c???u k???t qu??? thi tuy???n sinh v??o l???p 10 Chuy??n ??HSP H??
                                                                N???i n??m 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hoc-sinh-truong-thpt-chuyen-dhsp-gianh-huy-chuong-vang-intarg-2021_v696.aspx"
                                                               title="H???c sinh tr?????ng THPT Chuy??n ??HSP gi??nh Huy ch????ng v??ng INTARG 2021">&bull;
                                                                H???c sinh tr?????ng THPT Chuy??n ??HSP gi??nh Huy ch????ng v??ng
                                                                INTARG 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/truong-thpt-chuyen-dhsp-ha-noi-ket-nap-dang-cho-02-doan-vien-xuat-sac_v695.aspx"
                                                               title="Tr?????ng THPT Chuy??n ??HSP H?? N???i k???t n???p ?????ng cho 02 ??o??n vi??n xu???t s???c">&bull;
                                                                Tr?????ng THPT Chuy??n ??HSP H?? N???i k???t n???p ?????ng cho 02 ??o??n
                                                                vi??n xu???t s???c</a>
                                                        </li>

                                                        <li>
                                                            <a href="/loi-nhac-danh-cho-cac-thi-sinh-du-thi-vao-truong-thpt-chuyen-dhsp-ngay-176_v694.aspx"
                                                               title="L???i nh???c d??nh cho c??c th?? sinh d??? thi v??o Tr?????ng THPT Chuy??n ??HSP ng??y 17/6">&bull;
                                                                L???i nh???c d??nh cho c??c th?? sinh d??? thi v??o Tr?????ng THPT
                                                                Chuy??n ??HSP ng??y 17/6</a>
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
                                                    <span id="ctl00_ContentPlaceHolder1_r2_LabelDangQuanTam">B??i vi???t ????ng quan t??m</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm22">

                                                    <ul id="items">

                                                        <li>
                                                            <a href="/thong-bao-lich-tap-trung-dau-nam-hoc-2022-2023_v754.aspx"
                                                               title="TH??NG B??O L???CH T???P TRUNG ?????U N??M H???C 2022-2023">&bull;
                                                                TH??NG B??O L???CH T???P TRUNG ?????U N??M H???C 2022-2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/cac-hoc-sinh-vn-dat-diem-tuyet-doi-tai-imo-olympic-toan-hoc-quoc-te_v753.aspx"
                                                               title="C??c h???c sinh VN ?????t ??i???m tuy???t ?????i t???i IMO (Olympic To??n h???c Qu???c t???)">&bull;
                                                                C??c h???c sinh VN ?????t ??i???m tuy???t ?????i t???i IMO (Olympic To??n
                                                                h???c Qu???c t???)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-dang-ki-tiem-vac-xin-ngua-covid-19-mui-3-cho-hoc-sinh-k10-nam-hoc-2022-2023_v752.aspx"
                                                               title="Th??ng b??o v??? ????ng k?? ti??m v???c xin ng???a Covid-19 m??i 3 cho h???c sinh K10 n??m h???c 2022-2023">&bull;
                                                                Th??ng b??o v??? ????ng k?? ti??m v???c xin ng???a Covid-19 m??i 3
                                                                cho h???c sinh K10 n??m h???c 2022-2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-khan-ve-viec-cung-cap-thong-tin-tai-khoan-de-phuc-vu-cong-tac-tuyen-sinh-nam-2022_v750.aspx"
                                                               title="Th??ng b??o kh???n v??? vi???c cung c???p th??ng tin t??i kho???n ????? ph???c v??? c??ng t??c tuy???n sinh n??m 2022">&bull;
                                                                Th??ng b??o kh???n v??? vi???c cung c???p th??ng tin t??i kho???n ?????
                                                                ph???c v??? c??ng t??c tuy???n sinh n??m 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-2-ve-viec-ha-diem-chuan-va-nhap-hoc-bo-sung-vao-lop-10-he-khong-chuyen_v749.aspx"
                                                               title="Th??ng b??o s??? 2 v??? vi???c h??? ??i???m chu???n v?? nh???p h???c b??? sung v??o l???p 10 h??? kh??ng chuy??n">&bull;
                                                                Th??ng b??o s??? 2 v??? vi???c h??? ??i???m chu???n v?? nh???p h???c b??? sung
                                                                v??o l???p 10 h??? kh??ng chuy??n</a>
                                                        </li>

                                                        <li>
                                                            <a href="/chuyen-su-pham-chao-don-anh-tai-k56_v748.aspx"
                                                               title="Chuy??n S?? Ph???m - Ch??o ????n anh t??i K56">&bull;
                                                                Chuy??n S?? Ph???m - Ch??o ????n anh t??i K56</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-diem-chuan-xet-khong-chuyen-va-lich-nhap-hoc_v746.aspx"
                                                               title="TB ??I???M CHU???N X??T KH??NG CHUY??N V?? L???CH NH???P H???C">&bull;
                                                                TB ??I???M CHU???N X??T KH??NG CHUY??N V?? L???CH NH???P H???C</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-phuc-khao-ki-thi-tuyen-sinh-vao-lop-10-nam-2022_v745.aspx"
                                                               title="TH??NG B??O K???T QU??? PH??C KH???O K?? THI TUY???N SINH V??O L???P 10 N??M 2022">&bull;
                                                                TH??NG B??O K???T QU??? PH??C KH???O K?? THI TUY???N SINH V??O L???P 10
                                                                N??M 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thu-don-xet-tuyen-lop-khong-chuyen-nam-2022_v744.aspx"
                                                               title="TH??NG B??O V??? VI???C THU ????N X??T TUY???N L???P KH??NG CHUY??N N??M 2022">&bull;
                                                                TH??NG B??O V??? VI???C THU ????N X??T TUY???N L???P KH??NG CHUY??N N??M
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-tra-cuu-ket-qua-tuyen-sinh-vao-lop-10-nam-2022_v741.aspx"
                                                               title="Th??ng b??o tra c???u k???t qu??? tuy???n sinh v??o l???p 10 n??m 2022">&bull;
                                                                Th??ng b??o tra c???u k???t qu??? tuy???n sinh v??o l???p 10 n??m
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-tra-cuu-phong-thi-so-bao-danh-tuyen-sinh-vao-lop-10-nam-2022_v731.aspx"
                                                               title="TH??NG B??O TRA C???U PH??NG THI, S??? B??O DANH TUY???N SINH V??O L???P 10 N??M 2022">&bull;
                                                                TH??NG B??O TRA C???U PH??NG THI, S??? B??O DANH TUY???N SINH V??O
                                                                L???P 10 N??M 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-6-ve-viec-tra-cuu-sbd-ki-thi-thu-lan-3-vao-lop-10-chuyen-nam-2022_v729.aspx"
                                                               title="Th??ng b??o s??? 6: V??? vi???c tra c???u SBD k?? thi th??? l???n 3 v??o l???p 10 chuy??n n??m 2022">&bull;
                                                                Th??ng b??o s??? 6: V??? vi???c tra c???u SBD k?? thi th??? l???n 3 v??o
                                                                l???p 10 chuy??n n??m 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-chuyen-phat-nhanh-den-het-ngay-0852022_v728.aspx"
                                                               title="TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG CHUY???N PH??T NHANH ?????N H???T NG??Y 08/5/2022">&bull;
                                                                TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG CHUY???N PH??T
                                                                NHANH ?????N H???T NG??Y 08/5/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-chuyen-phat-nhanh-den-ngay-0552022_v727.aspx"
                                                               title="TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG CHUY???N PH??T NHANH ?????N NG??Y 05/5/2022">&bull;
                                                                TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG CHUY???N PH??T
                                                                NHANH ?????N NG??Y 05/5/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-phat-hanh-ho-so-tuyen-sinh-vao-lop-10-nam-2022_v718.aspx"
                                                               title="TH??NG B??O PH??T H??NH H??? S?? TUY???N SINH V??O L???P 10 N??M 2022">&bull;
                                                                TH??NG B??O PH??T H??NH H??? S?? TUY???N SINH V??O L???P 10 N??M
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-xet-tuyen-thang-vao-lop-10-thpt-chuyen-dhsp-nam-2022_v726.aspx"
                                                               title="TH??NG B??O K???T QU??? X??T TUY???N TH???NG V??O L???P 10 THPT CHUY??N ??HSP N??M 2022">&bull;
                                                                TH??NG B??O K???T QU??? X??T TUY???N TH???NG V??O L???P 10 THPT CHUY??N
                                                                ??HSP N??M 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-danh-sach-thi-sinh-nop-ho-so-qua-duong-buu-chinh-den-ngay-2142022_v724.aspx"
                                                               title="TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG B??U CH??NH ?????N NG??Y 21/4/2022">&bull;
                                                                TB DANH S??CH TH?? SINH N???P H??? S?? QUA ???????NG B??U CH??NH ?????N
                                                                NG??Y 21/4/2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-4-ve-viec-tra-cuu-sbd-ki-thi-thu-lan-2-va-thong-bao-to-chuc-thi-thu-lan-3-vao-lop-10-chuyen-nam-2022_v723.aspx"
                                                               title="Th??ng b??o s??? 4: V??? vi???c tra c???u SBD k?? thi th??? l???n 2  v?? th??ng b??o t??? ch???c thi th??? l???n 3 v??o l???p 10 chuy??n n??m 2022">&bull;
                                                                Th??ng b??o s??? 4: V??? vi???c tra c???u SBD k?? thi th??? l???n 2 v??
                                                                th??ng b??o t??? ch???c thi th??? l???n 3 v??o l???p 10 chuy??n n??m
                                                                2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-3-ket-qua-thi-thu-vao-lop-10-chuyen-lan-1-va-to-chuc-thi-thu-lan-2-nam-2022_v721.aspx"
                                                               title="Th??ng b??o s??? 3: K???t qu??? thi th??? v??o l???p 10 chuy??n l???n 1 v?? t??? ch???c thi th??? l???n 2 n??m 2022">&bull;
                                                                Th??ng b??o s??? 3: K???t qu??? thi th??? v??o l???p 10 chuy??n l???n 1
                                                                v?? t??? ch???c thi th??? l???n 2 n??m 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-ki-thi-thu-vao-lop-10-chuyen-nam-2022-lan-1_v716.aspx"
                                                               title="TH??NG B??O V??? K?? THI TH??? V??O L???P 10 CHUY??N N??M 2022 - L???N 1">&bull;
                                                                TH??NG B??O V??? K?? THI TH??? V??O L???P 10 CHUY??N N??M 2022 - L???N
                                                                1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-so-bao-danh-phong-thi-thu-vao-lop-10-lan-1_v719.aspx"
                                                               title="TRA C???U S??? B??O DANH, PH??NG THI TH??? V??O L???P 10 L???N 1">&bull;
                                                                TRA C???U S??? B??O DANH, PH??NG THI TH??? V??O L???P 10 L???N 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-1-ve-ki-thi-thu-vao-lop-10-chuyen-nam-2022-lan-1_v717.aspx"
                                                               title="TH??NG B??O S??? 1 V??? K?? THI TH??? V??O L???P 10 CHUY??N N??M 2022 - L???N 1">&bull;
                                                                TH??NG B??O S??? 1 V??? K?? THI TH??? V??O L???P 10 CHUY??N N??M 2022
                                                                - L???N 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-ki-thi-tuyen-sinh-vao-lop-10-chuyen-dhsp-nam-hoc-2022-2023_v715.aspx"
                                                               title="TH??NG B??O V??? K?? THI TUY???N SINH V??O L???P 10 CHUY??N ??HSP N??M H???C 2022- 2023">&bull;
                                                                TH??NG B??O V??? K?? THI TUY???N SINH V??O L???P 10 CHUY??N ??HSP
                                                                N??M H???C 2022- 2023</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-hoan-tra-le-phi-du-thi-tuyen-sinh-vao-lop-10-nam-2021-dot-2-lan-2_v714.aspx"
                                                               title="Th??ng b??o v??? vi???c ho??n tr??? l??? ph?? d??? thi tuy???n sinh v??o l???p 10 n??m 2021 ?????t 2 - L???n 2">&bull;
                                                                Th??ng b??o v??? vi???c ho??n tr??? l??? ph?? d??? thi tuy???n sinh v??o
                                                                l???p 10 n??m 2021 ?????t 2 - L???n 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-hoan-tra-le-phi-thi-tuyen-sinh-vao-lop-10-truong-thpt-chuyen-dhsp-nam-2021-dot-2_v712.aspx"
                                                               title="Th??ng b??o v??? vi???c ho??n tr??? l??? ph?? thi tuy???n sinh v??o l???p 10  Tr?????ng THPT Chuy??n ??HSP n??m 2021-?????t 2">&bull;
                                                                Th??ng b??o v??? vi???c ho??n tr??? l??? ph?? thi tuy???n sinh v??o l???p
                                                                10 Tr?????ng THPT Chuy??n ??HSP n??m 2021-?????t 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ket-qua-phuc-khao-ki-thi-tuyen-sinh-vao-lop-10-nam-2021-dot-1_v701.aspx"
                                                               title="K???T QU??? PH??C KH???O K?? THI TUY???N SINH V??O L???P 10 N??M 2021 - ?????T 1">&bull;
                                                                K???T QU??? PH??C KH???O K?? THI TUY???N SINH V??O L???P 10 N??M 2021
                                                                - ?????T 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-lich-nhap-hoc-cua-hoc-sinh-trung-tuyen-vao-lop-10-nam-2021_v699.aspx"
                                                               title="Th??ng b??o l???ch nh???p h???c c???a h???c sinh tr??ng tuy???n v??o l???p 10 n??m 2021">&bull;
                                                                Th??ng b??o l???ch nh???p h???c c???a h???c sinh tr??ng tuy???n v??o l???p
                                                                10 n??m 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-so-2-ve-lich-thi-chinh-thuc-ki-thi-tuyen-sinh-vao-lop-10-nam-hoc-2021-2022_v687.aspx"
                                                               title="Th??ng b??o s??? 2 v??? l???ch thi ch??nh th???c k?? thi tuy???n sinh v??o l???p 10 n??m h???c 2021-2022">&bull;
                                                                Th??ng b??o s??? 2 v??? l???ch thi ch??nh th???c k?? thi tuy???n sinh
                                                                v??o l???p 10 n??m h???c 2021-2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-tam-hoan-to-chuc-ki-thi-tuyen-sinh-vao-lop-10-nam-hoc-2021-2022_v681.aspx"
                                                               title="Th??ng b??o v??? vi???c t???m ho??n t??? ch???c k?? thi tuy???n sinh v??o l???p 10 n??m h???c 2021-2022">&bull;
                                                                Th??ng b??o v??? vi???c t???m ho??n t??? ch???c k?? thi tuy???n sinh v??o
                                                                l???p 10 n??m h???c 2021-2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-ho-so-truc-tuyen-qua-duong-buu-dien_v679.aspx"
                                                               title="Tra c???u h??? s?? tr???c tuy???n (QUA ???????NG B??U ??I???N)">&bull;
                                                                Tra c???u h??? s?? tr???c tuy???n (QUA ???????NG B??U ??I???N)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thu-ho-so-vao-lop-10-nam-hoc-2021-2022_v677.aspx"
                                                               title="Th??ng b??o v??? vi???c thu h??? s?? v??o l???p 10 n??m h???c 2021-2022">&bull;
                                                                Th??ng b??o v??? vi???c thu h??? s?? v??o l???p 10 n??m h???c
                                                                2021-2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-danh-sach-ho-so-nop-truc-tuyen-chuyen-khoan-qua-duong-buu-dien_v676.aspx"
                                                               title="Tra c???u danh s??ch h??? s?? n???p tr???c tuy???n (Chuy???n kho???n qua ???????ng b??u ??i???n)">&bull;
                                                                Tra c???u danh s??ch h??? s?? n???p tr???c tuy???n (Chuy???n kho???n qua
                                                                ???????ng b??u ??i???n)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-xet-tuyen-tha??ng-vao-lop-10-nam-ho??c-2021-2022_v675.aspx"
                                                               title="Th??ng b??o k???t qu??? x??t tuy???n th????ng v??o l???p 10 n??m ho??c 2021 - 2022">&bull;
                                                                Th??ng b??o k???t qu??? x??t tuy???n th????ng v??o l???p 10 n??m ho??c
                                                                2021 - 2022</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-tuyen-sinh-vao-lop-10-truong-thpt-chuyen-dhsp-nam-2021_v580.aspx"
                                                               title="Th??ng b??o v??? vi???c tuy???n sinh v??o l???p 10 tr?????ng THPT Chuy??n ??HSP n??m 2021">&bull;
                                                                Th??ng b??o v??? vi???c tuy???n sinh v??o l???p 10 tr?????ng THPT
                                                                Chuy??n ??HSP n??m 2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/danh-sach-thi-sinh-nop-ho-so-truc-tuyen-qua-duong-buu-dien_v669.aspx"
                                                               title="Danh s??ch th?? sinh n???p h??? s?? tr???c tuy???n (qua ???????ng b??u ??i???n)">&bull;
                                                                Danh s??ch th?? sinh n???p h??? s?? tr???c tuy???n (qua ???????ng b??u
                                                                ??i???n)</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nam-sinh-chuyen-su-pham-gianh-ve-cuoi-cung-vao-chung-ket-olympia-2020_v646.aspx"
                                                               title="Nam sinh Chuy??n S?? Ph???m gi??nh v?? cu???i c??ng v??o chung k???t Olympia 2020">&bull;
                                                                Nam sinh Chuy??n S?? Ph???m gi??nh v?? cu???i c??ng v??o chung k???t
                                                                Olympia 2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/nu-sinh-chuyen-anh-truong-chuyen-su-pham-la-thu-khoa-khoi-d-toan-quoc_v642.aspx"
                                                               title="N??? sinh chuy??n Anh tr?????ng Chuy??n S?? Ph???m l?? th??? khoa kh???i D to??n qu???c">&bull;
                                                                N??? sinh chuy??n Anh tr?????ng Chuy??n S?? Ph???m l?? th??? khoa
                                                                kh???i D to??n qu???c</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-lich-tap-trung-hoc-sinh-dau-nam-hoc-2020-2021_v643.aspx"
                                                               title="Th??ng b??o l???ch t???p trung h???c sinh ?????u n??m h???c 2020 - 2021">&bull;
                                                                Th??ng b??o l???ch t???p trung h???c sinh ?????u n??m h???c 2020 -
                                                                2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/hoc-sinh-truong-chuyen-su-pham-dat-huy-chuong-bac-tai-olympic-tin-hoc-chau-a-thai-binh-duong-2020_v641.aspx"
                                                               title="H???c sinh tr?????ng Chuy??n S?? ph???m ?????t Huy ch????ng B???c t???i Olympic Tin h???c Ch??u ?? - Th??i B??nh D????ng 2020">&bull;
                                                                H???c sinh tr?????ng Chuy??n S?? ph???m ?????t Huy ch????ng B???c t???i
                                                                Olympic Tin h???c Ch??u ?? - Th??i B??nh D????ng 2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-kq-xet-tuyen-va-nhap-hoc-cua-he-khong-chuyen-nam-hoc-2020-2021_v638.aspx"
                                                               title="Th??ng b??o KQ x??t tuy???n v?? nh???p h???c c???a h??? kh??ng chuy??n n??m h???c 2020-2021">&bull;
                                                                Th??ng b??o KQ x??t tuy???n v?? nh???p h???c c???a h??? kh??ng chuy??n
                                                                n??m h???c 2020-2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ket-qua-thi-tuyen-sinh-vao-lop-10-nam-hoc-2020-2021_v632.aspx"
                                                               title="Th??ng b??o k???t qu??? thi tuy???n sinh v??o l???p 10 n??m h???c 2020-2021">&bull;
                                                                Th??ng b??o k???t qu??? thi tuy???n sinh v??o l???p 10 n??m h???c
                                                                2020-2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/dap-an-mon-toan-va-dinh-chinh-dap-an-mon-tieng-anh-thi-thu-tot-nghiep-lan-2-ngay-05072020_v628.aspx"
                                                               title="????p ??n m??n to??n v?? ????nh ch??nh ????p ??n m??n ti???ng anh thi th??? t???t nghi???p l???n 2, ng??y 05/07/2020">&bull;
                                                                ????p ??n m??n to??n v?? ????nh ch??nh ????p ??n m??n ti???ng anh thi
                                                                th??? t???t nghi???p l???n 2, ng??y 05/07/2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tra-cuu-thong-tin-phong-thi-so-bao-danh-tuyen-sinh-thpt-chuyen-dhsp-nam-2020_v616.aspx"
                                                               title="Tra c???u Th??ng tin ph??ng thi, s??? b??o danh tuy???n sinh THPT Chuy??n ??HSP n??m 2020">&bull;
                                                                Tra c???u Th??ng tin ph??ng thi, s??? b??o danh tuy???n sinh THPT
                                                                Chuy??n ??HSP n??m 2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thi-thu-tot-nghiep-pho-thong-danh-cho-hoc-sinh-lop-12-nam-hoc-2019-2020_v619.aspx"
                                                               title="Th??ng b??o v??? vi???c thi th??? T???t nghi???p ph??? th??ng d??nh cho h???c sinh l???p 12 n??m h???c 2019 - 2020">&bull;
                                                                Th??ng b??o v??? vi???c thi th??? T???t nghi???p ph??? th??ng d??nh cho
                                                                h???c sinh l???p 12 n??m h???c 2019 - 2020</a>
                                                        </li>

                                                        <li>
                                                            <a href="/thong-bao-ve-viec-thu-ho-so-tuyen-sinh-vao-lop-10-nam-hoc-2020-2021_v609.aspx"
                                                               title="Th??ng b??o v??? vi???c thu h??? s?? tuy???n sinh v??o l???p 10 n??m h???c 2020-2021">&bull;
                                                                Th??ng b??o v??? vi???c thu h??? s?? tuy???n sinh v??o l???p 10 n??m
                                                                h???c 2020-2021</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ha-noi-kien-nghi-chinh-phu-thong-nhat-rut-ngan-chuong-trinh-giao-duc_v598.aspx"
                                                               title="H?? N???i ki???n ngh??? Ch??nh ph??? th???ng nh???t r??t ng???n ch????ng tr??nh gi??o d???c">&bull;
                                                                H?? N???i ki???n ngh??? Ch??nh ph??? th???ng nh???t r??t ng???n ch????ng
                                                                tr??nh gi??o d???c</a>
                                                        </li>

                                                        <li>
                                                            <a href="/ngay-hoi-sach-khuyen-khich-phu-huynh-huong-dan-con-doc-sach-dien-tu_v597.aspx"
                                                               title="Ng??y h???i s??ch: Khuy???n kh??ch ph??? huynh h?????ng d???n con ?????c s??ch ??i???n t???">&bull;
                                                                Ng??y h???i s??ch: Khuy???n kh??ch ph??? huynh h?????ng d???n con ?????c
                                                                s??ch ??i???n t???</a>
                                                        </li>

                                                        <li>
                                                            <a href="/van-thi-thpt-quoc-gia-vao-thang-8-neu-hoc-sinh-di-hoc-tro-lai-truoc-156_v596.aspx"
                                                               title="V???n thi THPT qu???c gia v??o th??ng 8 n???u h???c sinh ??i h???c tr??? l???i tr?????c 15/6">&bull;
                                                                V???n thi THPT qu???c gia v??o th??ng 8 n???u h???c sinh ??i h???c
                                                                tr??? l???i tr?????c 15/6</a>
                                                        </li>

                                                        <li>
                                                            <a href="/tb-ket-qua-phuc-khao-va-nhap-hoc-sau-phuc-khao_v571.aspx"
                                                               title="TB K???T QU??? PH??C KH???O V?? NH???P H???C SAU PH??C KH???O">&bull;
                                                                TB K???T QU??? PH??C KH???O V?? NH???P H???C SAU PH??C KH???O</a>
                                                        </li>

                                                        <li>
                                                            <a href="/lich-nhap-hoc-cua-hoc-sinh-trung-tuyen-vao-lop-10-he-chuyen-nam-hoc-2019-2020_v570.aspx"
                                                               title="L???ch nh???p h???c c???a h???c sinh tr??ng tuy???n v??o l???p 10 h??? chuy??n n??m h???c 2019 - 2020">&bull;
                                                                L???ch nh???p h???c c???a h???c sinh tr??ng tuy???n v??o l???p 10 h???
                                                                chuy??n n??m h???c 2019 - 2020</a>
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
                                                    <span id="ctl00_ContentPlaceHolder1_r2_LabelLienKet">Li??n k???t website</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tm22">

                                                    <ul class="link">

                                                        <li>
                                                            <a href="http://www.chuyensupham.net" target="_blank"
                                                               title="http://www.chuyensupham.net">&bull; H???i C???u h???c
                                                                sinh tr?????ng THPT Chuy??n ??HSP</a>
                                                        </li>

                                                        <li>
                                                            <a href="http://www.hanoi.edu.vn" target="_blank"
                                                               title="http://www.hanoi.edu.vn">&bull; S??? gi??o d???c v?? ????o
                                                                t???o H?? N???i</a>
                                                        </li>

                                                        <li>
                                                            <a href="http://www.hnue.edu.vn" target="_blank"
                                                               title="http://www.hnue.edu.vn">&bull; ?????i h???c s?? ph???m H??
                                                                N???i</a>
                                                        </li>

                                                        <li>
                                                            <a href="http://www.moet.gov.vn" target="_blank"
                                                               title="http://www.moet.gov.vn">&bull; B??? gi??o d???c & ????o
                                                                t???o</a>
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
<li class="End"><a href="/" title="Trang ch???">Trang ch???</a></li>
<li><a href="/gioi-thieu_g0.aspx" title="Gi???i thi???u">Gi???i thi???u</a></li>
<li><a href="/lich-tuan.aspx" title="L???ch tu???n">L???ch tu???n</a></li>
<li><a href="/tai-lieu.aspx" title="T??i li???u tham kh???o">T??i li???u tham kh???o</a></li>
<li><a href="/thoi-khoa-bieu.aspx" title="Th???i kh??a bi???u">Th???i kh??a bi???u</a></li>
<li><a href="/phong-thi.aspx" title="Tra c???u ph??ng thi">Tra c???u ph??ng thi</a></li>
<li><a href="/diem-thi.aspx" title="Tra c???u ??i???m thi">Tra c???u ??i???m thi</a></li>
<li><a href="/lien-he.aspx" title="Li??n h???">Li??n h???</a></li>
<ul></div>
</span>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <table border="0" cellpadding="0" cellspacing="0" width="996px">
                        <tr>
                            <td style="padding:35px 10px 0 138px; width:50%; vertical-align:top;">
                                <a href="../admin/">????ng nh???p</a>
                                |
                                <a href="/sitemap.aspx">Site map</a>
                                |
                                <a href="mailto:suphamchuyen@gmail.com">G??p ??</a>
                                |
                                <a href="#">L??n ?????u</a>
                                <br/>

                                <table border="0" cellpadding="0" cellspacing="2" width="100%">
                                    <tr>
                                        <td style="padding-top:15px;">


                                            <span id="ctl00_h_LabelLuotHomNay">H??m nay: 805 l?????t | T???ng truy c???p: 14515093 l?????t</span>
                                        </td>
                                    </tr>


                                </table>


                            </td>
                            <td style="padding:25px 10px 0 50px; width:50%; vertical-align:top;">
                            <span id="ctl00_LabelFoot"><strong>Tr?????ng THPT Chuy&ecirc;n ?????i h???c S?? ph???m<br/>
</strong><br/>
?????a ch???: Nh&agrave; D - 136 Xu&acirc;n Thu??? - C???u Gi???y - H&agrave; N???i.<br/>
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
