<?php
//TODO: Logo

/*
- Loads every thing up and checks for config errors.
*/
namespace xFlare\xAuth;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\Server;
/*
- Loads up xAuth files.
- xAuth is user-friendly and checks for errors.
- Functions in this class MUST only be called once.
*/
class Loader extends PluginBase implements Listener{
  
  public $weatherlog = [];
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->version = "1.0.0 beta 1";
    $this->getServer()->getLogger()->info("§dPocketPlus §3by §axFlare §3is enabled§7!");
    $this->saveDefaultConfig();
    $this->status = null; //Plugin starting up...
    $this->debug = $this->getConfig()->get("debug-mode");
    $this->startPlugin();
  }
  
  public function startPlugin(){
    if($this->checkForConfigErrors() && $this->status === null){
      $this->status = "enabled";
      $this->getServer()->getPluginManager()->registerEvents(new CommandManager($this), $this);
      $this->getServer()->getPluginManager()->registerEvents(new API($this), $this);
      $this->getServer()->getPluginManager()->registerEvents(new WeatherManager($this), $this);
      $this->getServer()->getPluginManager()->registerEvents(new WeatherChannel($this), $this);
      //TODO: Ticks
    }
    else{
      $this->status = "false";
    }
  }
  
  public function checkForConfigErrors(){
    return true;
  }
