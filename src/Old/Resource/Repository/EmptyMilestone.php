<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyMilestone implements MilestoneInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function number(): int
    {
        return null;
    }

    public function state(): string
    {
        return null;
    }

    public function title(): string
    {
        return null;
    }

    public function description(): string
    {
        return null;
    }

    public function creator(): User
    {
        return null;
    }

    public function openIssues(): int
    {
        return null;
    }

    public function closedIssues(): int
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }
}
