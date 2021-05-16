<?php
require_once 'includes/header.php';
echo "<link  rel = \"stylesheet\"  href = \"includes/css/blog.css\" >";
require_once 'includes/publish.php';
?>

<?php $blogs = getPublished(); ?>

<div class="container">
    <div class="heading">

        <?php
        if (isset($_SESSION['name'])) {
            echo "Welcome " . $_SESSION['name'];
        }
        ?>

    </div>
    <div class="main">

        <div class="write_a_blog"> <a href="write.php" class="btn btn-sm animated-button victoria-one">
                Write a Blog</a> </div>
        <ul class="article">
            <?php foreach ($blogs as $blog) : ?>
                <li>
                    <div class="box">
                        <div class="title">
                            <h3><?php echo $blog['title']; ?><span><?php echo  $blog['name'];    ?><br></span></h3>
                        </div>
                        <div class="content">
                            <p><?php echo $blog['article']; ?></p>
                        </div>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>



<?php
require_once 'includes/footer.php';
?>