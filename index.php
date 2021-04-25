<?php
require_once('./layouts/header.php');
?>

<div class="container">
    <h1>Shorttask Payment</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-12" style="padding: 16px;">
           <a href="./pay.php"> <button type="button" class="btn btn-light">Payment</button></a>
        </div>
    </div><!-- /.row -->
</div>
<?php
require_once('./layouts/footer.php');
?>