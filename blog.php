<?php
require_once 'includes/header.php';
echo "<link  rel = \"stylesheet\"  href = \"includes/css/blog.css\" >";
?>

<div class="container">
    <div class="heading">

        <?php
        if(isset($_SESSION['name'])){
            echo "<h2>Welcome " . $_SESSION['name'] . "<h2>";
        }
        ?>

    </div>

    <div class="main">
        <ul class="article">
            <li>
                <div class="article_content">
                    <div class="title">
                        <h3>Hello</h3>
                    </div>
                    <div class="content">
                        <p>Lorem Epsim</p>
                    </div>
                </div>

            </li>
            <li>

                <div class="article_content">
                    <div class="title">
                        <h3>Hello 2</h3>
                    </div>
                    <div class="content">
                        <p>Lollll ollllala</p>
                    </div>
                </div>


            </li>
        </ul>

    </div>
</div>



<?php
require_once 'includes/footer.php';
?>