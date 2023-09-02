<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
</head>

<body>
    <h3 align="center">THÔNG TIN</h3>

    <table width="300" border="3" cellpadding="10" align="center">
        <tr>

            <td>
                <div class="mb-3 row">
                    <label for="txtFullName" class="col-2 col-form-label">Họ Và Tên :</label>
                    <?php echo $_POST['txtFullName']; ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-3 row">
                    <label for="date">Ngày Sinh :</label>
                    <?php echo $_POST['date'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    <label for="gioitinh">Giới Tính :</label>
                    <?php if (isset($_POST["gender"])) {
                        echo $_POST["gender"];
                    } ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    <label for="number">Số Điện Thoại :</label>
                    <?php echo $_POST['number'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    <label for="email">Email :</label>
                    <?php echo $_POST['email'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    <label for="diachi">Địa Chỉ :</label>
                    <?php echo $_POST['message'] ?>
                </div>
            </td>
        </tr>
    </table>
    <div align="center">
        <br>
        <button onclick="goBack()">Quay lại</button>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>

</body>

</html>