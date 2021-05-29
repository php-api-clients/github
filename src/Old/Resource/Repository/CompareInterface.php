<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;

interface CompareInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Compare';

    public function url(): string;

    public function baseCommit(): Repository\Commit;

    public function mergeBaseCommit(): Repository\Commit;

    public function status(): string;

    public function aheadBy(): int;

    public function behindBy(): int;

    public function totalCommits(): int;

    public function commits(): Repository\Commit;

    /**
     * @return Commit\File[]
     */
    public function files(): array;
}
