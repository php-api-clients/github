<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CombinedBillingUsage
{
    public const SCHEMA_JSON = '{"required":["days_left_in_billing_cycle","estimated_paid_storage_for_month","estimated_storage_for_month"],"type":"object","properties":{"days_left_in_billing_cycle":{"type":"integer","description":"Numbers of days left in billing cycle."},"estimated_paid_storage_for_month":{"type":"integer","description":"Estimated storage space (GB) used in billing cycle."},"estimated_storage_for_month":{"type":"integer","description":"Estimated sum of free and paid storage space (GB) used in billing cycle."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"days_left_in_billing_cycle":13,"estimated_paid_storage_for_month":13,"estimated_storage_for_month":13}';
    /**
     * days_left_in_billing_cycle: Numbers of days left in billing cycle.
     * estimated_paid_storage_for_month: Estimated storage space (GB) used in billing cycle.
     * estimated_storage_for_month: Estimated sum of free and paid storage space (GB) used in billing cycle.
     */
    public function __construct(public ?int $days_left_in_billing_cycle, public ?int $estimated_paid_storage_for_month, public ?int $estimated_storage_for_month)
    {
    }
}
