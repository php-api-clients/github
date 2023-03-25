<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class MarketplaceAccount
{
    public const SCHEMA_JSON = '{"title":"Marketplace Account","required":["url","id","type","login"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"type":{"type":"string"},"node_id":{"type":"string"},"login":{"type":"string"},"email":{"type":["string","null"],"format":"email"},"organization_billing_email":{"type":["string","null"],"format":"email"}}}';
    public const SCHEMA_TITLE = 'Marketplace Account';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/example.com\\/","id":13,"type":"generated_type_null","nodeId":"generated_node_id_null","login":"generated_login_null","email":"generated_email_email","organizationBillingEmail":"generated_organization_billing_email_email"}';
    public function __construct(public string $url, public int $id, public string $type, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public string $login, public ?string $email, #[\EventSauce\ObjectHydrator\MapFrom('organization_billing_email')] public ?string $organizationBillingEmail)
    {
    }
}
