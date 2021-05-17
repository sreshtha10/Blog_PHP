<?php
require_once 'includes/header.php';
echo "<link  rel = \"stylesheet\"  href = \"includes/css/write.css\" >";
echo "<link  rel = \"stylesheet\"  href = \"includes/css/header.css\" >";
?>

<?php

if (isset($_SESSION['name'])) {
} else {
    header("Location: index.php?error=login_first");
    exit();
}
?>
<section class="">
    <form action = "includes/post-inc.php" method="POST">
    <div class="col-md-6 col-sm-9">
        <input type="text" id ="title" name="title" placeholder="Enter the title here..."> <span>by <?php echo $_SESSION['name']; ?></span><br>
    </div>
    <div class="row">
        <div class="col">
            <div class="write_a_blog"> <a href="#" id="uppercase" class="btn btn-sm animated-button victoria-one">
                    Uppper Case</a> </div>
            <div class="write_a_blog"> <a href="#" id="lowercase" class="btn btn-sm animated-button victoria-one">
                    Lower Case</a> </div>
            <div class="write_a_blog"> <a href="#" id="capitalize" class="btn btn-sm animated-button victoria-one">
                    Capitalize</a> </div>
            <div class="write_a_blog"> <a href="#" id="clear" class="btn btn-sm animated-button victoria-one">
                    Clear</a> </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6 col-sm-9">
            <textarea id="textarea1" class="input shadow" name="textarea1" rows="15" cols="100" placeholder=" Enter your text here..."></textarea>

        </div>
    </div>
    <div class="post_button"> <a href="#" class="btn btn-sm animated-button victoria-one" name="post">
            <button name="post">POST</button></a> </div>
    </div>
    </form>
    
   
</section>
<br>
<script src="includes/js/write.js"></script>
<?php
require_once 'includes/footer.php';
?>