<?php

interface Observer {
    public function update($event_info = null);
}
interface Subject {
    public function attach($observer);
    public function detach($observer);
    public function notify();
}
class User implements Subject {
    private $observers = [];
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
        foreach($this->observers as $observer) {
            $observer->update('Something has changed...');
        }
    }
    public function changeEmail($email) {
        $this->notify();
    }
}

class UserObserver implements Observer {
    public function update($event_info = null) {
        echo "UserObserver: A change in User: $event_info";
    }
}
$u = new User();
$uo = new UserObserver();
$u->attach($uo);
$u->changeEmail('newEmail@example.com');
// }
// interface Subject {
//     public function
// }

// class User {
//     private $observers = [];
//     public function set($observer) {
//         $this->observers[] = $observer;
//     }
//     public function delete($observer) {
//         $index = array_search($observer,$this->observers);
//         if ($index !== false) {
//             foreach ($this->observers as $o) {
//                 unset($o[$index]);
//             }
//         }
//     }
//     public function changeEmail() {
//         foreach ($this->observers as $o) {
//             $o->notify();
//         }

//     }
// }
// class UserObserver {
//     public function notify() {
//         echo 'something happend' . PHP_EOL;
//     }
// }
// $uo = new UserObserver();
// $user = new User();
// $user->set($uo);
// $user->changeEmail();
