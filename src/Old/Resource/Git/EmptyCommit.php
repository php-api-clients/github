<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCommit implements CommitInterface, EmptyResourceInterface
{
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
    public function url(): string
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
     * @return string
     */
    public function message(): string
    {
        return null;
    }

    /**
     * @return TreeInterface
     */
    public function tree(): TreeInterface
    {
        return null;
    }

    /**
     * @return int
     */
    public function commentCount(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function protectionUrl(): string
    {
        return null;
    }
}
