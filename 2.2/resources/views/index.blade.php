<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route</title>
</head>

<body>
    <div class="main-content">
        <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
        <label for="select-city"></label>
        <select id="select-city">
            <option>Chọn thành phố</option>
            <option value="America-Chihuahua">Chihuahua, Mexico</option>
            <option value="America-Costa_Rica">Costa Rica</option>
            <option value="America-Havana">La Habana, Cuba</option>
            <option value="Asia-Hong_Kong">Hồng Kông</option>
            <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
        </select>
    </div>

    <script>
        document.getElementById('select-city').addEventListener('change', () => {
            chooseCity();
        })

        const chooseCity = () => {
            const timezone = document.getElementById('select-city');
            window.location.href = timezone.value;
        }

    </script>
</body>

</html>
