<?php

class Presentation {
    private array $slides = [];
    private PresentationBuilder $builder;
    
    public function __construct(PresentationBuilder $builder) {
        $this->builder = $builder;
    }
    public function export()
    {
        foreach($this->slides as $slide) {
            $this->builder->add_slide($slide);
        }
        $this->builder->add_slide('Copyright AMYR');
    }
}