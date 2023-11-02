<?php

    $kq="";
    foreach ($listUsser as $value) {
        extract($value);
        if ($diem>=5) {
            $hocluc="Trên Trung Bình";
        }else {
            $hocluc="Dưới Trung Bình";
        }
        $kq.='
        <tr>
            <td>'.$ten.'</td>
            <td>'.$ngaysinh.'</td>
            <td>'.$diem.'</td>
            <td>'.$hocluc.'</td>
            <td><a href="index.php?pg=sua">Sửa</a>/<a href="index.php?pg=xoa">Xóa</a></td>
        </tr>
        ';
    }
?>
<body>
    
    <h2>Thông tin học viên</h2>
    <form action="index.php?pg=home" method="post">
        <label for="hoTen">Họ tên:</label>
        <input type="text" id="hoTen" name="hoTen" style="width: 100%;"><br><br>
        
        <label for="ngaySinh">Ngày sinh:</label>
        <input type="date" id="ngaySinh" name="ngaySinh" style="width: 100%;"><br><br>
        
        <label for="diem">Điểm:</label>
        <input type="number" id="diem" name="diem" style="width: 100%;"><br><br>
        
        <button name="nhap">Nhập</button>

        <table id="danhSachHocVien" border="1">
        <tr>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Điểm</th>
            <th>Học lực</th>
            <th>Thay Đổi</th>
        </tr>
        <?=$kq?>
    </table>

    </form>

