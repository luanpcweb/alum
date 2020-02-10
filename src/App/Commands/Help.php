<?php
namespace App\Commands;

/**
 *
 */
class Help
{
    private $command, $tm;

    public function command($command){
        $this->command = $command;
    }

    public function run(){

        echo "--------------------------------------" . PHP_EOL;
        echo "          _     _    _ __  __ " . PHP_EOL;
        echo "    /\   | |   | |  | |  \/  |" . PHP_EOL;
        echo "   /  \  | |   | |  | | \  / |" . PHP_EOL;
        echo "  / /\ \ | |   | |  | | |\/| |" . PHP_EOL;
        echo " / ____ \| |___| |__| | |  | |" . PHP_EOL;
        echo "/_/    \_\______\____/|_|  |_|" . PHP_EOL;
        echo "" .PHP_EOL;
        echo "######" . " - ALUM - SQL Backup Manager" . " - #######" . PHP_EOL;
        echo "" .PHP_EOL;
        echo "This is a SQL Backup Manager made with PHP." . PHP_EOL;
        echo "" .PHP_EOL;

        echo "############################################" . PHP_EOL;
        echo "" .PHP_EOL;

        echo "" .PHP_EOL;
        echo "Help:" . PHP_EOL;
        echo "- This command shows all the functions of Alum." . PHP_EOL;

        return;
    }
}
