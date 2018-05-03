<?php
class student
{
    public function study(Readable $book)
    {
        return ' Я читаю учебник
        по дисциплине ' . $book->read();
    }
}