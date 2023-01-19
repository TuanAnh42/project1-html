<?php
    
?>

    <div class="container">
        <div class="header"><div class="header">
            <h2>User Profile</h2>
            <hr>
        </div>
        <div class="content">
            <div class="buttons">
            
            <div></div>
            </div>
            <hr>    
        </div>
        <div class="overview">
            <hr>
            <div class="list">
                <table>
                    <thead>
                        <tr>
                            <th>Properties</th>
                            <th>Details</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>User Name</td>
                            <td><?=$user['user_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$user['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Identity Card</td>
                            <td><?=$user['id_card'] ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?=$user['address'] ?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><form action="change-pwd.php" method="POST"><button class="btncp" type="submit" name="uid" value="<?=$user['id'] ?>">Change Password</button></form>   </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>