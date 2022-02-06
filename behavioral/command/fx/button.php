<?php
// invoker
class Button {
    private Command $command;
    public function __construct(Command $command)
    {
        $this->command = $command;
    }
    public function click()
    {
        echo 'Some button clicked!<br>';
        $this->command->execute();
    }
}