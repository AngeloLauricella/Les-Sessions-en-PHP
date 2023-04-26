<?php require 'inc/head.php'; ?>
<section class="cookies container">
    <div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID product</th>
                <th scope="col">Qte</th>
            </tr>
        </thead>
<?php
    foreach ($_SESSION['cart'] as $product => $quantity)
    {
    echo'<tbody>';
        echo'<tr>';
            echo'<th scope="col">'.$product.'</th>';
            echo'<th scope="col">'.$quantity.'</th>';
        echo'</tr>';
    echo'</tbody';
    }
?>
    </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
