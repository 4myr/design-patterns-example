<?php

class CompressStream implements Stream {
    private Stream $stream;

    public function __construct(Stream $stream)
    {
        $this->stream = $stream;
    }

    public function write(string $data): string
    {
        $compressed = $this->compress($data);
        return $this->stream->write($compressed);
    }

    private function compress($data)
    {
        return substr($data, 0, 3);
    }
}