<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>[Bài tập] Máy tính cá nhân</title>
    <style>
        table {
            margin: 50px auto;
            border-spacing: 20px;
            font-size: 2rem;
        }

        input#result {
            height: 60px;
            text-align: right;
            color: #0606FF;
            font-size: 2.2rem;
            padding: 10px;
        }

        td {
            text-align: center;
            height: 60px;
            color: #0606FF;
            font-weight: bold;
            user-select: none;
            width: 10px;
        }

        tr:not(:first-child) td {
            border: 4px solid #E0E0E0;
        }

        tr:not(:first-child) td:hover {
            background-color: #C70039;
            color: #DAF7A6;
        }

    </style>
</head>

<body>
    <table>
        <tbody>
            <form action="" method="GET" id="calculate">
                <tr>
                    <td colspan="4">
                        <input type="text" name="result" id="result" value="{{ $result ?? '' }}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td data-action="+">&#43;</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td data-action="-">&#8722;</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td data-action="*">&#215;</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>0</td>
                    <td data-action="=">&#61;</td>
                    <td data-action="/">&#247;</td>
                </tr>
            </form>
        </tbody>
    </table>

    <script>
        // Check ki tu
        let busyState = false;
        const form = document.querySelector('form#calculate');

        // In len input
        function printToInput(data, busy) {
            const input = document.querySelector('input#result');

            switch (data) {
                case ("C"):
                    input.value = "";
                    break;
                case ("="):
                    form.submit();
                    break;
                default:
                    input.value += data;
            }

            busyState = busy;
        }

        // Chu so
        document.querySelectorAll('tr:not(:first-child):not(:last-child) td:not(:last-child), tr:last-child td:nth-child(2)').forEach(button => button.addEventListener('click', (e) => {
            printToInput(e.target.innerText, false);
        }))

        // Clear
        document.querySelector('tr:last-child td:first-child').addEventListener('click', (e) => {
            printToInput(e.target.innerText, true);
        })

        // Phep tinh
        document.querySelectorAll('tr:not(:first-child) td:last-child').forEach(button => button.addEventListener('click', (e) => {
            if (!busyState) {
                printToInput(e.target.dataset.action, true);
            }
        }))

        // Calculate
        document.querySelector('tr:last-child td:nth-child(3)').addEventListener('click', (e) => {
            if (!busyState) {
                printToInput(e.target.dataset.action, false);
            }
        })

    </script>
</body>

</html>
