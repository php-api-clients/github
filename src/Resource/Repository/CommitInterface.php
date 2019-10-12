<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\Git\CommitInterface as GitCommitInterface;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Resource\ResourceInterface;

interface CommitInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Commit';

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return string
     */
    public function sha(): string;

    /**
     * @return string
     */
    public function htmlUrl(): string;

    /**
     * @return GitCommitInterface
     */
    public function commit(): GitCommitInterface;

    /**
     * @return UserInterface
     */
    public function author(): UserInterface;

    /**
     * @return UserInterface
     */
    public function comitter(): UserInterface;

    /**
     * @return TreeInterface[]
     */
    public function parents(): array;
}
