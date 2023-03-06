<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class MarketplaceAccount
{
    public const SCHEMA_JSON = '{"title":"Marketplace Account","required":["url","id","type","login"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"type":{"type":"string"},"node_id":{"type":"string"},"login":{"type":"string"},"email":{"type":["string","null"],"format":"email"},"organization_billing_email":{"type":["string","null"],"format":"email"}}}';
    public const SCHEMA_TITLE = 'Marketplace Account';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","id":13,"type":"generated_type","node_id":"generated_node_id","login":"generated_login","email":"generated_email","organization_billing_email":"generated_organization_billing_email"}';
    public function __construct(public ?string $url, public ?int $id, public ?string $type, public string $node_id, public ?string $login, public ?string $email, public ?string $organization_billing_email)
    {
    }
}
