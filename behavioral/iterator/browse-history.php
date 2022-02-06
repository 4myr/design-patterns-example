<?php

class myArrayIterator implements myIterator {
    public BrowseHistory $history;
    private array $list;
    public int $currentIndex;

    public function __construct(BrowseHistory $history) {
        $this->history = $history;
        $this->list = $this->history->list;
        $this->currentIndex = 0;
    }

    public function next() {
        if ($this->hasNext()) $this->currentIndex++;
    }

    public function current() {
        return $this->list[$this->currentIndex];
    }

    public function hasNext() {
        return $this->currentIndex < count($this->list);
    }
}

class BrowseHistory {
    public array $list = [];
    public function push(string $url) {
        $this->list[] = $url;
    }

    public function pop(): string {
        $lastIndex = count($this->list) - 1;
        $lastState = $this->list[$lastIndex];
        unset($this->list[$lastIndex]);
        return $lastState;
    }

    public function createIterator(): myIterator {
        return new myArrayIterator($this);
    }
}