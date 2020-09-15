<?php

require_once 'iFile.php';

class File implements iFile
{
    private $file;

    public function __construct($filePath)
    {
        if (file_exists($filePath)) {
            $this->file = $filePath;
        } else {
            file_put_contents($filePath, '');
            $this->file = $filePath;
        }
    }

    public function getPath()
    {
        return pathinfo($this->file, PATHINFO_DIRNAME);
    } // путь к файлу

    public function getDir()
    {
        return dirname($this->file);
    }// папка файла

    public function getName()
    {
        return basename($this->file);
    }// имя файла

    public function getExt()
    {
        return filetype($this->file);
    }// расширение файла

    public function getSize()
    {
        return filesize($this->file);
    }// размер файла

    public function getText()
    {
        return file_get_contents($this->file);
    }// получает текст файла

    public function setText($text)
    {
        file_put_contents($this->file, $text);
    }// устанавливает текст файла

    public function appendText($text)
    {
        $oldText = $this->getText();
        file_put_contents($this->file, $oldText . $text);
    }// добавляет текст в конец файла

    public function copy($copyPath)
    {
        copy($this->file, $copyPath . $this->getName());
    }// копирует файл

    public function delete()
    {
        unlink($this->file);
    }// удаляет файл

    public function rename($newName)
    {
        $this->file = rename($this->file, $newName);
    }// переименовывает файл

    public function replace($newPath)
    {
        $this->file = rename($this->file, $newPath . $this->getName());
    }// перемещает файл
}
