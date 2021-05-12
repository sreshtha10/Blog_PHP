<?php
require_once 'includes/header.php';
echo "<link  rel = \"stylesheet\"  href = \"includes/css/blog.css\" >";
echo "<link  rel = \"stylesheet\"  href = \"includes/css/header.css\" >";
?>

<div class="container">
    <div class="heading">

        <?php
        if(isset($_SESSION['name'])){
            echo "Welcome " . $_SESSION['name'];
        }
        ?>

    </div>
    <div class="main">
    <div class="write_a_blog"> <a href="#" class="btn btn-sm animated-button victoria-one">
    Write a Blog</a> </div>
        <ul class="article">
            <li>
                <div class="box">
                    <div class="title">
                        <h3>Hello <span><br>-jesus</span></h3>
                    </div>
                    <div class="content">
                        <p>It has theoretical underpinnings, to be sure, but its ultimate goal is to inspire us to proper achievement and good living. The philosopher is a physician of the soul, whose advice aims at spiritual health and happiness. Like physics, philosophy seeks to understand the most ultimate realities with which we have to do. Yet, unlike physics, the philosophy most true to human nature gives us not technical terminology and news of marvels outside the ken of our normal experience, but rather reminders of what lies right in front of our eyes, or, if we are perceptive, inside our own hearts.</p>
                    </div>
                </div>

            </li>
            <li>

                <div class="box">
                    <div class="title">
                        <h3>Hello 2 <span><br>-shiva</span> </h3>
                    </div>
                    <div class="content">
                        <p>Seneca developed wisdom about prosperity and successful living that resonates with some of the best contemporary thought concerning happiness and the good life. His nuggets of advice often help us to understand more thoroughly any insights we might already have managed to grasp about true success in life. What is clear becomes clearer, and deep realizations that might have remained unarticulated are suddenly sparked into consciousness as we read his words. He provides us with elements of a life guidance toolkit that display a logical unity, a form of inner coherence, and a tremendous usefulness for anyone living in tumultuous times.</p>
                    </div>
                </div>


            </li>
            <li>

                <div class="box">
                    <div class="title">
                        <h3>Hello 3 <span><br>-ganpati</span></h3>
                    </div>
                    <div class="content">
                        <p>Seneca developed wisdom about prosperity and successful living that resonates with some of the best contemporary thought concerning happiness and the good life. His nuggets of advice often help us to understand more thoroughly any insights we might already have managed to grasp about true success in life. What is clear becomes clearer, and deep realizations that might have remained unarticulated are suddenly sparked into consciousness as we read his words. He provides us with elements of a life guidance toolkit that display a logical unity, a form of inner coherence, and a tremendous usefulness for anyone living in tumultuous times.</p>
                    </div>
                </div>


            </li>
        </ul>

    </div>
</div>



<?php
require_once 'includes/footer.php';
?>