<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     creator="User"
 * )
 * @EmptyResource("Repository\EmptyMilestone")
 */
abstract class Milestone extends AbstractResource implements MilestoneInterface
{
    protected int $id;

    protected int $number;

    protected string $state;

    protected string $title;

    protected string $description;

    protected User $creator;

    protected int $open_issues;

    protected int $closed_issues;

    protected string $url;

    public function id(): int
    {
        return $this->id;
    }

    public function number(): int
    {
        return $this->number;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function creator(): User
    {
        return $this->creator;
    }

    public function openIssues(): int
    {
        return $this->open_issues;
    }

    public function closedIssues(): int
    {
        return $this->closed_issues;
    }

    public function url(): string
    {
        return $this->url;
    }
}
