<?php
/**
 * Created by PhpStorm.
 * User: schmi
 * Date: 1/19/2018
 * Time: 8:05 AM
 */


class BigBangScientist {
    public $stubborness;
    public $name;

    public function argue() : void {
        echo "I AM RITE" . PHP_EOL;
    }
}

$leonard = new BigBangScientist();
$sheldon = new BigBangScientist();

$leonard->name = "Leonard";
$sheldon->name = "Sheldon";

$leonard->stubborness = 0.72;
$sheldon->stubborness = 0.999992;

