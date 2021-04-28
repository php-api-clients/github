<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

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
     * @return Git\Commit
     */
    public function commit(): Git\Commit
    {
        return null;
    }

    /**
     * @return User
     */
    public function author(): User
    {
        return null;
    }

    /**
     * @return User
     */
    public function comitter(): User
    {
        return null;
    }

    /**
     * @return Tree
     */
    public function parents(): Tree
    {
        return null;
    }

    /**
     * @return Repository\Commit\File
     */
    public function files(): Repository\Commit\File
    {
        return null;
    }
}
