<?php 

require_once "inc/database.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])){

    $sql = "SELECT * FROM article  WHERE id = ".$_GET['id'];

    $results = mysqli_query($conn, $sql);

    if ($results === false){
        echo mysqli_error($conn);
    }else{
        $article = mysqli_fetch_assoc($results);
    }

}else{
    $article = null;
}

?>

<?php require_once "inc/header.php"; ?>
        <?php if ($article === null): ?>
            <p>Article not found.</p>
        <?php else : ?>
            <ul>
                    <li>
                        <article>
                            <h2><?= $article['title'];?></h2>
                            <p><?= $article['content'];?></p>
                        </article>
                    </li>
            </ul>
        <?php endif; ?>
<?php require_once "inc/footer.php"; ?>