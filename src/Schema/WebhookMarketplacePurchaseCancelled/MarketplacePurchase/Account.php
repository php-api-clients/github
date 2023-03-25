<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchaseCancelled\MarketplacePurchase;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Account
{
    public const SCHEMA_JSON = '{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"login":"generated_login_null","nodeId":"generated_node_id_null","organizationBillingEmail":"generated_organization_billing_email_null","type":"generated_type_null"}';
    public function __construct(public int $id, public string $login, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('organization_billing_email')] public ?string $organizationBillingEmail, public string $type)
    {
    }
}
