<?php

interface Observer {
    public function update($event_info = null);
}
interface Subject {
    public function attach($observer);
    public function detach($observer);
    public function notify();
}

class UserSubject implements Subject {
    public $observers = [];
    public function attach($observer) {
        $this->observers[] = $observer;
    }
    public function detach($observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }
    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update('Something has changed...');
        }
    }
    public function changeEmail($email) {
        // メールアドレスが変更されるとこのことがオブザーバーに通知される
        $this->notify();
    }

}

class UserObserver {
    public function update($event_info = null) {
        echo 'UserObsever: A change in User:'  . $event_info . PHP_EOL;
    }
}
$uo = new UserObserver();
$us = new UserSubject();
$us->attach($uo);
$us->changeEmail('abc@ex.net');
