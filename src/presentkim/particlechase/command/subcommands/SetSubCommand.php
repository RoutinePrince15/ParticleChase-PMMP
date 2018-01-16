<?php

namespace presentkim\particlechase\command\subcommands;

use pocketmine\command\CommandSender;
use pocketmine\level\particle\Particle;
use pocketmine\Server;
use presentkim\particlechase\{
  command\PoolCommand, ParticleChaseMain as Plugin, util\Translation, command\SubCommand
};

class SetSubCommand extends SubCommand{

    public function __construct(PoolCommand $owner){
        parent::__construct($owner, 'set');
    }

    /**
     * @param CommandSender $sender
     * @param String[]      $args
     *
     * @return bool
     */
    public function onCommand(CommandSender $sender, array $args){
        if (isset($args[1])) {
            $playerName = strtolower($args[0]);

            $config = $this->owner->getConfig();

            $player = Server::getInstance()->getPlayerExact($playerName);
            $exists = $config->exists($playerName);
            if ($player === null && !$exists) {
                $sender->sendMessage(Plugin::$prefix . Translation::translate('command-generic-failure@invalid-player', $args[0]));
            } else {
                $particleName = strtoupper($args[1]);
                $particleMode = $args[2] ?? 0;
                $particleData = implode(' ', array_slice($args, 3));
                if (!defined(Particle::class . "::TYPE_" . $particleName)) {
                    $sender->sendMessage(Plugin::$prefix . $this->translate('failure-invalid-particle', $args[1]));
                } else {
                    $config->set($playerName, [
                      $particleName,
                      $particleMode,
                      $particleData,
                    ]);
                    $sender->sendMessage(Plugin::$prefix . $this->translate('success', $playerName, $particleName));
                }
            }
            return true;
        }
        return false;
    }
}