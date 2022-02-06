<?php

class SharpController extends Controller {
    public function create_view_engine()
    {
        return new SharpViewEngine;
    }
}