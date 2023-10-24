<?php

interface Observer {
    public function update($event_info = null);
}
interface Subject {
    public function attach($o);
    public function detach($o);
    public function notify();
}
class User implements Subject {
    private $observers = [];
    public function attach($o) {
        $this->observers[] = $o;
    }
    public function detach($o) {
        $index = array_search($o, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }
    public function notify() {
        foreach ($this->observers as $o) {
            $o->update('何か変更あった');
        }
    }
    public function changeEmail($email) {
        $this->notify();
    }
}

class UserObserver implements Observer {
    public function update($event_info = null)
    {
        echo "ユーザーでなんか変更あった" . $event_info . PHP_EOL;
    }
}
$u = new User();
$uo = new UserObserver();
$u->attach($uo);
$u->changeEmail('a@b.net');
