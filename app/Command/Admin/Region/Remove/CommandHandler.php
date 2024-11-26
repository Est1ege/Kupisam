<?php

namespace App\Command\Admin\Region\Remove;

use App\Repository\RegionRepository;

class CommandHandler
{
    private $regions;

    public function __construct(RegionRepository $regions)
    {
        $this->regions = $regions;
    }

    public function __invoke(Command $command)
    {
        $this->regions->remove($command->region);
    }
}