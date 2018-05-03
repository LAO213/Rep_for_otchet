<?php 
    //Автозагрузка 
    spl_autoload_register(); 
    //Создание экземпляра класса Student 
    //Записываем ссылку на объект 
    $student = new student(); 
    //Объект: учебник по математике 
    $math = new mathTextbook(); 
    //Объект: учебник по истории 
    $histori = new historyTextbook(); 

    echo $student->study($math); 
    echo '<br>';
    echo $student->study($histori);