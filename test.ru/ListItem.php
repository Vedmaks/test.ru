<?php
class ListItem extends Tag
{
    public function __construct()
    {
        // Вызываем конструктор родителя, передав в качестви имени 'li':
        parent::__construct('li');
    }

    public function __toString()
    {
        return parent::show();
    }
}
