<?php 

//Connect DB info 
$db_host = "localhost";
$db_name = "cms";
$db_user = "Anthony";
$db_pass = "qaz1";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT * FROM article  ORDER BY published_at ;";

$results = mysqli_query($conn, $sql);

if ($results === false){
    echo mysqli_error($conn);
}else{
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My blog</title>
</head>
<body>
    <header>
        <h1>My blog</h1>
    </header>

    <main>
        <?php if (empty($articles)): ?>
            <p>No articels found.</p>
        <?php else : ?>
        
            <ul>
                <?php foreach($articles as $article) :?>
                    <li>
                        <article>
                            <h2><a href="article.php?id=<?= $article['id']; ?>"><?= $article['title'];?></a></h2>
                            <p><?= $article['content'];?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
    </main>
</body>
</html>