<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
abstract readonly class Abstractf87473c8c3f6c8b5a00abcd48e143093
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":"string"},"is_custom_ammount":{"type":"boolean"},"is_custom_amount":{"type":"boolean"},"is_one_time":{"type":"boolean"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":{"created_at":"generated_created_at_null","description":"generated_description_null","is_custom_ammount":false,"is_custom_amount":false,"is_one_time":false,"monthly_price_in_cents":13,"monthly_price_in_dollars":13,"name":"generated_name_null","node_id":"generated_node_id_null"}}';
    /**
     * from: The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.
     */
    public function __construct(public Schema\WebhookSponsorshipPendingTierChange\Changes\Tier\From $from)
    {
    }
}
