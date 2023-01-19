<?php

include("templates/header.php");

?>

<div class="container">
    <div class="row justify-content-center align-items-start text-center">
        <div class="text-center title">
            <h1>DosDVerdade</h1>
            <p>"Nem melhor nem pior, apenas diferente"</p>
        </div>
        <?php foreach ($posts as $post): ?>
            <?php if ($post['id'] < 2): ?>
                <div class="col-12 cabecalho-box">
                    
                    <img class="img-fluid" src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="text-start title-content">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">
                            <?= $post['title'] ?>
                        </a>
                    </h2>
                    <p class="text-start">
                        <?= $post['description'] ?>
                    </p>

                    <div class="tags text-start">
                        <?php foreach ($post['tags'] as $tags): ?>
                            <a href=""><span>
                                    <?= $tags ?>
                                </span></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>

                <div class="col-12 col-md-4 conteudo-box">
                    
                    <img class="img-fluid" src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="text-start title-content">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">
                            <?= $post['title'] ?>
                        </a>
                    </h2>
                    <p class="text-start">
                        <?= $post['description'] ?>
                    </p>

                    <div class="tags text-start">
                        <?php foreach ($post['tags'] as $tags): ?>
                            <a href=""><span>
                                    <?= $tags ?>
                                </span></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>



    </div>
</div>

<?php

include_once("templates/footer.php");

?>