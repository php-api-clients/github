<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsBillingUsage
{
    public const SCHEMA_TITLE = 'actions-billing-usage';
    public const SPL_HASH = '000000000cd523100000000040effa88';
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
    private ?int $included_minutes = null;
    private ?object $minutes_used_breakdown = null;
    public function total_minutes_used() : ?int
    {
        return $this->total_minutes_used;
    }
    public function total_paid_minutes_used() : ?int
    {
        return $this->total_paid_minutes_used;
    }
    public function included_minutes() : ?int
    {
        return $this->included_minutes;
    }
    public function minutes_used_breakdown() : ?object
    {
        return $this->minutes_used_breakdown;
    }
}
