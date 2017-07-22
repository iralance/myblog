<?php
namespace adapter;

class AdvanceWmaPlayer implements MediaAdvanceInterface
{
    public function playMp4($file='')
    {
        //do nothing
    }

    public function playWma($file='')
    {
        echo 'AdvanceWmaPlayer driver playing file: ' . $file . ".wma\n";
    }
}