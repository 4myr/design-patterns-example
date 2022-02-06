<?php

class Subject {
    private array $observers = [];
    public function add_observer(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function remove_observer(Observer $observer)
    {
        $this->observers = array_filter($this->observers, function($item) use ($observer) {
            return $observer != $item;
        });
    }

    public function notify_observers()
    {
        foreach($this->observers as $observer) {
            $observer->update();
        }
    }
}