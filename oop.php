<?php
class Book{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        // Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;   
    }
    //getTitle method
    public function getTitle(){
        return $this->title;
    }

    //getAvailableCopies method
    public function getAvailableCopies(){
        return $this->availableCopies;
    }

    //borrowBook method
    public function borrowBook(){
        if($this->availableCopies > 0){
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    //returnBook method
    public function returnBook(){
        $this->availableCopies++;
    }
}

//Member class
class Member {
   private $name;
    public function __construct($name) {
        $this->name = $name;
    }

    //getName method
    public function getName(){
        return $this->name;
    }

    //borrowBook method
    public function borrowBook($book){
        if($book->borrowBook()){
            echo "{$this->name} borrowed '{$book->getTitle()}' \n";
        }else{
            echo "No copies of '{$book->getTitle()}' available for {$this->name} to borrow \n";
        } 
    }

    //returnBook method
    public function returnBook($book){
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}' \n";
    }
}

//instance of Book class
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

//instance of Member class
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

//Print Available Copies with their names
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()} \n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()} \n";