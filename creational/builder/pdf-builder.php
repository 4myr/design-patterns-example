<?php

class PdfBuilder implements PresentationBuilder {
    public function add_slide(string $text)
    {
        $this->add_page($text);   
    }
    private function add_page(string $text) {
        echo 'Page added with text: ' . $text . '<br>';
    }
    public function get_pdf(Presentation $presentation)
    {
        echo 'exporting pdf<br>';
    }
}