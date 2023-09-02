<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </he ad>

<body>
    <h3 align="center">THÔNG TIN SƠ CƠ BẢN</h3>
    <form action="info.php" method="Post">
        <table width="400" border="3" cellpadding="10" align="center" backgroud>
            <tr>
                <td>
                    <div class="mb-3 row">
                        <label for="txtFullName" class="col-2 col-form-label">Họ Và Tên</label>
                    </div>
                </td>

                <td>
                    <div class="col-4">
                        <input type="text" class="form-control" name="txtFullName" id="txtFullName"
                            placeholder="Fullname">
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="ngaysinh" class="col-2 col-form-label">Ngày Sinh</label>
                </td>
                <td>
                    <input type="date" name="date" id="date" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gioitinh" class="col-2 col-form-label">Giới Tính</label>
                </td>
                <td>

                    Nam <input type="radio" name="gender" value="Nam">
                    Nữ <input type="radio" name="gender" value="Nữ">
                    Khác <input type="radio" name="gender" value="Khác">

                </td>
            </tr>
            <tr>
                <td>
                    <label for="number">Số Điện Thoại</label>
                </td>
                <td>
                    <input type="tel" name="number" id="number">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">email</label>
                </td>
                <td>
                    <input type="email" name="email" id="mail">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="diachi">Địa Chỉ</label>
                </td>
                <td>
                    <textarea cols="21" rows="5" name="message"></textarea>
                </td>
            </tr>
        </table>
        <div align="center">
            <br> <input type="submit" name="ok" id="ok">
                <input type="reset" name="reset" id="reset">
        </div>
    </form>

</body>

</html>