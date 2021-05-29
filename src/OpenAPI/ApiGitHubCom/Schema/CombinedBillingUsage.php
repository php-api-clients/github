<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CombinedBillingUsage
{
    public const SCHEMA_TITLE       = 'combined-billing-usage';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Numbers of days left in billing cycle.
     */
    private ?int $days_left_in_billing_cycle = null;
    /**
     * Estimated storage space (GB) used in billing cycle.
     */
    private ?int $estimated_paid_storage_for_month = null;
    /**
     * Estimated sum of free and paid storage space (GB) used in billing cycle.
     */
    private ?int $estimated_storage_for_month = null;

    public function days_left_in_billing_cycle(): ?int
    {
        return $this->days_left_in_billing_cycle;
    }

    public function estimated_paid_storage_for_month(): ?int
    {
        return $this->estimated_paid_storage_for_month;
    }

    public function estimated_storage_for_month(): ?int
    {
        return $this->estimated_storage_for_month;
    }
}
