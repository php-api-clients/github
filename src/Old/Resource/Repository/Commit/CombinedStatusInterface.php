<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\ResourceInterface;

interface CombinedStatusInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Commit\\CombinedStatus';

    public function state(): string;

    public function sha(): string;

    public function url(): string;

    public function totalCount(): int;

    public function statuses(): Repository\Commit\Status;

    public function repository(): Repository;
}
