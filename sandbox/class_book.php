<?php

class Book {
  // Properties

  var $title;
  var $author;

  // Methods

  function show_due_date() {
    return date('d F, Y');
  }

  function display_book_author() {
    return "This book is titled " . $this->title . " and is written by " . $this->author . " .<br>";
  }
}

// Instantiate the class into an object

$book = new Book;
$book->title = "The Hobbit";
$book->author = "J.R. Tolkien";

echo $book->display_book_author();

$book2 = new Book;
$book->title = "Lord of the Flies";
$book->author = "William Golding";
echo $book->display_book_author();

?>