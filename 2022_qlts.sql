-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2023 lúc 08:05 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `2022_qlts`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `sbd` varchar(5) NOT NULL,
  `diem_toan` float DEFAULT NULL,
  `diem_van` float DEFAULT NULL,
  `diem_chuyen` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`sbd`, `diem_toan`, `diem_van`, `diem_chuyen`) VALUES
('0001', 1, 1, 8),
('0002', 1, 2, 8.8),
('0003', 2, 3, 6.2),
('0004', 8, 8, 7.7),
('0005', 2, 10, 6.7),
('0006', 8.8, 9, 9),
('0007', 6.2, 8, 10),
('0008', 7.6, 8.8, 10),
('0009', 9.2, 6.5, 5.23),
('0010', 6.8, 6.2, 10),
('0011', 8, 7.6, 10),
('0012', 8.8, 7, 10),
('0013', 6.2, 7, 8),
('0014', 7.4, 7.5, 5),
('0015', 7.5, 5, 6),
('0016', 10, 5.5, 7),
('0017', 10, 6.5, 7.5),
('0018', 2.6, 6, 10),
('0019', 5, 6.8, 8),
('0020', 7, 7.4, 8.8),
('0021', 5, 8, 6.2),
('0022', 7, 8.8, 7.8),
('0023', 8, 6.2, 9.2),
('0024', 8.8, 9, 9),
('0025', 6, 8.8, 8.5),
('0026', 7, 8.5, 8),
('0027', 5, 7.5, 8),
('0028', 9, 5, 8.8),
('0029', 9.2, 5, 10),
('0030', 7.2, 5, 10),
('0031', 6.2, 6.5, 9.5),
('0032', 5.5, 6.2, 8.9),
('0033', 4.5, 6.5, 9.2),
('0034', 8.8, 8, 7.8),
('0035', 7.6, 7, 10),
('0036', 8, 7, 7.5),
('0037', 8.8, 7.4, 8),
('0038', 7.4, 7.5, 8.8),
('0039', 6.5, 7.6, 7),
('0040', 3, 10, 10),
('0041', 10, 8, 9.2),
('0042', 2.21, 2, 7.5),
('0043', 3.23, 3, 9),
('0044', 5.5, 8.8, 8),
('0045', 8.8, 6.2, 7.8),
('0046', 1, 7.7, 10),
('0047', 7, 7.5, 8),
('0048', 4, 7, 8.8),
('0049', 6.7, 9, 6.2),
('0050', 6.8, 9.2, 10),
('0051', 8, 8, 9),
('0052', 8, 8.8, 8.5),
('0053', 8.2, 6.2, 7.8),
('0054', 5, 10, 7.5),
('0055', 3, 9, 7),
('0056', 4, 7.5, 9),
('0057', 6.5, 7.5, 8),
('0058', 7, 7.4, 8.8),
('0059', 9, 5, 9),
('0060', 1, 5.5, 9.2),
('0061', 10, 8.8, 8),
('0062', 8, 8, 10),
('0063', 8.8, 10, 10),
('0064', 6.2, 6.5, 9.5),
('0065', 7, 7.6, 9.8),
('0066', 9, 10, 7.8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_phuc_khao`
--

CREATE TABLE `don_phuc_khao` (
  `sbd` varchar(5) NOT NULL,
  `id_phong_thi` int(11) NOT NULL,
  `ten_hoc_sinh` varchar(50) NOT NULL,
  `id_mon` int(11) NOT NULL,
  `diem_hien_tai` float NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_sinh`
--

CREATE TABLE `hoc_sinh` (
  `id_hoc_sinh` varchar(5) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` varchar(20) DEFAULT NULL,
  `id_phong_thi_van` int(11) NOT NULL,
  `id_ho_so` int(11) NOT NULL,
  `id_phong_thi_toan` int(11) NOT NULL,
  `id_phong_thi_chuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoc_sinh`
--

INSERT INTO `hoc_sinh` (`id_hoc_sinh`, `ten`, `phone`, `ngay_sinh`, `gioi_tinh`, `id_phong_thi_van`, `id_ho_so`, `id_phong_thi_toan`, `id_phong_thi_chuyen`) VALUES
('0042', 'Phạm Ngọc Thanh', '0304799612', '2002-10-08', 'Nữ', 119, 54, 118, 35),
('0066', 'Phạm Ngọc Vân', '0304799681', '2002-10-08', 'Nữ', 110, 34, 109, 6),
('0043', 'Phạm Ngọc Thanh', '0304799682', '2002-10-08', 'Nữ', 119, 44, 118, 97),
('0065', 'Phạm Ngọc Vân', '0304799687', '2002-10-08', 'Nữ', 110, 24, 109, 104),
('0044', 'Phạm Ngọc Thanh', '0304799696', '2002-10-08', 'Nữ', 119, 64, 118, 135),
('0029', 'Nguyễn Thị Hương', '0305722312', '2001-12-11', 'Nữ', 128, 55, 127, 35),
('0028', 'Nguyễn Thị Hương', '0305722361', '2002-12-15', 'Nữ', 128, 35, 127, 6),
('0027', 'Nguyễn Thị Hương', '0305722362', '2001-12-11', 'Nữ', 128, 45, 127, 97),
('0025', 'Nguyễn Thị Hương', '0305722367', '2001-12-11', 'Nữ', 128, 25, 127, 104),
('0026', 'Nguyễn Thị Hương', '0305722396', '2001-12-11', 'Nữ', 128, 65, 127, 135),
('0001', 'Nguyễn Vân Anh', '0365722364', '2002-10-08', 'Nữ', 2, 5, 1, 138),
('0002', 'Nguyễn Vân Anh', '0365722367', '2001-12-11', 'Nữ', 2, 15, 1, 139),
('0003', 'Phạm Ngọc Vân Anh', '0374799681', '2002-10-08', 'Nữ', 2, 4, 1, 138),
('0004', 'Phạm Ngọc Vân Anh', '0374799687', '2002-10-08', 'Nữ', 2, 14, 1, 139),
('0019', 'Nguyễn Đức Hoàng', '0709657512', '2001-12-08', 'Nam', 2, 52, 1, 35),
('0056', 'Nguyễn Đức Trung', '0709657561', '2001-12-08', 'Nam', 119, 32, 118, 6),
('0020', 'Nguyễn Đức Hoàng', '0709657562', '2001-12-08', 'Nam', 2, 42, 1, 97),
('0055', 'Nguyễn Đức Trung', '0709657563', '2001-12-08', 'Nam', 119, 22, 118, 104),
('0021', 'Nguyễn Đức Hoàng', '0709657596', '2001-12-08', 'Nam', 128, 62, 127, 135),
('0057', 'Nguyễn Đức Trung', '0789657563', '2001-12-08', 'Nam', 119, 12, 118, 139),
('0023', 'Trần Văn Hoàng', '0900682512', '2001-08-08', 'Nam', 128, 61, 127, 35),
('0032', 'Trần Văn Mạnh', '0900682521', '2001-08-08', 'Nam', 128, 41, 127, 6),
('0022', 'Trần Văn Hoàng', '0900682522', '2001-08-08', 'Nam', 128, 51, 127, 97),
('0033', 'Trần Văn Mạnh', '0900682527', '2001-08-08', 'Nam', 128, 31, 127, 104),
('0024', 'Trần Văn Hoàng', '0900682596', '2001-08-08', 'Nam', 128, 71, 127, 135),
('0051', 'Nguyễn Thị Thu', '0904162612', '2001-01-06', 'Nữ', 119, 58, 118, 35),
('0031', 'Nguyễn Thị Thu Hương', '0904162681', '2001-01-06', 'Nữ', 128, 38, 127, 6),
('0050', 'Nguyễn Thị Thu', '0904162682', '2001-01-06', 'Nữ', 119, 48, 118, 97),
('0030', 'Nguyễn Thị Thu Hương', '0904162687', '2001-01-06', 'Nữ', 128, 28, 127, 104),
('0049', 'Nguyễn Thị Thu', '0904162696', '2001-01-06', 'Nữ', 119, 68, 118, 135),
('0048', 'Nguyễn Tiến Thành', '0904287012', '2001-01-06', 'Nam', 119, 56, 118, 35),
('0046', 'Nguyễn Tiến Thành', '0904287081', '2001-01-06', 'Nam', 119, 36, 118, 6),
('0045', 'Nguyễn Tiến Thành', '0904287082', '2001-01-06', 'Nam', 119, 46, 118, 97),
('0047', 'Nguyễn Tiến Thành', '0904287096', '2001-01-06', 'Nam', 119, 66, 118, 135),
('0034', 'Trần Văn Mạnh', '0905682527', '2001-08-08', 'Nam', 128, 21, 127, 139),
('0037', 'Nguyễn Văn Nam', '0905881901', '2003-11-30', 'Nam', 128, 33, 127, 6),
('0061', 'Nguyễn Văn Trung', '0905881902', '2003-11-30', 'Nam', 110, 43, 109, 97),
('0038', 'Nguyễn Văn Nam', '0905881907', '2003-11-30', 'Nam', 128, 23, 127, 104),
('0060', 'Nguyễn Văn Trung', '0905881912', '2003-11-30', 'Nam', 119, 53, 118, 35),
('0062', 'Nguyễn Văn Trung', '0905881996', '2003-11-30', 'Nam', 110, 63, 109, 135),
('0040', 'Nguyễn Mạnh Thắng', '0908178712', '2003-03-08', 'Nam', 128, 59, 127, 35),
('0058', 'Nguyễn Mạnh Trung', '0908178761', '2003-03-08', 'Nam', 119, 39, 118, 6),
('0039', 'Nguyễn Mạnh Thắng', '0908178762', '2003-03-08', 'Nam', 128, 49, 127, 97),
('0059', 'Nguyễn Mạnh Trung', '0908178767', '2003-03-08', 'Nam', 119, 29, 118, 104),
('0041', 'Nguyễn Mạnh Thắng', '0908178796', '2003-03-08', 'Nam', 119, 69, 118, 135),
('0013', 'Trần Nhật Giang', '0909723512', '2001-12-08', 'Nam', 2, 57, 1, 35),
('0016', 'Trần Nhật Giang', '0909723521', '2001-12-08', 'Nam', 2, 37, 1, 6),
('0014', 'Trần Nhật Giang', '0909723522', '2001-12-08', 'Nam', 2, 47, 1, 97),
('0018', 'Trần Nhật Giang', '0909723527', '2001-12-08', 'Nam', 2, 27, 1, 104),
('0017', 'Trần Nhật Giang', '0909723596', '2001-12-08', 'Nam', 2, 67, 1, 135),
('0011', 'Lã Thùy Giang', '0909809202', '2001-11-06', 'Nữ', 2, 50, 1, 97),
('0009', 'Lã Thùy Giang', '0909809207', '2001-11-06', 'Nữ', 2, 30, 1, 104),
('0010', 'Lã Thùy Giang', '0909809212', '2001-11-06', 'Nữ', 2, 60, 1, 35),
('0007', 'Lã Thùy Giang', '0909809296', '2001-11-06', 'Nữ', 2, 70, 1, 135),
('0054', 'Nguyễn Thị Thu Trang', '0914162689', '2001-01-06', 'Nữ', 119, 8, 118, 138),
('0015', 'Trần Nhật Giang', '0919723524', '2001-12-08', 'Nam', 2, 7, 1, 138),
('0012', 'Trần Nhật Giang', '0919723527', '2001-12-08', 'Nam', 2, 17, 1, 139),
('0005', 'Nguyễn Tiến Đạt', '0944287082', '2001-01-06', 'Nam', 2, 6, 1, 138),
('0006', 'Nguyễn Tiến Đạt', '0944287087', '2001-01-06', 'Nam', 2, 16, 1, 139),
('0036', 'Nguyễn Văn Nam', '0945881905', '2003-11-30', 'Nam', 128, 3, 127, 138),
('0035', 'Nguyễn Văn Nam', '0945881907', '2003-11-30', 'Nam', 128, 13, 127, 139),
('0063', 'Nguyễn Mạnh Tuấn', '0978178764', '2003-03-08', 'Nam', 110, 9, 109, 138),
('0064', 'Nguyễn Mạnh Tuấn', '0978178767', '2003-03-08', 'Nam', 110, 19, 109, 139),
('0052', 'Lã Thùy Trang', '0979809204', '2001-11-06', 'Nữ', 119, 10, 118, 138),
('0053', 'Lã Thùy Trang', '0979809207', '2001-11-06', 'Nữ', 119, 20, 118, 139),
('0008', 'Lã Thùy Giang', '9129809208', '2001-11-06', 'Nữ', 2, 40, 1, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ho_so`
--

CREATE TABLE `ho_so` (
  `id_ho_so` int(11) NOT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `dan_toc` varchar(50) DEFAULT NULL,
  `ho_khau` varchar(50) DEFAULT NULL,
  `noi_sinh` varchar(50) DEFAULT NULL,
  `gioi_tinh` varchar(20) DEFAULT NULL,
  `mon_thi_chuyen` int(11) DEFAULT NULL,
  `truong_thcs` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `anh` varchar(100) DEFAULT NULL,
  `thanh_toan_le_phi` tinyint(1) NOT NULL DEFAULT 0,
  `ngay_dk` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ho_so`
--

INSERT INTO `ho_so` (`id_ho_so`, `ten`, `ngay_sinh`, `dan_toc`, `ho_khau`, `noi_sinh`, `gioi_tinh`, `mon_thi_chuyen`, `truong_thcs`, `phone`, `anh`, `thanh_toan_le_phi`, `ngay_dk`) VALUES
(1, 'Nguyễn Đức Thiện', '2001-12-08', 'Kinh', '571165490', 'Hà Nội', 'Nam', 3, 'THCS Cầu Giấy', '0789652563', NULL, 0, '2022-12-14 03:20:00'),
(3, 'Nguyễn Văn Nam', '2003-11-30', 'Kinh', '571165492', 'Hà Nội', 'Nam', 3, 'THCS Cầu Giấy', '0945881905', NULL, 1, '2022-12-14 03:29:39'),
(4, 'Phạm Ngọc Vân Anh', '2002-10-08', 'Kinh', '516545490', 'Hà Nội', 'Nữ', 3, 'THCS Việt Hưng', '0374799681', NULL, 1, '2022-12-14 03:29:39'),
(5, 'Nguyễn Vân Anh', '2002-10-08', 'Kinh', '571165490', 'Hà Nội', 'Nữ', 3, 'THCS Cầu Giấy', '0365722364', NULL, 1, '2022-12-14 03:29:39'),
(6, 'Nguyễn Tiến Đạt', '2001-01-06', 'Kinh', '575465490', 'Hà Nội', 'Nam', 3, 'THCS Cầu Giấy', '0944287082', NULL, 1, '2022-12-14 03:29:39'),
(7, 'Trần Nhật Giang', '2001-12-08', 'Kinh', '571165540', 'Hà Nội', 'Nam', 3, 'THCS Cầu Giấy', '0919723524', NULL, 1, '2022-12-14 03:29:39'),
(8, 'Nguyễn Thị Thu Trang', '2001-01-06', 'Kinh', '575465490', 'Hà Nội', 'Nữ', 3, 'THCS Cầu Giấy', '0914162689', NULL, 1, '2022-12-14 03:29:39'),
(9, 'Nguyễn Mạnh Tuấn', '2003-03-08', 'Kinh', '571465490', 'Hà Nội', 'Nam', 3, 'THCS Xuân Đỉnh', '0978178764', NULL, 1, '2022-12-14 03:29:39'),
(10, 'Lã Thùy Trang', '2001-11-06', 'Kinh', '554905490', 'Hà Nội', 'Nữ', 3, 'THCS Cầu Giấy', '0979809204', NULL, 1, '2022-12-14 03:29:39'),
(11, 'Trần Văn Mạnh', '2001-08-08', 'Kinh', '571162490', 'Hà Nội', 'Nam', 3, 'THCS Xuân Đỉnh', '0905682529', NULL, 0, '2022-12-14 03:29:39'),
(12, 'Nguyễn Đức Trung', '2001-12-08', 'Kinh', '581165490', 'Hà Nội', 'Nam', 4, 'THCS Xuân Đỉnh', '0789657563', NULL, 1, '2022-12-14 06:31:25'),
(13, 'Nguyễn Văn Nam', '2003-11-30', 'Kinh', '581165492', 'Hà Nội', 'Nam', 4, 'THCS Cầu Giấy', '0945881907', NULL, 1, '2022-12-14 06:31:25'),
(14, 'Phạm Ngọc Vân Anh', '2002-10-08', 'Kinh', '816545490', 'Hà Nội', 'Nữ', 4, 'THCS Việt Hưng', '0374799687', NULL, 1, '2022-12-14 06:31:25'),
(15, 'Nguyễn Vân Anh', '2001-12-11', 'Kinh', '871165490', 'Hà Nội', 'Nữ', 4, 'THCS Cầu Giấy', '0365722367', NULL, 1, '2022-12-14 06:31:25'),
(16, 'Nguyễn Tiến Đạt', '2001-01-06', 'Kinh', '875465490', 'Hà Nội', 'Nam', 4, 'THCS Cầu Giấy', '0944287087', NULL, 1, '2022-12-14 06:31:25'),
(17, 'Trần Nhật Giang', '2001-12-08', 'Kinh', '871165540', 'Hà Nội', 'Nam', 4, 'THCS Cầu Giấy', '0919723527', NULL, 1, '2022-12-14 06:31:25'),
(18, 'Nguyễn Thị Thu Trang', '2001-01-06', 'Kinh', '875465490', 'Hà Nội', 'Nữ', 4, 'THCS Cầu Giấy', '0914162687', NULL, 0, '2022-12-14 06:31:25'),
(19, 'Nguyễn Mạnh Tuấn', '2003-03-08', 'Kinh', '871465490', 'Hà Nội', 'Nam', 4, 'THCS Xuân Đỉnh', '0978178767', NULL, 1, '2022-12-14 06:31:25'),
(20, 'Lã Thùy Trang', '2001-11-06', 'Kinh', '854905490', 'Hà Nội', 'Nữ', 4, 'THCS Cầu Giấy', '0979809207', NULL, 1, '2022-12-14 06:31:25'),
(21, 'Trần Văn Mạnh', '2001-08-08', 'Kinh', '871162490', 'Hà Nội', 'Nam', 4, 'THCS Xuân Đỉnh', '0905682527', NULL, 1, '2022-12-14 06:31:25'),
(22, 'Nguyễn Đức Trung', '2001-12-08', 'Kinh', '582165490', 'Hà Nội', 'Nam', 5, 'THCS Xuân Đỉnh', '0709657563', NULL, 1, '2022-12-14 06:34:15'),
(23, 'Nguyễn Văn Nam', '2003-11-30', 'Kinh', '582165492', 'Hà Nội', 'Nam', 5, 'THCS Cầu Giấy', '0905881907', NULL, 1, '2022-12-14 06:34:15'),
(24, 'Phạm Ngọc Vân', '2002-10-08', 'Kinh', '812545490', 'Hà Nội', 'Nữ', 5, 'THCS Việt Hưng', '0304799687', NULL, 1, '2022-12-14 06:34:15'),
(25, 'Nguyễn Thị Hương', '2001-12-11', 'Kinh', '872165490', 'Hà Nội', 'Nữ', 5, 'THCS Cầu Giấy', '0305722367', NULL, 1, '2022-12-14 06:34:15'),
(26, 'Nguyễn Tiến Thành', '2001-01-06', 'Kinh', '872465490', 'Hà Nội', 'Nam', 5, 'THCS Cầu Giấy', '0904287087', NULL, 0, '2022-12-14 06:34:15'),
(27, 'Trần Nhật Giang', '2001-12-08', 'Kinh', '872165540', 'Hà Nội', 'Nam', 5, 'THCS Cầu Giấy', '0909723527', NULL, 1, '2022-12-14 06:34:15'),
(28, 'Nguyễn Thị Thu Hương', '2001-01-06', 'Kinh', '872465490', 'Hà Nội', 'Nữ', 5, 'THCS Cầu Giấy', '0904162687', NULL, 1, '2022-12-14 06:34:15'),
(29, 'Nguyễn Mạnh Trung', '2003-03-08', 'Kinh', '872465490', 'Hà Nội', 'Nam', 5, 'THCS Xuân Đỉnh', '0908178767', NULL, 1, '2022-12-14 06:34:15'),
(30, 'Lã Thùy Giang', '2001-11-06', 'Kinh', '852905490', 'Hà Nội', 'Nữ', 5, 'THCS Cầu Giấy', '0909809207', NULL, 1, '2022-12-14 06:34:15'),
(31, 'Trần Văn Mạnh', '2001-08-08', 'Kinh', '872162490', 'Hà Nội', 'Nam', 5, 'THCS Xuân Đỉnh', '0900682527', NULL, 1, '2022-12-14 06:34:15'),
(32, 'Nguyễn Đức Trung', '2001-12-08', 'Kinh', '582165491', 'Hà Nội', 'Nam', 6, 'THCS Xuân Đỉnh', '0709657561', NULL, 1, '2022-12-14 06:44:42'),
(33, 'Nguyễn Văn Nam', '2003-11-30', 'Kinh', '582165491', 'Hà Nội', 'Nam', 6, 'THCS Cầu Giấy', '0905881901', NULL, 1, '2022-12-14 06:44:42'),
(34, 'Phạm Ngọc Vân', '2002-10-08', 'Kinh', '812545491', 'Hà Nội', 'Nữ', 6, 'THCS Việt Hưng', '0304799681', NULL, 1, '2022-12-14 06:44:42'),
(35, 'Nguyễn Thị Hương', '2002-12-15', 'Kinh', '872165491', 'Hà Nội', 'Nữ', 6, 'THCS Cầu Giấy', '0305722361', NULL, 1, '2022-12-14 06:44:42'),
(36, 'Nguyễn Tiến Thành', '2001-01-06', 'Kinh', '872465491', 'Hà Nội', 'Nam', 6, 'THCS Cầu Giấy', '0904287081', NULL, 1, '2022-12-14 06:44:42'),
(37, 'Trần Nhật Giang', '2001-12-08', 'Kinh', '872165541', 'Hà Nội', 'Nam', 6, 'THCS Cầu Giấy', '0909723521', NULL, 1, '2022-12-14 06:44:42'),
(38, 'Nguyễn Thị Thu Hương', '2001-01-06', 'Kinh', '872465491', 'Hà Nội', 'Nữ', 6, 'THCS Cầu Giấy', '0904162681', NULL, 1, '2022-12-14 06:44:42'),
(39, 'Nguyễn Mạnh Trung', '2003-03-08', 'Kinh', '872465491', 'Hà Nội', 'Nam', 6, 'THCS Xuân Đỉnh', '0908178761', NULL, 1, '2022-12-14 06:44:42'),
(40, 'Lã Thùy Giang', '2001-11-06', 'Kinh', '852905491', 'Hà Nội', 'Nữ', 6, 'THCS Cầu Giấy', '9129809208', NULL, 1, '2022-12-14 06:44:42'),
(41, 'Trần Văn Mạnh', '2001-08-08', 'Kinh', '872162491', 'Hà Nội', 'Nam', 6, 'THCS Xuân Đỉnh', '0900682521', NULL, 1, '2022-12-14 06:44:42'),
(42, 'Nguyễn Đức Hoàng', '2001-12-08', 'Kinh', '582165492', 'Hà Nội', 'Nam', 7, 'THCS Xuân Đỉnh', '0709657562', NULL, 1, '2022-12-14 06:49:01'),
(43, 'Nguyễn Văn Trung', '2003-11-30', 'Kinh', '582165492', 'Hà Nội', 'Nam', 7, 'THCS Cầu Giấy', '0905881902', NULL, 1, '2022-12-14 06:49:01'),
(44, 'Phạm Ngọc Thanh', '2002-10-08', 'Kinh', '812545492', 'Hà Nội', 'Nữ', 7, 'THCS Việt Hưng', '0304799682', NULL, 1, '2022-12-14 06:49:01'),
(45, 'Nguyễn Thị Hương', '2001-12-11', 'Kinh', '872165492', 'Hà Nội', 'Nữ', 7, 'THCS Cầu Giấy', '0305722362', NULL, 1, '2022-12-14 06:49:01'),
(46, 'Nguyễn Tiến Thành', '2001-01-06', 'Kinh', '872465492', 'Hà Nội', 'Nam', 7, 'THCS Cầu Giấy', '0904287082', NULL, 1, '2022-12-14 06:49:01'),
(47, 'Trần Nhật Giang', '2001-12-08', 'Kinh', '872165542', 'Hà Nội', 'Nam', 7, 'THCS Cầu Giấy', '0909723522', NULL, 1, '2022-12-14 06:49:01'),
(48, 'Nguyễn Thị Thu', '2001-01-06', 'Kinh', '872465492', 'Hà Nội', 'Nữ', 7, 'THCS Cầu Giấy', '0904162682', NULL, 1, '2022-12-14 06:49:01'),
(49, 'Nguyễn Mạnh Thắng', '2003-03-08', 'Kinh', '872465492', 'Hà Nội', 'Nam', 7, 'THCS Xuân Đỉnh', '0908178762', NULL, 1, '2022-12-14 06:49:01'),
(50, 'Lã Thùy Giang', '2001-11-06', 'Kinh', '852905492', 'Hà Nội', 'Nữ', 7, 'THCS Cầu Giấy', '0909809202', NULL, 1, '2022-12-14 06:49:01'),
(51, 'Trần Văn Hoàng', '2001-08-08', 'Kinh', '872162492', 'Hà Nội', 'Nam', 7, 'THCS Xuân Đỉnh', '0900682522', NULL, 1, '2022-12-14 06:49:01'),
(52, 'Nguyễn Đức Hoàng', '2001-12-08', 'Kinh', '582165420', 'Hà Nội', 'Nam', 8, 'THCS Xuân Đỉnh', '0709657512', NULL, 1, '2022-12-14 06:52:32'),
(53, 'Nguyễn Văn Trung', '2003-11-30', 'Kinh', '582165420', 'Hà Nội', 'Nam', 8, 'THCS Cầu Giấy', '0905881912', NULL, 1, '2022-12-14 06:52:32'),
(54, 'Phạm Ngọc Thanh', '2002-10-08', 'Kinh', '812545420', 'Hà Nội', 'Nữ', 8, 'THCS Việt Hưng', '0304799612', NULL, 1, '2022-12-14 06:52:32'),
(55, 'Nguyễn Thị Hương', '2001-12-11', 'Kinh', '872165420', 'Hà Nội', 'Nữ', 8, 'THCS Cầu Giấy', '0305722312', NULL, 1, '2022-12-14 06:52:32'),
(56, 'Nguyễn Tiến Thành', '2001-01-06', 'Kinh', '872465420', 'Hà Nội', 'Nam', 8, 'THCS Cầu Giấy', '0904287012', NULL, 1, '2022-12-14 06:52:32'),
(57, 'Trần Nhật Giang', '2001-12-08', 'Kinh', '872165520', 'Hà Nội', 'Nam', 8, 'THCS Cầu Giấy', '0909723512', NULL, 1, '2022-12-14 06:52:32'),
(58, 'Nguyễn Thị Thu', '2001-01-06', 'Kinh', '872465420', 'Hà Nội', 'Nữ', 8, 'THCS Cầu Giấy', '0904162612', NULL, 1, '2022-12-14 06:52:32'),
(59, 'Nguyễn Mạnh Thắng', '2003-03-08', 'Kinh', '872465420', 'Hà Nội', 'Nam', 8, 'THCS Xuân Đỉnh', '0908178712', NULL, 1, '2022-12-14 06:52:32'),
(60, 'Lã Thùy Giang', '2001-11-06', 'Kinh', '852905420', 'Hà Nội', 'Nữ', 8, 'THCS Cầu Giấy', '0909809212', NULL, 1, '2022-12-14 06:52:32'),
(61, 'Trần Văn Hoàng', '2001-08-08', 'Kinh', '872162420', 'Hà Nội', 'Nam', 8, 'THCS Xuân Đỉnh', '0900682512', NULL, 1, '2022-12-14 06:52:32'),
(62, 'Nguyễn Đức Hoàng', '2001-12-08', 'Kinh', '582165469', 'Hà Nội', 'Nam', 9, 'THCS Xuân Đỉnh', '0709657596', NULL, 1, '2022-12-14 06:56:34'),
(63, 'Nguyễn Văn Trung', '2003-11-30', 'Kinh', '582165469', 'Hà Nội', 'Nam', 9, 'THCS Cầu Giấy', '0905881996', NULL, 1, '2022-12-14 06:56:34'),
(64, 'Phạm Ngọc Thanh', '2002-10-08', 'Kinh', '812545469', 'Hà Nội', 'Nữ', 9, 'THCS Việt Hưng', '0304799696', NULL, 1, '2022-12-14 06:56:34'),
(65, 'Nguyễn Thị Hương', '2001-12-11', 'Kinh', '872165469', 'Hà Nội', 'Nữ', 9, 'THCS Cầu Giấy', '0305722396', NULL, 1, '2022-12-14 06:56:34'),
(66, 'Nguyễn Tiến Thành', '2001-01-06', 'Kinh', '872465469', 'Hà Nội', 'Nam', 9, 'THCS Cầu Giấy', '0904287096', NULL, 1, '2022-12-14 06:56:34'),
(67, 'Trần Nhật Giang', '2001-12-08', 'Kinh', '872165569', 'Hà Nội', 'Nam', 9, 'THCS Cầu Giấy', '0909723596', NULL, 1, '2022-12-14 06:56:34'),
(68, 'Nguyễn Thị Thu', '2001-01-06', 'Kinh', '872465469', 'Hà Nội', 'Nữ', 9, 'THCS Cầu Giấy', '0904162696', NULL, 1, '2022-12-14 06:56:34'),
(69, 'Nguyễn Mạnh Thắng', '2003-03-08', 'Kinh', '872465469', 'Hà Nội', 'Nam', 9, 'THCS Xuân Đỉnh', '0908178796', NULL, 1, '2022-12-14 06:56:34'),
(70, 'Lã Thùy Giang', '2001-11-06', 'Kinh', '852905469', 'Hà Nội', 'Nữ', 9, 'THCS Cầu Giấy', '0909809296', NULL, 1, '2022-12-14 06:56:34'),
(71, 'Trần Văn Hoàng', '2001-08-08', 'Kinh', '872162469', 'Hà Nội', 'Nam', 9, 'THCS Xuân Đỉnh', '0900682596', NULL, 1, '2022-12-14 06:56:34'),
(77, 'Nguyễn Đức Thiện', '2022-12-09', 'Kinh', '58963325144', 'Hà Tĩnh', 'Nam', 3, 'Xuân Đỉnh', '0788878783', '63a09965a52d7.jpg', 0, '2022-12-19 17:03:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `id_mon` int(11) NOT NULL,
  `ten_mon` varchar(50) NOT NULL,
  `loai_mon` varchar(10) NOT NULL COMMENT 'chung: Môn chung\r\nchuyen: Môn chuyên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`id_mon`, `ten_mon`, `loai_mon`) VALUES
(1, 'Toán', 'chung'),
(2, 'Văn', 'chung'),
(3, 'Toán', 'chuyen'),
(4, 'Tin học', 'chuyen'),
(5, 'Vật lý', 'chuyen'),
(6, 'Hóa học', 'chuyen'),
(7, 'Sinh học', 'chuyen'),
(8, 'Ngữ văn', 'chuyen'),
(9, 'Tiếng anh', 'chuyen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id_phong` int(11) NOT NULL,
  `ten_phong` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id_phong`, `ten_phong`) VALUES
(1, '201'),
(2, '202'),
(3, '203'),
(4, '204'),
(5, '205'),
(6, '206'),
(7, '207'),
(8, '208'),
(9, '301'),
(10, '302'),
(11, '303'),
(12, '304'),
(13, '305'),
(14, '306'),
(15, '307'),
(16, '308');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_thi`
--

CREATE TABLE `phong_thi` (
  `id_phong_thi` int(11) NOT NULL,
  `ten_phong` varchar(25) NOT NULL,
  `thoi_gian_thi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_mon` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong_thi`
--

INSERT INTO `phong_thi` (`id_phong_thi`, `ten_phong`, `thoi_gian_thi`, `id_mon`, `id_phong`) VALUES
(1, '201', '2022-12-11 01:00:00', 1, 1),
(2, '201', '2022-12-11 07:00:00', 2, 1),
(3, '201', '2022-12-12 01:00:00', 3, 1),
(4, '201', '2022-12-12 07:00:00', 4, 1),
(5, '201', '2022-12-13 01:00:00', 5, 1),
(6, '201', '2022-12-13 07:00:00', 6, 1),
(7, '201', '2022-12-14 01:00:00', 7, 1),
(8, '201', '2022-12-14 07:00:00', 8, 1),
(9, '201', '2022-12-15 01:00:00', 9, 1),
(10, '202', '2022-12-11 01:00:00', 1, 2),
(11, '202', '2022-12-11 07:00:00', 2, 2),
(12, '202', '2022-12-12 01:00:00', 3, 2),
(13, '202', '2022-12-12 07:00:00', 4, 2),
(14, '202', '2022-12-13 01:00:00', 5, 2),
(15, '202', '2022-12-13 07:00:00', 6, 2),
(16, '202', '2022-12-14 01:00:00', 7, 2),
(17, '202', '2022-12-14 07:00:00', 8, 2),
(18, '202', '2022-12-15 01:00:00', 9, 2),
(19, '203', '2022-12-11 01:00:00', 1, 3),
(20, '203', '2022-12-11 07:00:00', 2, 3),
(21, '203', '2022-12-12 01:00:00', 3, 3),
(22, '203', '2022-12-12 07:00:00', 4, 3),
(23, '203', '2022-12-13 01:00:00', 5, 3),
(24, '203', '2022-12-13 07:00:00', 6, 3),
(25, '203', '2022-12-14 01:00:00', 7, 3),
(26, '203', '2022-12-14 07:00:00', 8, 3),
(27, '203', '2022-12-15 01:00:00', 9, 3),
(28, '204', '2022-12-11 01:00:00', 1, 4),
(29, '204', '2022-12-11 07:00:00', 2, 4),
(30, '204', '2022-12-12 01:00:00', 3, 4),
(31, '204', '2022-12-12 07:00:00', 4, 4),
(32, '204', '2022-12-13 01:00:00', 5, 4),
(33, '204', '2022-12-13 07:00:00', 6, 4),
(34, '204', '2022-12-14 01:00:00', 7, 4),
(35, '204', '2022-12-14 07:00:00', 8, 4),
(36, '204', '2022-12-15 01:00:00', 9, 4),
(37, '205', '2022-12-11 01:00:00', 1, 5),
(38, '205', '2022-12-11 07:00:00', 2, 5),
(39, '205', '2022-12-12 01:00:00', 3, 5),
(40, '205', '2022-12-12 07:00:00', 4, 5),
(41, '205', '2022-12-13 01:00:00', 5, 5),
(42, '205', '2022-12-13 07:00:00', 6, 5),
(43, '205', '2022-12-14 01:00:00', 7, 5),
(44, '205', '2022-12-14 07:00:00', 8, 5),
(45, '205', '2022-12-15 01:00:00', 9, 5),
(46, '206', '2022-12-11 01:00:00', 1, 6),
(47, '206', '2022-12-11 07:00:00', 2, 6),
(48, '206', '2022-12-12 01:00:00', 3, 6),
(49, '206', '2022-12-12 07:00:00', 4, 6),
(50, '206', '2022-12-13 01:00:00', 5, 6),
(51, '206', '2022-12-13 07:00:00', 6, 6),
(52, '206', '2022-12-14 01:00:00', 7, 6),
(53, '206', '2022-12-14 07:00:00', 8, 6),
(54, '206', '2022-12-15 01:00:00', 9, 6),
(55, '207', '2022-12-11 01:00:00', 1, 7),
(56, '207', '2022-12-11 07:00:00', 2, 7),
(57, '207', '2022-12-12 01:00:00', 3, 7),
(58, '207', '2022-12-12 07:00:00', 4, 7),
(59, '207', '2022-12-13 01:00:00', 5, 7),
(60, '207', '2022-12-13 07:00:00', 6, 7),
(61, '207', '2022-12-14 01:00:00', 7, 7),
(62, '207', '2022-12-14 07:00:00', 8, 7),
(63, '207', '2022-12-15 01:00:00', 9, 7),
(64, '208', '2022-12-11 01:00:00', 1, 8),
(65, '208', '2022-12-11 07:00:00', 2, 8),
(66, '208', '2022-12-12 01:00:00', 3, 8),
(67, '208', '2022-12-12 07:00:00', 4, 8),
(68, '208', '2022-12-13 01:00:00', 5, 8),
(69, '208', '2022-12-13 07:00:00', 6, 8),
(70, '208', '2022-12-14 01:00:00', 7, 8),
(71, '208', '2022-12-14 07:00:00', 8, 8),
(72, '208', '2022-12-15 01:00:00', 9, 8),
(73, '301', '2022-12-11 01:00:00', 1, 9),
(74, '301', '2022-12-11 07:00:00', 2, 9),
(75, '301', '2022-12-12 01:00:00', 3, 9),
(76, '301', '2022-12-12 07:00:00', 4, 9),
(77, '301', '2022-12-13 01:00:00', 5, 9),
(78, '301', '2022-12-13 07:00:00', 6, 9),
(79, '301', '2022-12-14 01:00:00', 7, 9),
(80, '301', '2022-12-14 07:00:00', 8, 9),
(81, '301', '2022-12-15 01:00:00', 9, 9),
(82, '302', '2022-12-11 01:00:00', 1, 10),
(83, '302', '2022-12-11 07:00:00', 2, 10),
(84, '302', '2022-12-12 01:00:00', 3, 10),
(85, '302', '2022-12-12 07:00:00', 4, 10),
(86, '302', '2022-12-13 01:00:00', 5, 10),
(87, '302', '2022-12-13 07:00:00', 6, 10),
(88, '302', '2022-12-14 01:00:00', 7, 10),
(89, '302', '2022-12-14 07:00:00', 8, 10),
(90, '302', '2022-12-15 01:00:00', 9, 10),
(91, '303', '2022-12-11 01:00:00', 1, 11),
(92, '303', '2022-12-11 07:00:00', 2, 11),
(93, '303', '2022-12-12 01:00:00', 3, 11),
(94, '303', '2022-12-12 07:00:00', 4, 11),
(95, '303', '2022-12-13 01:00:00', 5, 11),
(96, '303', '2022-12-13 07:00:00', 6, 11),
(97, '303', '2022-12-14 01:00:00', 7, 11),
(98, '303', '2022-12-14 07:00:00', 8, 11),
(99, '303', '2022-12-15 01:00:00', 9, 11),
(100, '304', '2022-12-11 01:00:00', 1, 12),
(101, '304', '2022-12-11 07:00:00', 2, 12),
(102, '304', '2022-12-12 01:00:00', 3, 12),
(103, '304', '2022-12-12 07:00:00', 4, 12),
(104, '304', '2022-12-13 01:00:00', 5, 12),
(105, '304', '2022-12-13 07:00:00', 6, 12),
(106, '304', '2022-12-14 01:00:00', 7, 12),
(107, '304', '2022-12-14 07:00:00', 8, 12),
(108, '304', '2022-12-15 01:00:00', 9, 12),
(109, '305', '2022-12-11 01:00:00', 1, 13),
(110, '305', '2022-12-11 07:00:00', 2, 13),
(111, '305', '2022-12-12 01:00:00', 3, 13),
(112, '305', '2022-12-12 07:00:00', 4, 13),
(113, '305', '2022-12-13 01:00:00', 5, 13),
(114, '305', '2022-12-13 07:00:00', 6, 13),
(115, '305', '2022-12-14 01:00:00', 7, 13),
(116, '305', '2022-12-14 07:00:00', 8, 13),
(117, '305', '2022-12-15 01:00:00', 9, 13),
(118, '306', '2022-12-11 01:00:00', 1, 14),
(119, '306', '2022-12-11 07:00:00', 2, 14),
(120, '306', '2022-12-12 01:00:00', 3, 14),
(121, '306', '2022-12-12 07:00:00', 4, 14),
(122, '306', '2022-12-13 01:00:00', 5, 14),
(123, '306', '2022-12-13 07:00:00', 6, 14),
(124, '306', '2022-12-14 01:00:00', 7, 14),
(125, '306', '2022-12-14 07:00:00', 8, 14),
(126, '306', '2022-12-15 01:00:00', 9, 14),
(127, '307', '2022-12-11 01:00:00', 1, 15),
(128, '307', '2022-12-11 07:00:00', 2, 15),
(129, '307', '2022-12-12 01:00:00', 3, 15),
(130, '307', '2022-12-12 07:00:00', 4, 15),
(131, '307', '2022-12-13 01:00:00', 5, 15),
(132, '307', '2022-12-13 07:00:00', 6, 15),
(133, '307', '2022-12-14 01:00:00', 7, 15),
(134, '307', '2022-12-14 07:00:00', 8, 15),
(135, '307', '2022-12-15 01:00:00', 9, 15),
(136, '308', '2022-12-11 01:00:00', 1, 16),
(137, '308', '2022-12-11 07:00:00', 2, 16),
(138, '308', '2022-12-12 01:00:00', 3, 16),
(139, '308', '2022-12-12 07:00:00', 4, 16),
(140, '308', '2022-12-13 01:00:00', 5, 16),
(141, '308', '2022-12-13 07:00:00', 6, 16),
(142, '308', '2022-12-14 01:00:00', 7, 16),
(143, '308', '2022-12-14 07:00:00', 8, 16),
(144, '308', '2022-12-15 01:00:00', 9, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoi_gian`
--

CREATE TABLE `thoi_gian` (
  `id` int(11) NOT NULL,
  `su_kien` varchar(50) NOT NULL,
  `thoi_gian` timestamp NULL DEFAULT NULL,
  `luu_y` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoi_gian`
--

INSERT INTO `thoi_gian` (`id`, `su_kien`, `thoi_gian`, `luu_y`) VALUES
(1, 'Mở cổng đăng kí dự thi', '2022-12-16 14:47:00', NULL),
(2, 'Đóng cổng đăng kí dự thi', '2022-12-17 14:44:00', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`sbd`);

--
-- Chỉ mục cho bảng `don_phuc_khao`
--
ALTER TABLE `don_phuc_khao`
  ADD PRIMARY KEY (`sbd`,`id_mon`),
  ADD KEY `id_mon` (`id_mon`),
  ADD KEY `id_phong` (`id_phong_thi`);

--
-- Chỉ mục cho bảng `hoc_sinh`
--
ALTER TABLE `hoc_sinh`
  ADD PRIMARY KEY (`phone`,`ngay_sinh`,`ten`) USING BTREE,
  ADD UNIQUE KEY `id_hoc_sinh` (`id_hoc_sinh`),
  ADD KEY `id_ho_so` (`id_ho_so`),
  ADD KEY `id_phong_thi_chuyen` (`id_phong_thi_chuyen`),
  ADD KEY `id_phong_thi_toan` (`id_phong_thi_toan`),
  ADD KEY `id_phong_thi_van` (`id_phong_thi_van`);

--
-- Chỉ mục cho bảng `ho_so`
--
ALTER TABLE `ho_so`
  ADD PRIMARY KEY (`id_ho_so`),
  ADD KEY `mon_thi_chuyen` (`mon_thi_chuyen`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`id_mon`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`);

--
-- Chỉ mục cho bảng `phong_thi`
--
ALTER TABLE `phong_thi`
  ADD PRIMARY KEY (`id_phong_thi`),
  ADD KEY `id_mon` (`id_mon`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thoi_gian`
--
ALTER TABLE `thoi_gian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ho_so`
--
ALTER TABLE `ho_so`
  MODIFY `id_ho_so` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `mon`
--
ALTER TABLE `mon`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `phong_thi`
--
ALTER TABLE `phong_thi`
  MODIFY `id_phong_thi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thoi_gian`
--
ALTER TABLE `thoi_gian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`sbd`) REFERENCES `hoc_sinh` (`id_hoc_sinh`);

--
-- Các ràng buộc cho bảng `don_phuc_khao`
--
ALTER TABLE `don_phuc_khao`
  ADD CONSTRAINT `don_phuc_khao_ibfk_1` FOREIGN KEY (`id_mon`) REFERENCES `mon` (`id_mon`),
  ADD CONSTRAINT `don_phuc_khao_ibfk_2` FOREIGN KEY (`id_phong_thi`) REFERENCES `phong_thi` (`id_phong_thi`);

--
-- Các ràng buộc cho bảng `hoc_sinh`
--
ALTER TABLE `hoc_sinh`
  ADD CONSTRAINT `hoc_sinh_ibfk_2` FOREIGN KEY (`id_ho_so`) REFERENCES `ho_so` (`id_ho_so`),
  ADD CONSTRAINT `hoc_sinh_ibfk_3` FOREIGN KEY (`id_phong_thi_chuyen`) REFERENCES `phong_thi` (`id_phong_thi`),
  ADD CONSTRAINT `hoc_sinh_ibfk_4` FOREIGN KEY (`id_phong_thi_toan`) REFERENCES `phong_thi` (`id_phong_thi`),
  ADD CONSTRAINT `hoc_sinh_ibfk_5` FOREIGN KEY (`id_phong_thi_van`) REFERENCES `phong_thi` (`id_phong_thi`);

--
-- Các ràng buộc cho bảng `ho_so`
--
ALTER TABLE `ho_so`
  ADD CONSTRAINT `ho_so_ibfk_1` FOREIGN KEY (`mon_thi_chuyen`) REFERENCES `mon` (`id_mon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phong_thi`
--
ALTER TABLE `phong_thi`
  ADD CONSTRAINT `phong_thi_ibfk_1` FOREIGN KEY (`id_mon`) REFERENCES `mon` (`id_mon`),
  ADD CONSTRAINT `phong_thi_ibfk_2` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
