<?php
$articles = [
    ["title" => "The One", "author" => "John Doe", "content" => "This is the first article"],
    ["title" => "The Two", "author" => "Jane Doe", "content" => "This is the second article"],
    ["title" => "The Three", "author" => "Jim Doe", "content" => "This is the third article"],
];


foreach ($articles as $article) {

    echo $article["title"];
}