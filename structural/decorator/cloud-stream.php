<?php

class CloudStream implements Stream {
    
    public function write(string $data): string
    {
        return $data;
    }
}