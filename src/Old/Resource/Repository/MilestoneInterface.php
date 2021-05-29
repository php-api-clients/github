<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;

interface MilestoneInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Milestone';

    public function id(): int;

    public function number(): int;

    public function state(): string;

    public function title(): string;

    public function description(): string;

    public function openIssues(): int;

    public function closedIssues(): int;

    public function url(): string;
}
