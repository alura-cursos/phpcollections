<?php

class MaisTocadas extends SplHeap {

    public function compare($par1,$par2) {

        if($par1[1] === $par2[1]) {
            return 0;
        }

        if($par1[1] < $par2[1]) {
            return -1;
        } else {
            return 1;
        }

    }

}