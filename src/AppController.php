<?php

namespace dk2013\PackageExample;

class AppController {
    public function run() {
        $this->showMessage();
    }

    private function showMessage() {
        echo 'Hello Otus.ru';
    }
}