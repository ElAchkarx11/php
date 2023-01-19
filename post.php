<?php

include_once("templates/header.php");

if (!empty($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;
    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}


?>
<div class="container" id="post-container">
    <div class="row">
        <div class="col-12 col-md-8" id="post-esquerda">
            <h2 class="text-uppercase">
                <?= $currentPost['title'] ?>
            </h2>
            <p class="italic">
                <?= $currentPost['description'] ?>
            </p>
            <div id="img-post-box">
                <img class="img-fluid" title="<?= $currentPost['title'] ?>"
                    src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-12 col-md-4" id="post-direita">
            <h3>Tags</h3>
            <ul>
                <?php foreach ($currentPost['tags'] as $tag): ?>
                    <a href="">
                        <li><?= $tag ?></li>
                    </a>
                <?php endforeach; ?>
            </ul>
            <h3>Categorias</h3>
            <ul>
                <?php foreach ($categories as $category): ?>
                    <a href="">
                        <li><?= $category ?></li>
                    </a>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

</div>
<?php

include_once("templates/footer.php");

?>