-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2021 lúc 05:06 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbdoanweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `advertisement`
--

CREATE TABLE `advertisement` (
  `idAdv` int(11) NOT NULL,
  `urlImg1` varchar(1000) NOT NULL,
  `ngaychayQC` date NOT NULL,
  `ngaykethucQC` date NOT NULL,
  `MoTa` varchar(10000) NOT NULL,
  `urlImg2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `advertisement`
--

INSERT INTO `advertisement` (`idAdv`, `urlImg1`, `ngaychayQC`, `ngaykethucQC`, `MoTa`, `urlImg2`) VALUES
(3, 'https://s3-ap-southeast-1.amazonaws.com/images.accesstrade.vn/d395771085aab05244a4fb8fd91bf4ee/7638_4_20171011065932249.png', '2021-01-05', '2021-02-05', 'Chiến dịch quảng cáo thương hiệu Vua biaa', 'https://s3-ap-southeast-1.amazonaws.com/images.accesstrade.vn/d395771085aab05244a4fb8fd91bf4ee/7629_giaohangws_20171006160753275.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `idTL` int(11) NOT NULL,
  `TenTL` varchar(255) NOT NULL DEFAULT '',
  `AnHien` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`idTL`, `TenTL`, `AnHien`) VALUES
(1, 'Xã hội', 1),
(2, 'Thế giới', 1),
(3, 'Thể thao', 1),
(4, 'Sức khỏe', 1),
(5, 'Sức mạnh số', 1),
(6, 'Giáo dục', 1),
(7, 'Văn hóa', 1),
(8, 'Nhịp sống trẻ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `idTin` int(11) NOT NULL DEFAULT 0,
  `idUser` int(11) DEFAULT NULL,
  `Ngay` date DEFAULT NULL,
  `Content` text NOT NULL,
  `AnHien` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idComment`, `idTin`, `idUser`, `Ngay`, `Content`, `AnHien`) VALUES
(1, 5, 1, '2010-11-21', 'Horror mà được giấy phép thì kinh rồi. Một số dòng máy sau mong né sẽ vip hơn, chờ thôi...', 1),
(2, 6, 2, '2010-11-21', 'Nhờ Covid mà công nghệ được tiếp thu nhanh hơn, mình cảm thấy covid có hại nhưng nó cũng có lợi chứ nhỉ <3', 1),
(3, 7, 3, '2010-11-21', 'Tạm biệt người nghệ sĩ đa tài, cống hiến hết mình cho nghệ thuật nước nahf, mang tiếng cười đến với biết bao nhiêu thế hệ Việt Nam', 1),
(18, 6, 2, '2021-01-06', 'eee', 1),
(17, 1, 2, '2021-01-06', 'ggg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `idTin` int(11) NOT NULL,
  `TieuDe` varchar(255) NOT NULL DEFAULT '',
  `TomTat` varchar(1000) DEFAULT NULL,
  `urlImg` varchar(255) DEFAULT NULL,
  `Ngay` date DEFAULT NULL,
  `idUser` int(11) NOT NULL DEFAULT 0,
  `Content` varchar(10000) DEFAULT NULL,
  `idLT` int(11) NOT NULL DEFAULT 0,
  `idTL` int(11) DEFAULT 1,
  `SoLanXem` int(11) DEFAULT 0,
  `TinNoiBat` tinyint(1) DEFAULT 0,
  `SoLuotLike` int(11) DEFAULT 0,
  `AnHien` tinyint(1) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`idTin`, `TieuDe`, `TomTat`, `urlImg`, `Ngay`, `idUser`, `Content`, `idLT`, `idTL`, `SoLanXem`, `TinNoiBat`, `SoLuotLike`, `AnHien`) VALUES
