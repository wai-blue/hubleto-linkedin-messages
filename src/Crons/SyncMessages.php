<?php

namespace Hubleto\App\External\WaiBlue\LinkedinMessages\Crons;

use Hubleto\App\External\WaiBlue\LinkedinMessages\Sync;

class SyncMessages extends \Hubleto\Erp\Cron
{
  public string $schedulingPattern = '*/15 * * * *';

  public function run(): void
  {
    /** @var Sync */
    $sync = $this->getService(Sync::class);
    $sync->syncAll();
  }

}
