<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCombinedStatus implements CombinedStatusInterface, EmptyResourceInterface
{
    public function state(): string
    {
        return null;
    }

    public function sha(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    public function totalCount(): int
    {
        return null;
    }

    public function statuses(): Repository\Commit\Status
    {
        return null;
    }

    public function repository(): Repository
    {
        return null;
    }
}
