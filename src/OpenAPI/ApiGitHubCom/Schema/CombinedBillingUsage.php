<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CombinedBillingUsage
{
    public const SCHEMA_JSON = '{"required":["days_left_in_billing_cycle","estimated_paid_storage_for_month","estimated_storage_for_month"],"type":"object","properties":{"days_left_in_billing_cycle":{"type":"integer","description":"Numbers of days left in billing cycle."},"estimated_paid_storage_for_month":{"type":"integer","description":"Estimated storage space (GB) used in billing cycle."},"estimated_storage_for_month":{"type":"integer","description":"Estimated sum of free and paid storage space (GB) used in billing cycle."}}}';
    public const SCHEMA_TITLE = 'combined-billing-usage';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Numbers of days left in billing cycle.
     */
    private int $days_left_in_billing_cycle;
    /**
     * Estimated storage space (GB) used in billing cycle.
     */
    private int $estimated_paid_storage_for_month;
    /**
     * Estimated sum of free and paid storage space (GB) used in billing cycle.
     */
    private int $estimated_storage_for_month;
    /**
     * Numbers of days left in billing cycle.
     */
    public function days_left_in_billing_cycle() : int
    {
        return $this->days_left_in_billing_cycle;
    }
    /**
     * Estimated storage space (GB) used in billing cycle.
     */
    public function estimated_paid_storage_for_month() : int
    {
        return $this->estimated_paid_storage_for_month;
    }
    /**
     * Estimated sum of free and paid storage space (GB) used in billing cycle.
     */
    public function estimated_storage_for_month() : int
    {
        return $this->estimated_storage_for_month;
    }
}
