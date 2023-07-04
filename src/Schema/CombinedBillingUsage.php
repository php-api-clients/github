<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CombinedBillingUsage
{
    public const SCHEMA_JSON         = '{"required":["days_left_in_billing_cycle","estimated_paid_storage_for_month","estimated_storage_for_month"],"type":"object","properties":{"days_left_in_billing_cycle":{"type":"integer","description":"Numbers of days left in billing cycle."},"estimated_paid_storage_for_month":{"type":"integer","description":"Estimated storage space (GB) used in billing cycle."},"estimated_storage_for_month":{"type":"integer","description":"Estimated sum of free and paid storage space (GB) used in billing cycle."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"days_left_in_billing_cycle":26,"estimated_paid_storage_for_month":32,"estimated_storage_for_month":27}';

    /**
     * daysLeftInBillingCycle: Numbers of days left in billing cycle.
     * estimatedPaidStorageForMonth: Estimated storage space (GB) used in billing cycle.
     * estimatedStorageForMonth: Estimated sum of free and paid storage space (GB) used in billing cycle.
     */
    public function __construct(#[MapFrom('days_left_in_billing_cycle')]
    public int $daysLeftInBillingCycle, #[MapFrom('estimated_paid_storage_for_month')]
    public int $estimatedPaidStorageForMonth, #[MapFrom('estimated_storage_for_month')]
    public int $estimatedStorageForMonth,)
    {
    }
}
