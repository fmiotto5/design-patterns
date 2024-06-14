<?php

require_once("../autoloader.php");

$file1 = new \Composite\File(100);
$file2 = new \Composite\File(200);
$dir1 = (new \Composite\Directory())
            ->addComponent($file1)
            ->addComponent($file2);

$file3 = new \Composite\File(300);
$file4 = new \Composite\File(400);
$dir2 = (new \Composite\Directory())
            ->addComponent($file3)
            ->addComponent($file4);

$file5 = new \Composite\File(500);

$root = (new \Composite\Directory())
            ->addComponent($dir1)
            ->addComponent($dir2)
            ->addComponent($file5);

echo "Total size: {$root->getSize()}";