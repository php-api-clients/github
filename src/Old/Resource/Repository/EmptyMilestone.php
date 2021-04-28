<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyMilestone implements MilestoneInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function number(): int
    {
        return null;
    }

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
    public function title(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return null;
    }

    /**
     * @return User
     */
    public function creator(): User
    {
        return null;
    }

    /**
     * @return int
     */
    public function openIssues(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function closedIssues(): int
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
}
