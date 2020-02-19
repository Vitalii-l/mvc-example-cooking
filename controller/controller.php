<?php
class Controller {
    
    // функция запускает проект
    public function StartSite(){
        include 'view/main.php';
    }
    // -------------------------list
    public function BookList() {
        // получить массив books для вывода данных
        // $bookList - хранит массив books
        $booksList = Model::getBookList();
        
        // деалем вывод на страницу списка
        include 'view/bookList.php';
    }
    //--------------------------one
    public function bookOne($title){
        // $title - название книги в адресной строке
        $test = Model::getBook($title);
        
        // делаем вывод на страницу одной книги
        if($test[0] == true){
            $book = $test[1];
            include 'view/bookOne.php';
        } else {
            include 'view/error404.php';
        }
    }
    //--------------------------error
    public function error404(){
        include 'view/error404.php';
    }
   } //class