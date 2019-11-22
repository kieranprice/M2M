<?php


class SmsModel
{

    private $switches;
    private $fan;
    private $heater;
    private $keypad;


    public function __construct()
    {
        $this->switches = [];
        $this->fan = "";
        $this->heater = 0;
        $this->keypad = 0;

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function setSwitches($s_one, $s_two, $s_three, $s_four) {


        if (!isset($_POST['switchOne'])) {
            $s_one = "off";
        }
        else $s_one = "on";
        if (!isset($_POST['switchTwo'])) {
            $s_two = "off";
        }
        else $s_two = "on";
        if (!isset($_POST['switchThree'])) {
            $s_three = "off";
        }
        else $s_three = "on";
        if (!isset($_POST['switchFour'])) {
            $s_four = "off";
        }
        else $s_four = "on";
        $this->switches = [$s_one, $s_two, $s_three, $s_four];
    }

    public function setFan($fanDir) {
        $this->fan = $fanDir;
    }

    public function setHeater($heat) {
        $this->heater = $heat;
    }

    public function setKeypad($num) {
        $this->keypad = $num;
    }

    public function getSwitches() {
        return $this->switches;
    }

    public function getFan() {
        return $this->fan;
    }

    public function getHeater() {
        return $this->heater    ;
    }

    public function getKeypad() {
        return $this->keypad;
    }

    public function toString() {
$eol = "<br>";
    return "[switches: " . implode(",", $this->getSwitches()) .
        $eol . " fan: ". $this->getFan() .
        $eol . " heater: "  . $this->getHeater() .
        $eol ." keypad: " . $this->getKeypad() . "]";
    }

}