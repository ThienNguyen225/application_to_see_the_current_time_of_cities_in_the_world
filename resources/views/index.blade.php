<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị giời của các thành phố</title>
</head>
<body>
<di class="main-content">
    <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
    <lapel for="select-city"></lapel>
    <select id="select-city">
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Habana, Cuba</option>
        <option value="Asia-Hong_Kong">Hồng Kông</option>
        <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
    </select>
</di>
<script>
    document.getElementById('select-city').onchange = function () {
        ChooseCity()
    };
    function ChooseCity() {
        let time_zone = document.getElementById('select-city');
        window.location.href = time_zone.value;
    }
</script>
</body>
</html>
