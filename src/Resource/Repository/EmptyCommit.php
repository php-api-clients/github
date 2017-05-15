<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\Git\CommitInterface as GitCommitInterface;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCommit implements CommitInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function url(): string
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
     * @return string
     */
    public function htmlUrl(): string
    {
        return null;
    }

    /**
     * @return GitCommitInterface
     */
    public function commit(): GitCommitInterface
    {
        return null;
    }

    /**
     * @return UserInterface
     */
    public function author(): UserInterface
    {
        return null;
    }

    /**
     * @return UserInterface
     */
    public function comitter(): UserInterface
    {
        return null;
    }

    /**
     * @return TreeInterface
     */
    public function parents(): TreeInterface
    {
        return null;
    }
}
