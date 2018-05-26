<?php

/**
* The MIT License
* Copyright (c) 2018 MazaiCrafty
*/

namespace sampleSM;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\math\Vector3;

use mazaicrafty\sm\SoundModuleAPI;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
        switch ($cmd->getName()){
            case "testsm":
            $level = $sender->getLevel();

            $pos = new Vector3($sender->getX(), $sender->getY(), $sender->getZ());
            $sound = SoundModuleAPI::createSound('ClickSound', $pos);
            $level->addSound($sound);
            return true;
        }
        return false;
    }
}