<?php
require_once('../utils/utility.php');
require_once('../db/dbhelper.php');
if(!empty($_GET)){
    if(isset($_GET['s'])){
    $s =" where name like '%". getGet("s")."%'";
}}
$sql = "select * from users";
if(isset($s)){
    $sql .= $s;
}
// echo $sql;
$users = db_get_data($sql, 0);
?>

    <div class="container">
        <div class="header">
            <h2> User Management <span>
                    <hr>
        </div>

        <div class="decentralization">

            <span>
                <div class="buttons">
                    <div></div>
                    <form action="" method="GET" onsubmit="return false">
                        <div class="search">
                            <input type="text" name="s" id="" placeholder="User Name ...">
                            <button class="buttons-5">Search</button>
                        </div>
                    </form>
                </div>
                <hr>
            </span>
        </div>
    </div>
    <div class="list">
        <table>
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Sell Permission</th>
                    <th colspan="2">Manipulation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($users)){
                foreach ($users as $user) {
                    if ($user["id"] !=  1)
                        echo '<tr>
                        <td><input type="checkbox"></td>
                        <td>' . $user['id'] . '</td>
                        <td>' . $user['user_name'] . '</td>
                        <td>' . $user['email'] . '</td>
                        <td>' . $user['phone_number'] . '</td>
                        <td>' . $user['sell_permission'] . '</td>
                        <td class="delete">
                            <button onclick="delete1(' . $user['id'] . ')">Delete</button>
                        </td>
                    </tr>';}
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    <script>
        function delete1(id) {
            if (confirm("Are you so sure about that?") == true) {
                window.location.href = "delete-user.php?id=" + id;
            }
        }
        document.querySelector('.buttons-5').addEventListener("click", function() {
            window.location.href += "&s=" + document.querySelector('[name=s]').value
        })
    </script>