<?php
/*
 _____           _        _   _____  _           
|  __ \         | |      | | |  __ \| |          
| |__) |__   ___| | _____| |_| |__) | |_   _ ___ 
|  ___/ _ \ / __| |/ / _ \ __|  ___/| | | | / __|
| |  | (_) | (__|   <  __/ |_| |    | | |_| \__ \
|_|   \___/ \___|_|\_\___|\__|_|    |_|\__,_|___/
*/

/*
- Manages ticks and some data dumping.
- Very important class for hunger and weather.
*/
namespace xFlare\xCore;

use pocketmine\Server;
use pocketmine\scheduler\PluginTask;
/*
- Manages ticks. Many things are controlled here, but it's all optional!
*/

class TickManager extends PluginTask{
    public function __construct(Loader $plugin){
        parent::__construct($plugin);
        $this->plugin = $plugin;
    }
    public function onRun($currentTick){
    }
 }