<?php

class DataSource extends Subject {
    private int $value;

    public function set_value($value)
    {
        $this->value = $value;
        $this->notify_observers();
    }

    public function get_value()
    {
        return $this->value;
    }
}