<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet43E8B1E5\Tiet0645CECB\Tiet29093A4D;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet8B7662E9
{
    public const SCHEMA_JSON         = '{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"login":"generated","node_id":"generated","organization_billing_email":"generated","type":"generated"}';

    public function __construct(public int $id, public string $login, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('organization_billing_email')]
    public string|null $organizationBillingEmail, public string $type,)
    {
    }
}
