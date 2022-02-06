<?php

class CompositeCommand implements Command {
    private array $commands; // Command[]
    public function add(Command $command)
    {
        $this->commands[] = $command;
    }
    public function execute()
    {
        foreach($this->commands as $command) {
            $command->execute();
        }
    }
}