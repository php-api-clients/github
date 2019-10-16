<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;

interface MilestoneInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Milestone';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return int
     */
    public function number(): int;

    /**
     * @return string
     */
    public function state(): string;

    /**
     * @return string
     */
    public function title(): string;

    /**
     * @return string
     */
    public function description(): string;

    /**
     * @return int
     */
    public function openIssues(): int;

    /**
     * @return int
     */
    public function closedIssues(): int;

    /**
     * @return string
     */
    public function url(): string;
}
