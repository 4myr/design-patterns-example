<?php

class Chart implements Observer {
    
    public function update()
    {
        echo "Updating chart<br>";
    }
}