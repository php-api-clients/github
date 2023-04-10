<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CombinedBillingUsage
{
    public const SCHEMA_JSON = '{"required":["days_left_in_billing_cycle","estimated_paid_storage_for_month","estimated_storage_for_month"],"type":"object","properties":{"days_left_in_billing_cycle":{"type":"integer","description":"Numbers of days left in billing cycle."},"estimated_paid_storage_for_month":{"type":"integer","description":"Estimated storage space (GB) used in billing cycle."},"estimated_storage_for_month":{"type":"integer","description":"Estimated sum of free and paid storage space (GB) used in billing cycle."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"days_left_in_billing_cycle":13,"estimated_paid_storage_for_month":13,"estimated_storage_for_month":13}';
    /**
     * daysLeftInBillingCycle: Numbers of days left in billing cycle.
     * estimatedPaidStorageForMonth: Estimated storage space (GB) used in billing cycle.
     * estimatedStorageForMonth: Estimated sum of free and paid storage space (GB) used in billing cycle.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('days_left_in_billing_cycle')] public int $daysLeftInBillingCycle, #[\EventSauce\ObjectHydrator\MapFrom('estimated_paid_storage_for_month')] public int $estimatedPaidStorageForMonth, #[\EventSauce\ObjectHydrator\MapFrom('estimated_storage_for_month')] public int $estimatedStorageForMonth)
    {
    }
}
