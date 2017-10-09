<?php

// the \n in each book below allows each book title to be printed to an individual line.

function listOfBooks(){
    echo "Hamlet\n";
    echo "Romeo and Juliet\n";
}

//listOfBooks();

function bookByAuthorYear($authorName, $year) {
    echo $year;
    echo "\n";
    echo $authorName;
};

bookByAuthorYear('Shakespeare', 1910);

