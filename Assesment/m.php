<?php

class Book {
    public $title;
    public $author;
    public $category;
    public $isbn;

    public function __construct($title, $author, $category, $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->category = $category;
        $this->isbn = $isbn;
    }
}

class Library {
    private $books = [];
    private $password = "admin123"; // Default password

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function deleteBook($title) {
        $index = $this->findBookIndex($title);
        if ($index !== false) {
            array_splice($this->books, $index, 1);
            echo "Book '$title' deleted successfully.\n";
        } else {
            echo "Book '$title' not found.\n";
        }
    }

    public function searchBook($query) {
        $foundBooks = [];
        foreach ($this->books as $book) {
            if (stripos($book->title, $query) !== false || stripos($book->author, $query) !== false) {
                $foundBooks[] = $book;
            }
        }

        if (!empty($foundBooks)) {
            echo "Found Books:\n";
            foreach ($foundBooks as $book) {
                echo "Title: $book->title, Author: $book->author, Category: $book->category, ISBN: $book->isbn\n";
            }
        } else {
            echo "No books found matching the query.\n";
        }
    }

    public function viewAllBooks() {
        if (!empty($this->books)) {
            echo "All Books:\n";
            foreach ($this->books as $book) {
                echo "Title: $book->title, Author: $book->author, Category: $book->category, ISBN: $book->isbn\n";
            }
        } else {
            echo "No books found.\n";
        }
    }

    public function changePassword($oldPassword, $newPassword) {
        if ($oldPassword === $this->password) {
            $this->password = $newPassword;
            echo "Password changed successfully.\n";
        } else {
            echo "Incorrect old password. Password not changed.\n";
        }
    }

    private function findBookIndex($title) {
        foreach ($this->books as $index => $book) {
            if ($book->title === $title) {
                return $index;
            }
        }
        return false;
    }
}

function main() {
    $library = new Library();
    echo "Welcome to Library Management System\n";

    // Authentication
    while (true) {
        $passwordAttempt = readline("Enter password to access the system: ");
        if ($passwordAttempt === $library->password) {
            break;
        } else {
            echo "Incorrect password. Please try again.\n";
        }
    }

    while (true) {
        // Display main menu
        echo "\nMain Menu:\n";
        echo "1. Add Book\n";
        echo "2. Delete Book\n";
        echo "3. Search Book\n";
        echo "4. View All Books\n";
        echo "5. Change Password\n";
        echo "6. Exit\n";

        $choice = readline("Enter your choice: ");

        switch ($choice) {
            case '1':
                // Add Book
                $title = readline("Enter title of the book: ");
                $author = readline("Enter author of the book: ");
                $category = readline("Enter category of the book: ");
                $isbn = readline("Enter ISBN of the book: ");
                $book = new Book($title, $author, $category, $isbn);
                $library->addBook($book);
                break;
            case '2':
                // Delete Book
                $title = readline("Enter title of the book to delete: ");
                $library->deleteBook($title);
                break;
            case '3':
                // Search Book
                $query = readline("Enter search query (title or author): ");
                $library->searchBook($query);
                break;
            case '4':
                // View All Books
                $library->viewAllBooks();
                break;
            case '5':
                // Change Password
                $oldPassword = readline("Enter old password: ");
                $newPassword = readline("Enter new password: ");
                $library->changePassword($oldPassword, $newPassword);
                break;
            case '6':
                // Exit
                echo "Thank you for using the Library Management System.\n";
                exit();
            default:
                echo "Invalid choice. Please try again.\n";
                break;
        }
    }
}

main();

?>
