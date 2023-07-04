<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ScimError
{
    public const SCHEMA_JSON         = '{"title":"Scim Error","type":"object","properties":{"message":{"type":["string","null"]},"documentation_url":{"type":["string","null"]},"detail":{"type":["string","null"]},"status":{"type":"integer"},"scimType":{"type":["string","null"]},"schemas":{"type":"array","items":{"type":"string"}}},"description":"Scim Error"}';
    public const SCHEMA_TITLE        = 'Scim Error';
    public const SCHEMA_DESCRIPTION  = 'Scim Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","documentation_url":"generated","detail":"generated","status":6,"scimType":"generated","schemas":["generated","generated"]}';

    public function __construct(public string|null $message, #[MapFrom('documentation_url')]
    public string|null $documentationUrl, public string|null $detail, public int|null $status, public string|null $scimType, public array|null $schemas,)
    {
    }
}
