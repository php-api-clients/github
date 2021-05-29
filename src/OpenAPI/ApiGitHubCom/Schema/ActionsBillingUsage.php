<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsBillingUsage
{
    public const SCHEMA_TITLE       = 'actions-billing-usage';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The sum of the free and paid GitHub Actions minutes used.
     */
    private ?int $total_minutes_used = null;
    /**
     * The total paid GitHub Actions minutes used.
     */
    private ?int $total_paid_minutes_used = null;
    /**
     * The amount of free GitHub Actions minutes available.
     */
    private ?int $included_minutes        = null;
    private array $minutes_used_breakdown = [];

    /**
     * The sum of the free and paid GitHub Actions minutes used.
     */
    public function total_minutes_used(): ?int
    {
        return $this->total_minutes_used;
    }

    /**
     * The total paid GitHub Actions minutes used.
     */
    public function total_paid_minutes_used(): ?int
    {
        return $this->total_paid_minutes_used;
    }

    /**
     * The amount of free GitHub Actions minutes available.
     */
    public function included_minutes(): ?int
    {
        return $this->included_minutes;
    }

    public function minutes_used_breakdown(): array
    {
        return $this->minutes_used_breakdown;
    }
}
