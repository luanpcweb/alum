<?php
namespace App\Console;

class Kernel
{
    private $value;

    private $command;

    private $commands = array('help');

    public function command($value = null)
    {
        $this->line = $value;
        $this->readCommand();
    }

    private function readCommand()
    {
        if(!isset($this->line[1])){
            return $this->getHelp();
        }

        $key = array_search($this->line[1], $this->commands);
        if ($key !== false){
            echo $this->commands[$key] . PHP_EOL;
            return;
        }


        return $this->getHelp();
    }

    private function getHelp()
    {
        $help = new \App\Commands\Help();
        $help->run();
    }
}
