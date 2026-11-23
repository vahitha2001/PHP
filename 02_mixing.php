<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixing PHP with HTML</title>
</head>
<style>
    table{
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid #ccc;
        padding: 5px 10px;
    }
</style>
<body>
    <h1>Mixing PHP with HTML</h1>
    <table>
        <thread>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thread>
        <tbody>
            <tr>
                <th>1</th>
                <th>hafi</th>
                <th>23</th>
            </tr>
            <?php
            echo "
            <tr>
                <th>2</th>
                <th>naji</th>
                <th>18</th>
            </tr>
            ";
            ?>
             <tr>
                <th>3</th>
                <th>vahi</th>
                <th>20</th>
            </tr>
        </tbody>
    </table>
</body>
</html>