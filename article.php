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
    </main>
</body>
</html>