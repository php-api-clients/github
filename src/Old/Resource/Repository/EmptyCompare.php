<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCompare implements CompareInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function url(): string
    {
        return null;
    }

    /**
     * @return Repository\Commit
     */
    public function baseCommit(): Repository\Commit
    {
        return null;
    }

    /**
     * @return Repository\Commit
     */
    public function mergeBaseCommit(): Repository\Commit
    {
        return null;
    }

    /**
     * @return string
     */
    public function status(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function aheadBy(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function behindBy(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function totalCommits(): int
    {
        return null;
    }

    /**
     * @return Repository\Commit
     */
    public function commits(): Repository\Commit
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
