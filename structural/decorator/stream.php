<?php

interface Stream {
    public function write(string $data): string;
}