<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StudentCourses</title>
        <link rel="stylesheet" href="Styles/Courses.css">
    </head>
    <body>

    <?php
            include_once("../includes/studentHeader.php");
        ?>

        <section>
            <form action="Lesson.php" method="post">
            
            <h1 style="text-align: center;">Courses-Categories</h1>
                <h1>Sciences</h1>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/calculating.png" alt="">
                    </div>
                    <div class="context">
                        <input type="submit" value="Mathematics" name="lessonCategory">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem molestias soluta quae neque culpa possimus ut quidem at minima molestiae. Quis rerum quod, dolor tempora minima ratione vero cupiditate blanditiis!</p>
                    </div>
                </section>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/atom.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="Physics" name="lessonCategory">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio aliquam doloribus impedit laborum quisquam alias nobis ad. Commodi eos tempora corrupti perferendis asperiores dignissimos beatae assumenda doloribus obcaecati voluptatum? Quibusdam!</p>
                    </div>
                </section>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/chemistry.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="Chemistry" name="lessonCategory">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum id vel autem laborum dolor voluptatem, maiores in nulla? Explicabo doloremque quae magni voluptatum cumque accusantium amet quas officia laboriosam. Eius!</p>
                    </div>
                </section>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/bacteria.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="Biology" name="lessonCategory">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit minus, eos facere obcaecati beatae laborum ratione illum maxime tenetur laudantium delectus temporibus provident illo dolorem? Nobis voluptate fugit cupiditate.</p>
                    </div>
                </section>
                <h1>Non-Sciences</h1>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/geography.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="Geography" name="lessonCategory">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero ex fuga nesciunt cumque earum at consequatur dolore? Culpa error aut magnam maiores illum nihil veritatis, modi omnis? Consequuntur, esse minus.</p>
                    </div>
                </section>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/history-book.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="History" name="lessonCategory">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet qui velit fuga non magni sit eum harum ullam, culpa voluptates nobis quae rem assumenda labore, in delectus maiores ducimus? Tempora.</p>
                    </div>
                </section>
                <h1>Languages</h1>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/languages.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="Kinyarwanda" name="lessonCategory">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius non maxime itaque cumque atque perferendis fuga beatae voluptate ipsum, eos deserunt ullam sed fugit nihil fugiat, ex molestiae officia. Vero!</p>
                    </div>
                </section>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/eng.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="English" name="lessonCategory">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, nulla? Facilis rerum pariatur fuga nam culpa modi molestias ex, ipsum dolor? Harum facere consequatur impedit eligendi quidem totam amet alias.</p>
                    </div>
                </section>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/book.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="French" name="lessonCategory">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, velit odit, perferendis sit, culpa cum repellat impedit excepturi aperiam quasi tenetur possimus maiores est temporibus quae nihil. Voluptatem, ex in.</p>
                    </div>
                </section>
                <h1>Technology</h1>
                <section class="descriptions">
                    <div class="icon">
                        <img src="../icons/data-science.png" alt="">
                    </div>
                    <div class="context">
                    <input type="submit" value="Computer Science" name="lessonCategory">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo necessitatibus natus deserunt error, doloribus dolorum sint veniam praesentium temporibus qui, fugiat nihil iste explicabo reiciendis? Molestiae harum labore esse earum.</p>
                    </div>
                    </form>
            </section>

            <?php
            include_once("../includes/Footer.php");
        ?>
    </body>
</html>
