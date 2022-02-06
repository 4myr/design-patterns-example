<?php

class EncryptStream implements Stream {
    private Stream $stream;
    public function __construct(Stream $stream)
    {
        $this->stream = $stream;
    }

    public function write(string $data): string
    {
        $encrypted = $this->encrypt($data);
        return $this->stream->write($encrypted);
    }

    private function encrypt(string $data) {
        return base64_encode($data);
    }

}