<?php

class MovieBuilder implements PresentationBuilder {
    public function add_slide(string $text)
    {
        $this->add_frame($text);
    }
    private function add_frame(string $text) {
        echo 'Frame added with text: ' . $text . '<br>';
    }
    public function get_movie(Presentation $presentation)
    {
        echo 'exporting Movie<br>';
    }
}