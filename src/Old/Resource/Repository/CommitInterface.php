<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\Git\CommitInterface as GitCommitInterface;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Resource\ResourceInterface;

interface CommitInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Commit';

    public function url(): string;

    public function sha(): string;

    public function htmlUrl(): string;

    public function commit(): GitCommitInterface;

    public function author(): UserInterface;

    public function comitter(): UserInterface;

    /**
     * @return TreeInterface[]
     */
    public function parents(): array;
}
