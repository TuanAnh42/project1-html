<?php
    $sql_select_brands = "SELECT name, id, logo from brands";
    $brands = db_get_data($sql_select_brands, 0);
?>

    <div class="container">
        <div class="header">
            <h2>Brands Management</h2>
            <hr>
        </div>
        <div class="content">
            <div class="buttons">
             <?php
                if($_SESSION['uid'] == 1){
                echo '<button class="buttons-1"><a href="../create-brand.php"><i class="fa fa-plus" aria-hidden="true"></i> Create New Product</a></button>';
            }
            else{
                echo '<div></div>';
            }
            ?>
                
            </div>
            <hr>    
        </div>
        <div>
            <h2>Welcome to Showroom Oto</h2>
        </div>
        <div class="overview">
            <hr>
            <div class="list">
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Brand</th>
                            <th>Logo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            foreach($brands as $brand){
                                echo '<tr>
                                <td>'.$brand['id'].'</td>
                                <td>'.$brand['name'].'</td>
                                <td><img src="../img/logo/'.$brand['logo'].'" class="image"></td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>