(2, 'Năm dồn dập \"giông bão\" của quan hệ Mỹ - Trung', 'Sau 4 năm cầm quyền của Tổng thống Donald Trump, nhất là năm 2020, quan hệ Mỹ-Trung đã bị đẩy xuống mức thấp chưa từng có.', 'https://icdn.dantri.com.vn/2020/12/28/xi-tr-1609163356603.jpg', '2020-11-27', 2, '<p>Sự nghi ngờ, thù địch ngày càng bao trùm mối quan hệ giữa Mỹ và Trung Quốc khi hai bên xung đột lợi ích ở hàng loạt lĩnh vực từ không gian mạng, vũ trụ, đến Biển Đông, eo biển Đài Loan, thậm chí vùng Vịnh.\r\n\r\nCuộc khủng hoảng Covid-19 cùng với cuộc đụng độ giữa Trung Quốc và Ấn Độ đã khiến những rạn nứt trong mối quan hệ giữa Bắc Kinh và Washington trở thành vực thẳm khó vượt qua bất chấp bầu cử tổng thống Mỹ vào cuối năm nay ra sao. Về phía Trung Quốc, Ngoại trưởng Vương Nghị nói rằng, mối quan hệ với Mỹ đã xuống mức thấp nhất kể từ khi hai nước tái lập quan hệ ngoại giao năm 1979. Ông Vương cho rằng các chính sách của Mỹ với Trung Quốc dựa trên những “tính toán sai lầm chiến lược và đầy cảm tính”.\r\n\r\nCả Mỹ và Trung Quốc đều thúc ép buộc các nước khác phải lựa chọn đứng về bên nào ngay cả khi họ không muốn điều đó. Ví dụ, chính quyền Tổng thống Donald Trump gây sức ép với các đồng minh như Anh, Australia để các nước này loại tập đoàn Huawei của Trung Quốc khỏi các dự án phát triển hệ thống mạng 5G. Hôm 30/6, Mỹ chính thức coi các tập đoàn viễn thông Huawei và ZTE của Trung Quốc là \"mối đe dọa an ninh quốc gia\" và cấm các công ty Mỹ dùng ngân sách chính phủ mua thiết bị từ các công ty này. Ngoài ra, Nhà Trắng cũng đang thảo luận kế hoạch \"cấm cửa\" các ứng dụng TikTok và Wechat của Trung Quốc.\r\n\r\nTrong khi đó, Trung Quốc tìm cách gây sức ép với các nước công khai ủng hộ các chính sách gây tranh cãi về vấn đề Hong Kong và Tân Cương. Bắc Kinh cũng dùng sức mạnh kinh tế làm công cụ để “cưỡng ép” như ngừng nhập khẩu thịt bò từ Australia. Đầu tuần này, Trung Quốc tuyên bố sẽ trừng phạt tập đoàn công nghiệp quốc phòng Lockheed Martin của Mỹ vì thương vụ bán vũ khí gần đây cho Đài Loan.\r\n\r\nNgoài ra, khi thế giới đang bận đối phó Covid-19, Trung Quốc bành trướng sức mạnh quân sự, leo thang căng thẳng với các nước trong khu vực. Nhật Bản cảnh báo, Trung Quốc đang tìm cách “thay đổi hiện trạng ở Biển Đông và Hoa Đông”.\r\n\r\nĐáp lại, Mỹ đã điều hai biên đội tàu sân bay đến Biển Đông. Căng thẳng khó tránh khỏi khi Mỹ đầu tuần này tiếp tục ra tuyên bố bác bỏ hầu hết yêu sách chủ quyền của Trung Quốc ở Biển Đông.\r\n\r\nMichael A. McFaul, cựu đại sứ Mỹ tại Nga và hiện là giáo sư nghiên cứu quốc tế tại Đại học Stanford, nhận định các hành động gần đây của Trung Quốc dường như “đi quá xa”.\r\n\r\n“Mối quan hệ Mỹ - Trung đang ở giai đoạn tồi tệ nhất kể từ khi hai bên thiết lập quan hệ. Thực tế mới là mối quan hệ Mỹ - Trung không bước vào một cuộc chiến tranh lạnh mới nhưng tiến dần đến một cuộc chiến bằng sức mạnh mềm”, ông Zhao Kejin, giáo sư quan hệ quốc tế tại Đại học Thanh Hoa, nhận định.</p>', 6, 2, 0, 1, 9, 1),
(3, '\"Đẳng cấp của bóng đá Việt Nam vẫn còn thua xa Trung Quốc\"', 'HLV U20 Trung Quốc, Cheng Yaodong đã có những chia sẻ trên tờ Sina về đẳng cấp giữa hai nền bóng đá Việt Nam và Trung Quốc.', 'https://icdn.dantri.com.vn/thumb_w/640/2020/12/28/u-22-vn-1609167187756.jpg', '2020-12-26', 3, '<p>Tờ báo này cũng đưa ra những so sánh về hai nền bóng đá: \"Trước đây, nếu các đội tuyển của Trung Quốc chạm trán Việt Nam, người hâm mộ sẽ đặt ra câu hỏi rằng chúng ta sẽ thắng họ bao nhiêu bàn và thắng như thế nào.\r\n\r\nThế nhưng gần đây, nhiều người coi bóng đá Việt Nam là mối đe dọa với bóng đá Trung Quốc và cho rằng đội tuyển Trung Quốc có thể sẽ bị đánh bại nếu đối đầu với đoàn quân HLV Park Hang Seo\r\n\r\nNhiều ý kiến cũng cho rằng bóng đá trẻ trong đó có U20 Trung Quốc sẽ phải lo lắng bởi mối đe dọa đến từ đối thủ Việt Nam, nhưng HLV Cheng Yaodong cho rằng đây là nhận định thiếu cơ sở. HLV Cheng khẳng định nếu chạm trán Việt Nam, ông sẽ cùng các học trò giành kết quả tốt để mang lại niềm vui cho người hâm mộ Trung Quốc\".\r\n\r\nTrong khoảng 2 năm trở lại đây, bóng đá Việt Nam có nhiều thành tựu hơn Trung Quốc. U23 Việt Nam giành ngôi á quân giải U23 châu Á 2018 và vào tứ kết Asian Cup 2019, đó là hai giải đấu bóng đá Trung Quốc bị loại ở vòng bảng và vòng 1/8.\r\n\r\nỞ VCK U23 châu Á 2020, U23 Việt Nam dù bị loại ở vòng bảng nhưng đoàn quân HLV Park Hang Seo hòa Jordan, UAE và thua Triều Tiên ở trận cuối. Trong khi đó, U23 Trung Quốc thua cả 3 trận trước Hàn Quốc, Uzbekistan và Iran.\r\n\r\nỞ cuộc đối đầu trực tiếp giữa hai đội hồi tháng 10/2019, U22 Việt Nam đã giành chiến thắng 2-0 trước U22 Trung Quốc trong trận giao hữu ngay ở sân khách, với cú đúp của tiền đạo Tiến Linh.\r\n\r\nĐó là trận đấu HLV Park Hang Seo đánh bại đồng nghiệp cũ Guus Hiddink và sau thất bại đó, chiến lược gia người Hà Lan bị sa thải.\r\n\r\n</p>', 10, 3, 0, 1, 4, 1),
(4, 'Sốc vì bị cắt một bên tinh hoàn, nam sinh rơi vào trầm cảm', 'Bị cắt một bên tinh hoàn do đến viện muộn, cậu sinh viên năm 2 một trường đại học tại Hà Nội cảm thấy mất tự tin, thậm chí rơi vào trầm cảm. Bác sĩ quyết định đặt tinh hoàn nhân tạo cho bệnh nhân.', 'https://icdn.dantri.com.vn/2020/09/13/tinhhoannhantao-11-1600007844353.jpg', '2020-12-26', 3, '<p>“Kỹ thuật đơn giản này nhưng nhiều khi có thể giúp cánh mày râu tìm lại sự tự tin, thậm chí là thay đổi cả cuộc đời”, BS Liên nói.\r\n\r\nThời điểm phẫu thuật đặt tinh hoàn nhân tạo thường được tiến hành sau phẫu thuật cắt tinh hoàn do xoắn thừng tinh, do ung thư  6 tháng; các trường hợp cắt tinh hoàn điều trị ung thư tuyến tiền liệt hoặc tinh hoàn teo do ẩn tinh hoàn có thể đặt cùng lúc mổ cắt tinh hoàn.\r\n\r\nTheo BS Liên, đặt tinh hoàn nhân tạo được chỉ định cho những trường hợp bị thiếu một hoặc cả hai bên tinh hoàn. Nguyên nhân có thể do bệnh lý ung thư, xoắn tinh hoàn dẫn đến hoại tử hoặc tinh hoàn ẩn bị teo… Khiếm khuyết về hình thể này thường khiến nam giới cảm giác mất đi nửa bản lĩnh đàn ông, dẫn đến mặc cảm tự ti đặc biệt trong đời sống tình dục. \r\n\r\nĐặc biệt khi nam giới có biểu hiện đau vùng bẹn bìu cần nghĩ ngay tới bệnh cảnh xoắn thừng tinh (còn gọi là xoắn tinh hoàn) như trường hợp bệnh nhân trên được xếp vào loại tối cấp cứu, bệnh nhân cần được xử trí càng nhanh càng tốt. Đây là hậu quả của sự lêch trục, gấp góc của thừng tinh gây hiện tượng giảm hay ngừng lưu thông dòng máu tới và đi của mạch máu trong thừng tinh. \r\n\r\nNam giới có thể có biểu hiện là đau vùng bẹn-bìu cấp tính, đột ngột. Cơn đau có thể lúc tăng lúc giảm nhưng nhìn chung sẽ không biến mất hoàn toàn. Ngoài ra, bệnh nhân có thể cảm thấy bìu phù nề, mất nếp nhăn, tinh hoàn cao, nằm ngang, nắn đau. \r\n\r\nTỷ lệ xoắn tinh hoàn thấp nhưng đa phần rơi và tuổi dậy thì hay xấu hổ nên hay chẩn đoán muộn. Xoắn tinh hoàn cũng hay bị chẩn đoán nhầm với các bệnh lý khác, đặc biệt là viêm tinh hoàn. Có rất nhiều trường hợp người bệnh bị xoắn tinh hoàn nhưng chẩn đoán nhầm với bệnh viêm tinh hoàn khiến cho người bệnh mất đi thời gian vàng cứu tinh hoàn, dẫn đến hoại tử tinh hoàn, phải cắt bỏ. \r\n\r\n“Độ tuổi hay gặp dưới 30, tuổi hay gặp nhất là 14 tuổi. Nếu được xử lý trước 6 giờ thì tinh hoàn có khả năng phục hồi gần như là 100%, sau 12 giờ tỷ lệ này giảm xuống 20%, sau 24 giờ thì hầu hết là không khả năng giữ lại được tinh hoàn”, BS Liên nhấn mạnh.\r\n\r\nVì thế, bác sĩ khuyên nam giới nếu có bất thường ở vùng bìu, đau nên đi khám sớm. Ở trẻ nhỏ nếu sờ không thấy tinh hoàn ở bìu thì nên đi khám sớm, nếu tinh hoàn ẩn thì hạ tinh hoàn xuống tránh bị teo, phải cắt bỏ để tránh ung thư hóa. </p>', 14, 4, 0, 1, 2, 1),
(5, 'Honor có được giấy phép kinh doanh với Microsoft', 'Theo ChinaDaily, Honor - đơn vị từng là thương hiệu con thuộc Huawei, đã có thể đảm bảo giấy phép cho Windows 10 từ Microsoft. Điều này cho phép Honor sử dụng hệ điều hành Windows 10 trên các laptop của hãng.', 'https://icdn.dantri.com.vn/thumb_w/640/2020/12/28/honor-1609128183630.jpg', '2020-12-26', 1, '<p>Theo ChinaDaily, Honor - đơn vị từng là thương hiệu con thuộc Huawei, đã có thể đảm bảo giấy phép cho Windows 10 từ Microsoft. Điều này cho phép Honor sử dụng hệ điều hành Windows 10 trên các laptop của hãng.\r\n\r\nNgoài việc mở lại kinh doanh với Microsoft, Honor còn hy vọng sẽ tiếp tục cho mối quan hệ với các nhà cung cấp khác của Mỹ, điển hình như Qualcomm.\r\n\r\n\"Honor rất vui mừng khi đạt được thỏa thuận hợp tác toàn cầu với Microsoft\", ông Zhao Ming, Giám đốc điều hành của Honor cho biết. \"Thông qua hệ điều hành và công nghệ chủ đạo, chúng tôi sẽ mang đến cho người tiêu dùng những sản phẩm PC có thiết kế nổi bật, hiệu năng mạnh mẽ và trải nghiệm hàng đầu\".\r\n\r\nXiang Ligang, Tổng giám đốc của Liên minh Tiêu thụ Thông tin, một hiệp hội ngành viễn thông, cũng cho biết: \"Với việc một công ty Mỹ hợp tác với Honor, nhiều công ty Mỹ có khả năng sẽ tham gia trong tương lai gần, điều này có thể giải quyết tốt hơn các vấn đề về chuỗi cung ứng của Honor\".\r\n\r\nTrước đó, với việc bị chính phủ Mỹ đưa vào danh sách cấm, Huawei đã phải bán Honor - thương hiệu chuyên về các dòng smartphone và laptop, PC giá rẻ với giá 15 tỷ USD cho Digital China - một công ty phân phối điện thoại smartphone tại Trung Quốc.\r\n\r\nViệc trở thành một thương hiệu hoàn toàn độc lập với Huawei làm bừng lên hy vọng hồi sinh cho thương hiệu từng xuất xưởng trên 70 triệu smartphone và nhiều thiết bị công nghệ khác mỗi năm.</p>', 18, 5, 1, 1, 125, 1),
(6, 'Chuyển đổi số trong đào tạo Hán ngữ thời 4.0', 'Hòa chung với xu thế giảng dạy trực tuyến, Hội thảo Khoa học quốc tế 2020 với chủ đề \"Đào tạo Hán ngữ ở Việt Nam trong kỷ nguyên 4.0\" được tổ chức vào ngày 26/12 tại trụ sở tiếng Trung THANHMAIHSK ở Hà Nội và trực tuyến thông qua phần mềm Zoom', 'https://icdn.dantri.com.vn/2020/12/27/chuyen-doi-so-trong-dao-tao-han-ngu-thoi-40-docx-1609082947327.png', '2020-12-23', 2, '<p>Nhiều năm trước, học trực tuyến tại Việt Nam thường được nhắc đến là một lựa chọn \"cực chẳng đã\". Tuy nhiên, sau khi dịch Covid 19 diễn ra, giảng dạy trực tuyến đã trở thành từ khóa \"hot\", là phương pháp \"cứu cánh\" cho ngành giáo dục, đặc biệt là đào tạo ngoại ngữ.\r\n\r\nNhư chúng ta đã biết, tiếng Trung là một trong những ngôn ngữ được dùng nhiều nhất trên thế giới chỉ sau tiếng Anh. Do đó, nhu cầu học và tìm hiểu tiếng Trung đang ngày càng tăng, nhất là trong giới trẻ. Với sự phát triển của công nghệ, thông qua các nền tảng trực tuyến, người học tiếng Trung hiện nay không chỉ được tiệm cận với kho tàng kiến thức rộng lớn mà còn được hòa mình vào nền văn hóa đa dạng của ngôn ngữ bản địa.\r\n\r\nHội thảo trực tuyến Khoa học quốc tế 2020\r\n\r\nHòa chung với xu thế giảng dạy trực tuyến, Hội thảo Khoa học quốc tế 2020 với chủ đề \"Đào tạo Hán ngữ ở Việt Nam trong kỷ nguyên 4.0\" được tổ chức vào ngày 26/12 tại trụ sở tiếng Trung THANHMAIHSK ở Hà Nội và trực tuyến thông qua phần mềm Zoom. Hội thảo khoa học quốc tế là sự kiện được THANHMAIHSK tổ chức thường niên từ năm 2018.Tham dự hội thảo là các chuyên gia, nhà nghiên cứu, giảng viên với nhiều năm kinh nghiệm nghiên cứu và giảng dạy Hán ngữ. Đặc biệt, hội thảo có sự góp mặt của các giáo sư đến từ các trường đại học danh tiếng của Trung Quốc như:\r\n\r\n- Giáo sư Ngô Trung Vỹ - 吴中伟 (Chủ biên giáo trình 速通汉语, giáo sư Đại học Phúc Đán)\r\n\r\n- Giáo sư Lý Bỉnh Chấn - 李秉震(Phó viện trưởng Học viện Văn hóa Quốc tế, giáo sư đại học Sư phạm Thủ Đô)\r\n\r\n- Giáo sư Chử Trạch Tường - 储泽祥 (Phó viện trưởng viện nghiên cứu Văn học, giáo sư Đại học Sư phạm Hoa Trung)\r\n\r\n- Phó giáo sư Hồ Văn Hoa - 胡文华 (Học viện Giao lưu văn hóa quốc tế, Đại học Phúc Đán)\r\n\r\nBuổi hội thảo đề cập đến các nội dung chính gồm: Đào tạo đội ngũ giáo viên, giảng viên; nghiên cứu về biên soạn và đánh giá giáo trình; nghiên cứu về phương pháp giảng dạy tiếng Hán. Đặc biệt, trong khuôn khổ hội thảo; các giáo sư, chuyên gia sẽ phát biểu, chia sẻ về các nghiên cứu, chủ đề:\r\n\r\n- Giáo sư Ngô Trung Vỹ: \"Chức năng \"kép\" của hoạt động nghe/ đọc và ý nghĩa trong dạy học tiếng Hán\"\r\n\r\n- Phó giáo sư Hồ Văn Hoa: \"Thiết kế, giảng dạy, áp dụng nguyên tắc học và vận dụng đồng thời bàn đến kết cấu giáo trình MSutong trung cấp\"\r\n\r\n- Giáo sư Lý Bỉnh Chấn: \"Thiết kế hệ thống khóa đào tạo giáo viên Hán ngữ\"\r\n\r\n- Giáo sư Chử Trạch Tường: \"Một số điều cần chú ý trong biên soạn giáo trình Hán ngữ cho học sinh Việt Nam\"</p>', 21, 6, 0, 1, 128, 1),
(7, 'Xót xa nhìn linh cữu cố danh hài đơn độc được chuyển từ máy bay tại Mỹ', 'Linh cữu cố danh hài Chí Tài về đến sân bay Los Angeles (Mỹ) an toàn lúc 8h05 (giờ địa phương) ngày 13/12. Hiện tại, bà xã của cố danh hài, cựu ca sĩ Phương Loan chưa thể nhìn mặt lần cuối.', 'https://icdn.dantri.com.vn/2020/12/14/b-21607877823612724506029-1607921624703.png', '2020-12-23', 2, '<p>Cũng theo thông tin từ ca sĩ Trizzle Phương Trinh, hiện tại, linh cữu cố danh hài được bảo quản tại nhà quàn Peak Family Funeral Home cho đến ngày tổ chức thánh lễ và thăm viếng. Ca sĩ Phương Loan cũng chưa được trực tiếp nhìn mặt chồng lần cuối.\r\n\r\nChia sẻ clip ghi lại khoảnh khắc linh cữu cố danh hài được chuyển từ máy bay xuống sân bay Mỹ, nữ ca sĩ không khỏi xót xa khi người đầu tiên đón anh trên đất Mỹ lại là một thợ máy làm ở sân bay tên Jimmy. Anh cũng là người ghi lại hình ảnh linh cữu cố danh hài mà cô chia sẻ.\r\n\r\n\"Thấy quan tài anh được đưa xuống máy bay trong cô quạnh mà xót xa tột cùng. Khi anh đi thì hàng ngàn người nối đuôi tiễn anh ra sân bay còn khi đến thì chỉ một mình anh trong chiếc quan tài lạnh lẽo không một người quen\", nữ ca sĩ đau lòng viết.\r\n\r\nNguyên văn bài viết trên trang cá nhân của vợ cũ ca sĩ Bằng Kiều đã được sự đồng ý của cựu ca sĩ Phương Loan: \"Rất nhiều fans của anh Chí Tài đang chờ đợi để biết thêm thông tin về việc thi thể anh được đưa về đến Mỹ như thế nào.\r\n\r\nTrước sự quan tâm và tình cảm của mọi người đã dành cho anh mình xin chia sẻ những gì mình biết qua sự đồng ý của chị Phương Loan.\r\n\r\nMáy bay đưa anh Chí Tài về Mỹ đã đáp xuống sân bay LAX sáng nay (13/12 theo giờ Mỹ) nhưng gia đình và bạn bè không được ra tận nơi để đón anh.\r\n\r\nNhân viên nhà quàn là người sẽ lo thủ tục giấy tờ để nhận linh cữu của anh và sau đó sẽ đem anh Tài về nhà quàn và chuẩn bị mọi thứ trước khi gia đình được đến gặp. Theo lời chị Phương Loan thì thứ ba này chị và gia đình mới có thể đến nhà quàn để gặp mặt anh Tài.\r\n\r\nVà vì bên California hiện đang có lệnh lockdown nên họ chỉ được phép cho 2 người vào bên trong nên chỉ có chị Phương Loan và anh Chí Thiện - anh trai Chí Tài sẽ có mặt ngày hôm đó.\r\n\r\nChương trình thăm viếng và tang lễ của anh Chí Tài sẽ được tổ chức vào ngày 18/12, các bạn nào muốn đến để tiễn đưa anh lần cuối xin xem tờ cáo phó từ gia đình\".\r\n\r\nSau khi nhận được đoạn clip nhân viên sân bay thay mặt gia đình ca sĩ Phương Loan để nhận linh cữu cố danh hài, Trizzie Phương Trinh xúc động chia sẻ thêm: \"Sáng nay có duy nhất một người đã thay mặt chị Phương Loan và hàng triệu người hâm mộ đón anh Chí Tài tại sân bay LAX.\r\n\r\nAnh là một thợ máy làm ở sân bay tên Jimmy, là người đã quay lại cái clip này. Thấy quan tài anh được đưa xuống máy bay trong cô quạnh mà xót xa tột cùng.\r\n\r\nKhi anh đi thì hàng ngàn người nối đuôi tiễn anh ra sân bay còn khi đến thì chỉ một mình anh trong chiếc quan tài lạnh lẽo không một người quen\".\r\n\r\nĐược biết, tang lễ tại Mỹ của cố danh hài Chí Tài sẽ diễn ra vào thứ 6 ngày 18/12 (giờ địa phương). Cụ thể, từ 11 - 17 giờ ngày 18/12, gia đình sẽ phát tang, làm thánh lễ cầu hồn và cho người thân, khán giả đến thăm viếng tại Công đoàn Giáo xứ Thánh Linh. Lễ an táng linh cữu cố nghệ sĩ sẽ diễn ra vào 10 giờ sáng ngày 19/12, thi hài sẽ được hỏa táng.<p>', 23, 7, 0, 1, 45, 1),
(8, 'Chàng trai từng bị chém đứt một chân làm video Youtube giúp đỡ mọi người', 'Có gia đình cùng với 2 con, một kênh Youtube giúp đỡ người nghèo... là tài sản vô giá của chàng trai \"Lương Phi một chân\".', 'https://icdn.dantri.com.vn/2020/12/27/chang-trai-mot-chan-lam-youtuber-giup-do-nguoi-kho-khandocx-1609086957325.jpeg', '2020-12-23', 1, '<p>Tên gọi \"Lương Phi một chân\" xuất hiện từ khi mới 3 tuổi Sau khi ra trường một thời gian, Phi được một mạnh thường quân giúp đỡ, mua sắm thiết bị mở một phòng thu ở Đà Nẵng. Công việc này nhẹ nhàng, phù hợp với khả năng của Phi và nguồn thu nhập cũng đủ cho anh phụ giúp ba mẹ. Khuyết tật về thân thể nhưng trái tim giàu lòng yêu thương</p>', 27, 8, 3, 1, 79, 1),
(9, 'Việt Nam tiếp tục lọt top điểm đến ẩm thực hàng đầu Châu Á', 'Đây là năm thứ 2 liên tiếp Việt Nam đứng đầu khu vực châu Á tại cả ba hạng mục: Điểm đến Di sản hàng đầu châu Á, Điểm đến Văn hóa hàng đầu châu Á và Điểm đến Ẩm thực hàng đầu châu Á.', 'https://icdn.dantri.com.vn/thumb_w/640/2020/11/11/img-26491496067078010-1605060685153.jpg', '2020-12-24', 3, '<p>Tổ chức World Travel Awards đã công bố kết quả bình chọn Giải thưởng Du lịch thế giới lần thứ 27 (WTA) khu vực châu Á năm 2020 bằng hình thức trực tuyến. Trong đó, Việt Nam vinh dự được gọi tên chiến thắng trong cuộc bình chọn các hạng mục: Điểm đến Di sản hàng đầu châu Á, Điểm đến Văn hóa hàng đầu châu Á và Điểm đến Ẩm thực hàng đầu châu Á. Trong khuôn khổ Giải thưởng Du lịch thế giới lần thứ 27 khu vực châu Á hạng mục giải thưởng dành cho các quốc gia chỉ có 4 nước đạt giải gồm: Việt Nam (3 giải), Philippines (2 giải), Singapore (1 giải), Lào (1 giải).</p>', 30, 9, 2, 1, 12, 1),
(1, 'Đại hội XIII của Đảng sẽ diễn ra từ ngày 25/1 đến 2/2/2021 tại Hà Nội', 'Tại Hội nghị lần thứ 14 Ban Chấp hành Trung ương Đảng khóa XII, Ban Chấp hành Trung ương Đảng quyết định triệu tập Đại hội XIII từ ngày 25/1/2021 đến ngày 2/2/2021 tại Thủ đô Hà Nội.', 'https://icdn.dantri.com.vn/thumb_w/640/2020/12/23/daihoi-dang-1608727537528.jpg', '2020-12-28', 1, '<p>Hội nghị lần thứ 14 Ban Chấp hành Trung ương Đảng khóa XII họp từ ngày 14/12/2020 đến ngày 18/12/2020 tại Thủ đô Hà Nội.\r\n\r\nTại Hội nghị, Ban Chấp hành Trung ương Đảng quyết định triệu tập Đại hội XIII từ ngày 25/1/2021 đến ngày 2/2/2021 tại Thủ đô Hà Nội.\r\n\r\nNhư đã đưa tin, tại Hội nghị lần thứ 14, Ban Chấp hành Trung ương đã thảo luận dân chủ, kỹ lưỡng, bỏ phiếu biểu quyết với sự nhất trí rất cao nhân sự tham gia Bộ Chính trị, Ban Bí thư khóa XIII, bao gồm cả nhân sự Bộ Chính trị, Ban Bí thư khóa XII tái cử và nhân sự lần đầu tham gia Bộ Chính trị, Ban Bí thư; giao Bộ Chính trị và Tiểu ban Nhân sự tiếp tục xem xét, bổ sung, hoàn thiện các phương án nhân sự để báo cáo Ban Chấp hành Trung ương xem xét, quyết định tại Hội nghị Trung ương 15 sắp tới.\r\n \r\nCũng tại hội nghị, Trung ương thống nhất cao với các Tờ trình của Bộ Chính trị về dự kiến Chương trình, nội dung Đại hội, Quy chế làm việc, Quy chế bầu cử tại Đại hội và khẳng định tinh thần chung là phải phát huy dân chủ, trí tuệ, tâm huyết của mỗi đại biểu dự Đại hội; đồng thời phải thực hiện nghiêm, giữ vững kỷ cương, kỷ luật của Đảng, trách nhiệm của cá nhân mỗi đại biểu, đặc biệt là vai trò nêu gương của các đồng chí Ủy viên Trung ương Đảng khóa XII và các đồng chí trưởng đoàn. Ban Chấp hành Trung ương giao cho Bộ Chính trị tiếp thu ý kiến của Trung ương, tiếp tục hoàn thiện các Dự thảo để trình Đại hội XIII xem xét, quyết định.\r\n \r\nTại hội nghị, Ban Chấp hành Trung ương đã xem xét cho ý kiến về: Báo cáo tổng kết thực hiện Quy chế làm việc của Ban Chấp hành Trung ương, Bộ Chính trị và Ban Bí thư khóa XII; Báo cáo tổng kết công tác kiểm tra, giám sát và thi hành kỷ luật đảng nhiệm kỳ Đại hội XII; Báo cáo tổng kết thực hiện Quy chế làm việc của Ủy ban Kiểm tra Trung ương khóa XII; Báo cáo những công việc quan trọng Bộ Chính trị đã giải quyết từ sau Hội nghị Trung ương 13 đến Hội nghị Trung ương 14 khóa XII.\r\n \r\nBan Chấp hành Trung ương giao cho Bộ Chính trị và Ủy ban Kiểm tra Trung ương nghiên cứu, tiếp thu ý kiến của Trung ương, tiếp tục hoàn chỉnh các báo cáo tổng kết và bàn giao cho Ban Chấp hành Trung ương và Ủy ban Kiểm tra Trung ương khóa XIII xem xét, quyết định khi sửa đổi, bổ sung Quy chế làm việc của khóa tới.</p>', 1, 1, 9, 1, 32, 1),
(349, 'Thủ tướng dự lễ kỷ niệm 75 năm Ngày Tổng Tuyển cử đầu tiên', 'Ngày 3/1, tại TP Tam Kỳ, Quảng Nam, Thủ tướng Nguyễn Xuân Phúc dự buổi gặp mặt kỷ niệm 75 năm Ngày Tổng Tuyển cử đầu tiên bầu Quốc hội Việt Nam (6/1/1946 - 6/1/2021).', 'https://icdn.dantri.com.vn/2021/01/03/thu-tuong-nguyen-xuan-phuc-du-ky-niem-75-nam-ngay-tong-tuyen-cu-dau-tien-3-1609663253016.jpeg', '2021-01-06', 3, '<p>Tại buổi lễ, các đại biểu đã cùng nhau ôn lại truyền thống 75 năm của Quốc hội Việt Nam và đóng góp của các thế hệ đại biểu Quốc hội tỉnh Quảng Nam qua 14 nhiệm kỳ. Quốc hội luôn là hiện thân của khối đại đoàn kết toàn dân tộc; là cơ quan đại biểu cao nhất của nhân dân, cơ quan quyền lực Nhà nước cao nhất của nước Cộng hòa xã hội chủ nghĩa Việt Nam, gắn bó chặt chẽ và có trách nhiệm với cử tri, luôn đại diện cho ý chí và nguyện vọng của nhân dân…\r\n\r\nTrải qua 14 khóa Quốc hội, Đoàn đại biểu Quốc hội tỉnh Quảng Nam luôn cố gắng phấn đấu hoàn thành trách nhiệm được Đảng và nhân dân giao phó, tổ chức tốt các hoạt động theo quy định của pháp luật. Duy trì thường xuyên các hoạt động tiếp xúc cử tri, đến tận các xã miền núi, vùng sâu, vùng xa, biên giới, hải đảo, những nơi có điều kiện giao thông đi lại khó khăn để kịp thời truyền đạt, trao đổi, cung cấp thông tin, lắng nghe các ý kiến, kiến nghị của cử tri…\r\n\r\nTrong nhiệm kỳ qua, Đoàn đại biểu Quốc hội tỉnh Quảng Nam đã tổ chức lấy ý kiến góp ý vào hầu hết các dự án luật, bộ luật trình tại các kỳ họp Quốc hội bằng nhiều hình thức; trong đó, chú trọng việc tổ chức lấy ý kiến các dự án luật có phạm vi, đối tượng tác động rộng, ảnh hưởng lớn đến phát triển kinh tế - xã hội, quốc phòng, an ninh, đời sống của nhân dân.\r\n\r\nPhát biểu tại buổi gặp mặt, Thủ tướng Chính phủ Nguyễn Xuân Phúc bày tỏ sự tri ân, tưởng nhớ các đồng chí nguyên Đại biểu Quốc hội đã mất như Võ Chí Công, Mai Thúc Lân, Trương Quang Được...Thủ tướng khẳng định, sự kiện Quốc hội khóa I là một sự kiện trọng đại của dân tộc Việt Nam, là dân tộc đầu tiên Đông Nam Á làm cuộc cách mạng giải phóng dân tộc thành công, trở thành dân tộc đầu tiên thiết lập Nhà nước có thể chế, chính trị cao nhất… Dân chủ bắt đầu từ đây, chúng ta chuyển từ quân chủ lập hiến sang dân chủ.\r\n\r\nThủ tướng Nguyễn Xuân Phúc một lần nữa khẳng định, cuộc Tổng tuyển cử năm 1946 là sự kiện có ý nghĩa rất quan trọng. Thứ nhất, thành công của cuộc Tổng tuyển cử đã và đang để lại bài học kinh nghiệm quý báu có thể vận dụng trong việc hoàn thiện chế độ bầu cử hiện nay, đó là Tổng tuyển cử để xây dựng chính quyền của dân, do dân, vì dân.\r\n\r\nThứ hai, tin tưởng phát huy tinh thần làm chủ của nhân dân trong công tác kiến quốc, lôi cuốn nhân dân tham gia công việc của Nhà nước. Thứ ba là đảm bảo quyền tự do bầu cử với những quy định linh động, sáng tạo. Thứ tư, đảm bảo vận động bầu cử dân chủ, tìm người có đức, có tài gánh vác việc nước.\r\n\r\nThủ tướng nói thêm, là người con Quảng Nam từng tham gia nhiều khóa Quốc hội, HĐND, từ trong tim mình Thủ tướng bày tỏ lòng cảm ơn Đảng bộ, chính quyền, đặc biệt nhân dân tỉnh Quảng Nam, những cử tri đã tin tưởng bầu Thủ tướng làm Đại biểu Quốc hội; đồng thời bày tỏ lòng biết ơn đối với các bậc tiền bối, những người đi trước đã dìu dắt Thủ tướng trong thời gian dài công tác tại tỉnh Quảng Nam để có được thành công như ngày hôm nay.</p>', 2, 1, 0, 1, 0, 1),
(350, 'Chòng chành vượt sông dữ tìm con chữ', 'Người dân ở nóc Tắk Rối, xã Trà Tập, huyện Nam Trà My luôn khát vọng có một cây cầu để có thể vận chuyển nhu yếu phẩm, lưu thông hàng hóa và các em học sinh có thể vững bước đến trường…', 'https://icdn.dantri.com.vn/2021/01/05/nguoi-dan-va-hoc-sinh-vung-cao-chong-chanh-qua-song-lam-an-tim-con-chu-7-1609837248701.jpeg', '2021-01-06', 4, '<p>Đánh cược cuộc sống với Hà bá\r\n\r\nSau những cơn lũ dữ, trời tạnh ráo, chúng tôi đặt chân tới làng Tắk Rối (thôn 3, xã Trà Tập, huyện Nam Trà My, tỉnh Quảng Nam) nơi được mệnh danh là \"Làng đảo giữa rừng sâu\". Sở dĩ nơi đây có tên gọi như vậy bởi lẽ, để lên được làng, người dân phải lội suối, chèo ghe vượt qua con sông Tranh hung dữ trong mùa mưa. Từ quốc lộ 40B nhìn qua bên kia, ngôi làng Tắk Rối hiện ra với hàng chục mái nhà lúp xúp. Để qua bên kia sông vào nóc Tắk Rối, chúng tôi liều mình ngồi lên chiếc ghe mỏng manh làm bằng nhôm mà hàng ngày vẫn đưa người dân làng Tắk Rối vào ra làng, học sinh hàng ngày vẫn đến trường trên chiếc ghe này.\r\n\r\nHôm chúng tôi đến, người dân làng Tắk Rối đang tranh thủ hoàn thiện chiếc bè bằng phao. Chiếc bè được kết lại bằng 8 thùng phuy nhựa, trên đặt những tấm ván gỗ. Để có chiếc bè bằng phao này, thầy giáo Lê Huy Phương - Hiệu trưởng trường Phổ thông Dân tộc bán trú tiểu học Trà Tập đã đi vận động các Mạnh Thường Quân giúp đỡ cho học sinh và người dân đi lại cho an toàn.\r\nNhư cơn bão số 9 vào tháng 10/2020, học sinh đành phải nghỉ học dài ngày khi nước sông dâng cao; nhiều trường hợp ốm đau, bệnh tật vào những ngày nước lớn cũng không thể nào sang sông. Người dân cho biết, đã có lần nhiều người cố vượt nhưng đã không may bị dòng nước hung tợn cuốn trôi.\r\n\r\nDù biết nguy hiểm là vậy nhưng không có con đường nào khác, hằng ngày người dân, các em học sinh nơi đây vẫn bất chấp hiểm nguy đi qua sông để làm ăn buôn bán và đi tìm con chữ.\r\n\"Ở đây nhiều người đã bỏ mạng rồi, mỗi lần ai lên ghe để vượt sông thì đều lo sợ, nhưng mà vì công việc, bà con phải mặc kệ đi qua thôi. Ước mơ lớn nhất của bà con ở đây là có được một cây cầu để đi qua sông được an toàn\", anh Thịnh cho biết.\r\n\r\nKhông những anh Thịnh, hàng chục hộ dân ở nóc Tắk Rối mong mỏi có cây cầu để ra ngoài làm ăn, đưa hàng hóa ra bán cho thương lái, mua lương thực thực phẩm về; đặc biệt là hàng chục em học sinh được đi học an toàn.\r\n\r\nChông chênh đường đến trường\r\n\r\nĐể phục vụ cho học sinh nóc Tắk Rối, các Mạnh Thường Quân đã cùng nhau xây dựng một điểm trường. Điểm trường này thuộc trường Phổ thông Dân tộc bán trú tiểu học Trà Tập, có 1 thầy và 1 cô với 30 em học sinh con em đồng bào Cadong, gồm 1 lớp mẫu giáo và 1 lớp tiểu học được khánh thành vào tháng 10/2019.\r\n</p>', 3, 1, 0, 0, 0, 1),
(351, 'Vụ dân dựng lều \"canh\" nhà máy xả thải: Hé lộ dấu hiệu gây ô nhiễm', 'Cơ quan chức năng tỉnh Hòa Bình đã phát hiện các dấu hiệu gây ô nhiễm môi trường tại Công ty TNHH MDF Hòa Bình, yêu cầu khắc phục, khi có kết quả quan trắc sẽ xử lý theo quy định.', 'https://icdn.dantri.com.vn/2020/12/24/3-1608782108038.jpg', '2021-01-06', 3, '<p>Liên quan đến vụ việc người dân xã Lạc Thịnh, huyện Yên Thủy (Hòa Bình) dựng lều \"canh\" hiện trường xả thải chưa qua xử lý, gây ô nhiễm môi trường của Công ty TNHH MDF Hòa Bình, quá trình xác minh Sở TN&MT tỉnh Hòa Bình đã phát hiện nhiều dấu hiệu gây ô nhiễm môi trường của công ty này.\r\n\r\nCụ thể, kiểm tra bên trong khuôn viên công ty, nước thải và bùn thải đổ vào khu đất trong khoảng 3m2, một số điểm nước thải bị rò rỉ ra bên ngoài khu đất trống bên cạnh các bể bê tông chứa nước thải sản xuất. Hệ thống thu gom nước mưa chảy tràn, có một số đoạn xuống cấp, bị bồi lấp gây tắc nghẽn.\r\n\r\nCông ty mới xây dựng thêm 1 bể bê tông chứa nước thải sản xuất, dung tích 80m3. Tổng cộng có 3 bể bê tông có chứa nước thải sản xuất lộ thiên có bùn màu đen (gồm 2 bể 50m3 và bể 80m3). Tro xỉ, đất đá thải được tập kế lộ thiên tại khu vực sản xuất chứa nguyên liệu của công ty.\r\n\r\nBên ngoài khuôn viên công ty có hiện tượng nước thải màu đen, dạng bột ngấm qua bờ tường bên cạnh vườn mía; tại rãnh nước chảy ra mương còn tù đọng nước màu đen; trên bờ tường xi măng một số chỗ bị vỡ, có bột đen bám trên mặt đá. Có 3 điểm xả nước mưa, nước thải từ khuôn viên ra bên ngoài công ty, trong đó, 1 điểm đã được bịt kín, 1 điểm bịt dở dang, có hiện tượng phát sinh nước thải màu đen và 1 điểm xả hở có nước mưa sạch.Tại thời điểm kiểm tra, công ty chưa ký hợp đồng với đơn vị có chức năng thu gom bùn thải tại hệ thống xử lý nước thải đảm bảo theo đúng quy định. Chưa bố trí công đoạn băm gỗ trong nhà xưởng có mái che, tránh nước mưa cuốn theo dăm gỗ xuống hệ thống thu gom, thoát nước mưa gây tắc nghẽn đường ống và ô nhiễm môi trường. Chưa nâng cấp, cải tạo hệ thống thoát nước mưa tách biệt với hệ thống thu gom nước thải.\r\n\r\nĐoàn kiểm tra đã yêu cầu công ty xử lý triệt để nước thải và bùn đen gây ô nhiễm môi trường đất trong khuôn viên công ty; có phương án thu gom toàn bộ nước thải từ công đoạn nghiền nguyên liệu về trạm xử lý nước thải tập trung, tránh để rò rỉ ra mương thu gom nước mưa. Cải tạo, nâng cấp hệ thống thu gom nước mưa chảy tràn.\r\n\r\nCông ty phải có phương án bao che kín cho toàn bộ 3 bể chứa nước thải sản xuất, bố trí để tách dầu mỡ tại xưởng cơ khí của khu vực sửa chữa. Có phương án bao che khu vực chứa nguyên liệu dăm gỗ, không để nguyên liệu ngoài trời gây ô nhiễm môi trường khi có mưa.</p>', 4, 1, 0, 0, 0, 1),
(352, 'Cô gái trẻ buông tay lái xe máy để… múa quạt!', 'Một cô gái không đội mũ bảo hiểm, điều khiển xe máy chạy khá nhanh trên cầu rồi bất ngờ buông tay lái để... múa quạt, đùa giỡn cùng nhóm bạn đi cùng.', 'https://icdn.dantri.com.vn/2021/01/05/quang-ngai-xac-minh-co-gai-buong-tay-lai-xe-may-de-mua-quat-1-1609837648423.jpeg', '2021-01-06', 2, '<p>Hai ngày qua, trên mạng xã hội xuất hiện một clip dài 29 giây ghi lại cảnh một cô gái điều khiển xe máy chạy với tốc độ cao có nhiều hành vi vi phạm Luật Giao thông đường bộ.  Theo đó, cô gái trong đoạn clip điều khiển xe máy nhưng không đội mũ bảo hiểm. Đáng nói hơn, khi xe đang chạy, cô gái này đã buông tay lái để… múa quạt và có nhiều hành động trêu đùa nhóm bạn đi cùng.  Hình ảnh trong clip cho thấy, chiếc xe máy mang biển kiểm soát của tỉnh Quảng Ngãi. Địa điểm cô gái \"biểu diễn\" được xác định là cầu Thạch Bích (phường Lê Hồng Phong, TP. Quảng Ngãi).Chiều 5/1, trao đổi với PV Dân trí, đại diện đội CSGT Công an TP. Quảng Ngãi cho biết đã nắm được thông tin báo chí phản ánh; qua đó đã tiến hành xác minh, mời cô gái trong đoạn clip đến làm rõ vụ việc và sẽ có thông tin cụ thể cho báo chí.</p>', 5, 1, 0, 0, 0, 1),
(353, 'Phát hiện chủng vi rút SARS-CoV-2 có nguy cơ kháng vắc xin', 'Giới chức Anh cảnh báo chủng vi rút SARS-CoV-2 đột biến bị phát hiện ở Nam Phi có nguy cơ kháng vắc xin Covid-19.', 'https://icdn.dantri.com.vn/2021/01/05/viruscorona-1583210194523-1609821262479.jpg', '2021-01-06', 1, '<p>Trong bài trả lời phỏng vấn BBC Radio hôm 4/1, Bộ trưởng Y tế Anh Matt Hancock cảnh báo rằng biến chủng vi rút SARS-CoV-2 phát hiện ở Nam Phi ẩn chứa nhiều rủi ro hơn chủng được tìm thấy ở Anh vài tuần trước.\r\n\r\n\"Tôi rất lo ngại về biến chủng ở Nam Phi. Đó là một vấn đề rất nghiêm trọng. Nó còn ẩn chứa nhiều vấn đề hơn cả chủng vi rút mới ở Anh\", ông Hancock cho hay.\r\n\r\nLời cảnh báo của quan chức Anh được đưa ra sau khi các nhà khoa học bày tỏ lo ngại rằng biến chủng Nam Phi có thể ẩn chứa nguy cơ kháng những vắc xin Covid-19 đã được hoặc đang chờ được cấp phép ở châu Âu và Mỹ.\r\n\r\nGiáo sư ngành miễn dịch học ở đại học Oxford John Bell - người góp công điều chế vắc xin của AstraZeneca, nói rằng có \"một câu hỏi lớn\" về việc liệu các vắc xin hiện tại liệu có hoạt động hiệu quả với biến chủng Nam Phi không.\r\n\r\nÔng Bell nói rằng khả năng biến chủng trên làm vô hiệu hóa vắc xin có thể khó xảy ra, nhưng các vắc xin có thể cần phải được điều chỉnh để có thể đạt được khả năng bảo vệ người được tiêm trước chủng vi rút được tìm thấy ở Nam Phi.\r\n\r\nTrong khi đó, giáo sư Shabir Madhi, nhà nghiên cứu vắc xin AstraZeneca ở Nam Phi, nói với CBS News rằng có 13 biến chủng vi rút corona bị phát hiện ở quốc gia này kể từ khi dịch bùng phát. Ông Madhi cho biết chủng mới mang mã hiệu 501.V2 đang lây lan \"như cháy rừng\" ở các thành phố duyên hải Nam Phi là biến chủng gây lo ngại lớn nhất. Ông cũng cảnh báo, vắc xin có thể sẽ không hoạt động hiệu quả hết khả năng trên biến chủng này.</p>', 7, 2, 0, 1, 0, 1),
(354, 'Hy hữu vụ máy bay chiến đấu Mỹ từng tự nã hỏa lực vào chính mình', 'Một phi công lái máy bay chiến đấu F-11 Tiger đã lỡ tay bắn vào chính tiêm kích mà mình đã điều khiển trong một bài thử nghiệm 65 năm trước.', 'https://icdn.dantri.com.vn/2021/01/05/1280-px-f-11-f-tiger-nat-cinflight-1609834721581.jpg', '2021-01-06', 1, '<p>Theo Popular Mechanics, năm 1956, nhà thầu quốc phòng Grumman của Mỹ đã thử nghiệm dòng máy bay chiến đấu của họ mang tên F-11 Tiger, tại bờ biển bang New York.\r\n\r\nPhi công đã nã một lượng hỏa lực từ pháo trên máy bay và một lúc sau, chiếc F-11 gặp phải thiệt hại nghiêm trọng một cách bí ẩn khi kính chắn gió và động cơ bị hỏng nặng.\r\n\r\nVào thời điểm đó, F-11 là tiêm kích siêu âm thứ 2 trong biên chế của hải quân Mỹ, có khả năng bay với tốc độ Mach 1.1. F-11 cũng đồng thời là tiêm kích siêu âm của Grumman.\r\n\r\nVào ngày 21/9/1956, theo DataGenetics, phi công lái thử của Grumman đưa chiếc F-11 tới bờ biển Long Island và hạ mũi máy bay xuống 20 độ, rồi nhằm bắn vào một điểm trống trên dại dương. Trong 4 giây, phi công nhấn nút bắn một loạt ngắn từ 4 khẩu pháo 20 mm Colt Mk.12 của F-11 rồi đưa mũi máy bay xuống thấp hơn và kích hoạt chế độ đốt nhằm khiến vũ khí tăng tốc.\r\n\r\nMột phút sau đó, kính chắn gió của chiếc F-11 đột ngột bị hỏng và động cơ phát ra những tiếng động lạ rồi tắt khi phi công cố gắng quay đầu trở lại sân bay Long Island của nhà thầu Grumman.\r\n\r\nPhi công lái thử cho rằng chiếc F-11 bị đâm phải chim, tuy nhiên kết quả điều tra cho thấy nguyên nhân bất ngờ: Khi hạ độ cao, phi công đã đưa máy bay đi vào luồng đạn của khẩu pháo 20mm.\r\n\r\nVào thời điểm đạn được phóng ra, dù đi với vận tốc rất nhanh nhưng chúng bị giảm tốc độ do lực cản của không khí xung quanh, trong khi đó máy bay F-11 lại tăng tốc và vì thế nó đã tự hứng đạn của chính mình.\r\n\r\nChiếc F-11 bị hư hỏng sau cuộc bay thử và phi công bị thương nặng và mất nhiều tháng mới có thể quay trở lại bầu trời. Hải quân Mỹ chỉ đặt mua 200 chiếc F-11 và rút chúng khỏi biên chế khi các máy bay tốt hơn như F-8 Crusader và F-4 Phantom II ra đời.  \r\n\r\n</p>', 8, 2, 0, 1, 0, 1),
(355, '20 sinh viên Việt mắc Covid-19 trong ổ dịch tại Hàn Quốc', '20 sinh viên Việt Nam cùng sống tại ký túc xá của một trường cao đẳng ở tỉnh Chungcheong, Hàn Quốc đã bị mắc Covid-19.', 'https://icdn.dantri.com.vn/2020/12/16/restmbidxmake-1608092827229.jpg', '2021-01-06', 2, '<p>Hãng tin Yonhap (Hàn Quốc) ngày 16/12 dẫn thông báo của các quan chức địa phương cho biết, 20 sinh viên Việt Nam cùng sống chung trong một ký túc xá đã được chẩn đoán mắc Covid-19 khi ổ dịch bùng phát tại trường cao đẳng Ajou Motor ở Boryeong, tỉnh Chungcheong, cách thủ đô Seoul khoảng 200 km về phía nam. Đây cũng là cụm dịch lây nhiễm mới nhất tại Hàn Quốc.\r\n\r\nTrường Ajou Motor ghi nhận ca nhiễm đầu tiên vào ngày 14/12, khi một sinh viên Việt Nam sống trong ký túc xá có kết quả xét nghiệm dương tính với vi rút corona gây đại dịch Covid-19.\r\n\r\nCác nhà chức trách y tế sau đó đã tiến hành xét nghiệm đối với tất cả những người bị nghi tiếp xúc với ca nhiễm đầu tiên trên. Nhóm này gồm 67 người sống trong ký túc xá dành cho sinh viên nước ngoài (gồm 59 người từ Việt Nam, 7 người từ Uzberkistan và 1 người từ Thái Lan), 64 người sống trong ký túc xá dành cho sinh viên Hàn Quốc và 31 nhân viên trong trường.\r\n\r\nSau khi xét nghiệm, thêm 19 sinh viên Việt Nam được xác nhận nhiễm bệnh. Các nhà chức trách cũng xét nghiệm đối với toàn bộ 300 người khác sống tại ký túc xá vào ngày 16/12.\r\n\r\nCác cơ quan chức năng thành phố đang tiến hành điều tra lịch trình đi lại và con đường lây nhiễm của bệnh nhân. Họ nghi ngờ rằng quá trình lây nhiễm xảy ra do các bệnh nhân tiếp xúc gần trong các phòng ký túc xá.\r\n\r\nTrong những tuần gần đây, hàng loạt ổ dịch lây nhiễm Covid-19 đã bùng phát tại các viện dưỡng lão, nhà thờ, cơ sở giáo dục và những cơ sở khác trên khắp Hàn Quốc. Nước này ghi nhận khoảng 1.000 ca nhiễm mới mỗi ngày.\r\n\r\nHàn Quốc đang đẩy nhanh việc biến công-ten-nơ thành giường bệnh nhằm san sẻ bớt áp lực cho các cơ sở y tế đang \"căng mình\" đối phó với làn sóng lây nhiễm Covid-19 mới nhất. Hàn Quốc hiện có hơn 45.000 ca mắc Covid-19 và hơn 600 người thiệt mạng.</p>', 9, 2, 0, 1, 0, 1),
(356, 'Sergio Ramos đẩy Real Madrid vào thế cực khó', 'Theo Cadena SER và El Chiringuito, đội trưởng Real Madrid, Sergio Ramos đã nói thẳng với Chủ tịch Florentino Perez rằng muốn tìm kiếm thử thách mới.', 'https://icdn.dantri.com.vn/2021/01/05/29654466086484825601440-1609854067431.jpg', '2021-01-06', 1, '<p>Bản hợp đồng của Sergio Ramos với Real Madrid sẽ hết hạn vào cuối mùa giải này. Mặc dù vậy, cuộc đàm phán giữa hai bên đang lâm vào bế tắc trong thời gian qua khi hai bên không tìm được tiếng nói chung.\r\nTheo hai tờ Cadena SER và El Chiringuito, Ban lãnh đạo của Real Madrid đã đưa ra hai phương án cho Sergio Ramos. Ở phương án đầu tiên, họ vẫn giữ nguyên mức lương 15 triệu euro/năm nhưng ký hợp đồng 1 năm. Thứ hai, nếu Sergio Ramos muốn ký hợp đồng 2 năm thì sẽ phải giảm lương 10%.\r\n\r\nĐương nhiên, Sergio Ramos đã không hài lòng với cả hai phương án này. Đội trưởng của Real Madrid khẳng định muốn ký hợp đồng có thời hạn từ 1 năm trở lên và muốn giữ nguyên mức lương.\r\n\r\nMọi chuyện còn đẩy lên căng thẳng hơn khi không bên nào chịu bên nào. Sergio Ramos được cho là đã tới gặp Chủ tịch của Real Madrid, Florentino Perez để nói rõ nguyện vọng của mình.\r\n\r\nTrung vệ sinh năm 1986 khẳng định anh sẵn sàng \"lắng nghe lời đề nghị từ các CLB khác\" nếu như Real Madrid không đáp ứng yêu cầu. Đáp lại, người đứng đầu Los Blancos lại tuyên bố nếu không chấp nhận thì Sergio Ramos tùy ý lựa chọn nơi nào có đề nghị tốt hơn.\r\n\r\n\r\n</p>', 11, 3, 0, 1, 0, 1),
(357, 'Đối thủ quỳ gối xin hàng, võ sĩ bật khóc nức nở', ' Sau chiến thắng nghẹt thở trước nhà vô địch Olympic, Luke Campbell, võ sĩ trẻ Ryan García đã không kìm được những giọt nước mắt.', 'https://icdn.dantri.com.vn/2021/01/03/screenshot-2-1609669610479.jpg', '2021-01-06', 3, '<p>Võ sĩ trẻ Ryan García (22 tuổi), người đang sở hữu chuỗi 20 trận thắng trong sự nghiệp, đã đối đầu với nhà vô địch Olympic 2012, Luke Campbell (33 tuổi) trong trận tranh đai WBC hạng nhẹ của làng quyền anh tại Texas (Mỹ) vào ngày 3/1.\r\n\r\nĐây là trận đấu rất đáng được mong chờ giữa sức trẻ và kinh nghiệm. Thực tế, nó đã diễn ra vô cùng hấp dẫn khiến cho những người hâm mộ không thể rời mắt khỏi màn hình.\r\nKinh nghiệm đã giúp Luke Campbell thắng thế trong thời gian đầu trận. Thậm chí, tới hiệp đấu thứ 2, Luke Campbell đã khiến cho Ryan García ngã xuống sàn sau pha phản đòn ngoạn mục. Trọng tài đã phải đếm thời gian cho Ryan Garcia. Dù vậy, sau đó, võ sĩ người Mỹ đã có thể tiếp tục thi đấu.\r\n\r\nCàng về cuối trận, sức trẻ của Ryan Garcia lại có lợi thế. Võ sĩ 22 tuổi này tỏ ra lì đòn và chờ đợi thời cơ để tận dụng sơ hở của đối thủ. Tới phút thứ 7, Ryan Garcia đã thành công. Sau pha né đòn đẹp mắt, trước khi tung ra cú phản đòn vào mạng sườn của đối thủ.\r\nCú đấm này đã khiến cho Luke Campbell không thể đứng vững. Võ sĩ này đã quỳ gối trên võ đài và chấp nhận thất bại bằng knock-out.\r\n\r\nViệc giành chiến thắng lớn đầu tiên trong sự nghiệp khiến cho Ryan García không kìm được những giọt nước mắt. Anh đã ăn mừng trong niềm hạnh phúc ngập tràn sau trận đấu.</p>', 12, 3, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_type`
--

CREATE TABLE `news_type` (
  `idLT` int(11) NOT NULL,
  `TenLT` varchar(100) NOT NULL DEFAULT '',
  `AnHien` int(1) NOT NULL DEFAULT 1,
  `idTL` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news_type`
--

INSERT INTO `news_type` (`idLT`, `TenLT`, `AnHien`, `idTL`) VALUES
(1, 'Đại hội Đảng', 1, 1),
(2, 'Chính trị', 1, 1),
(3, 'Phóng sự-Ký sự', 1, 1),
(4, 'Môi trường', 1, 1),
(5, 'Giao thông', 1, 1),
(6, 'Châu Á', 1, 2),
(7, 'EU&Nga', 1, 2),
(8, 'Châu Mỹ', 1, 2),
(9, 'Kiều bào', 1, 2),
(10, 'Bóng đá trong nước', 1, 3),
(11, 'Bóng đá Châu Âu', 1, 3),
(12, 'Võ thuật', 1, 3),
(13, 'Tennis', 1, 3),
(14, 'Kiến thức giới tính', 1, 4),
(15, 'Tư vấn', 1, 4),
(16, 'Làm đẹp', 1, 4),
(17, 'Covid-19', 1, 4),
(18, 'Di động - Viễn thông', 1, 5),
(19, 'Điện tử - Tiêu dùng', 1, 5),
(20, 'Nghe nhìn', 1, 5),
(21, 'Khuyến học', 1, 6),
(22, 'Gương sáng', 1, 6),
(23, 'Đời sống văn hóa', 1, 7),
(24, 'Điện ảnh', 1, 7),
(25, 'Âm nhạc', 1, 7),
(26, 'Văn học', 1, 7),
(27, 'Người Việt', 1, 8),
(28, 'Teen đẹp', 1, 8),
(29, 'Phóng sự trẻ', 1, 8),
(30, 'Tin tức', 1, 9),
(31, 'Khám phá', 1, 9),
(32, 'Món ngon-Điểm đẹp', 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL DEFAULT '',
  `Username` varchar(50) NOT NULL DEFAULT '',
  `Password` varchar(50) NOT NULL,
  `urlImg` varchar(255) DEFAULT NULL,
  `Dienthoai` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL DEFAULT '',
  `NgayDangKy` date DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` tinyint(1) DEFAULT NULL,
  `Admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `HoTen`, `Username`, `Password`, `urlImg`, `Dienthoai`, `Email`, `NgayDangKy`, `NgaySinh`, `GioiTinh`, `Admin`) VALUES
(1, 'Nguyễn Văn Tiến', 'nguyenvantien', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '09584885', 'tiennguyenvan@localhost.com', '2009-01-20', '2020-12-30', 1, 1),
(2, 'Phạm Văn Hoàn', 'phamhoan', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '0377799198', 'phamhoan020501@gmail.comm', '2009-01-22', '1972-01-01', 0, 1),
(3, 'Lê Công Tiến Đạt', 'letiendat', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '0229385', 'tiendat@localhost.com', '2009-02-07', '1970-01-01', 1, 0),
(4, 'Trần Văn Nam', 'tranvannam', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '0229385', 'namtran@localhost.com', '0000-00-00', '2020-12-30', 1, 0),
(5, 'Nguyễn Văn Quân', 'nguyenvanquan', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '0377788187', 'VanQuan@localhost.com', '0000-00-00', '2020-12-30', 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`idAdv`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idTL`),
  ADD UNIQUE KEY `TenTL` (`TenTL`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idTin`);
ALTER TABLE `news` ADD FULLTEXT KEY `TimKiemToanVan` (`TieuDe`,`TomTat`);

--
-- Chỉ mục cho bảng `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`idLT`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `idAdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `idTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `idTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT cho bảng `news_type`
--
ALTER TABLE `news_type`
  MODIFY `idLT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
