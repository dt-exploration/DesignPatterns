<?php

abstract class Book
{
    protected $title;
    protected $content;

    public function setTitle($str)
    {
        $this->title = $str;
    }

    public function setContent($str)
    {
        $this->content = $str;
    }

    public abstract function read();

}


class PaperBack extends Book
{
    public function printBook()
    {
        echo "The book $this->title was printed !";
    }

    public function read()
    {
        $manual = "Open book with your hands, with tip of your fingers change pages, read";
        return $manual;
    }
}


class Ebook extends Book
{
    public function generatePDF()
    {
        echo "A pdf was generated for the eBook $this->title";
    }

    public function read()
    {
      $manual = "Look at the monitor, use mouse to scroll through pages, read";
      return $manual;
    }
}


$paperback = new Paperback;

$paperback->setTitle('Harry Potter');
$paperback->printBook();



 ?>
