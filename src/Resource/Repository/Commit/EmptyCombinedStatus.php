<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCombinedStatus implements CombinedStatusInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function state(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function totalCount(): int
    {
        return null;
    }

    /**
     * @return Repository\Commit\Status
     */
    public function statuses(): Repository\Commit\Status
    {
        return null;
    }

    /**
     * @return Repository
     */
    public function repository(): Repository
    {
        return null;
    }
}
