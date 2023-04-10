<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ScimError
{
    public const SCHEMA_JSON = '{"title":"Scim Error","type":"object","properties":{"message":{"type":["string","null"]},"documentation_url":{"type":["string","null"]},"detail":{"type":["string","null"]},"status":{"type":"integer"},"scimType":{"type":["string","null"]},"schemas":{"type":"array","items":{"type":"string"}}},"description":"Scim Error"}';
    public const SCHEMA_TITLE = 'Scim Error';
    public const SCHEMA_DESCRIPTION = 'Scim Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentation_url":"generated_documentation_url_null","detail":"generated_detail_null","status":13,"scimType":"generated_scimType_null","schemas":["generated_schemas_null"]}';
    /**
     * @param ?array<string> $schemas
     */
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl, public ?string $detail, public ?int $status, public ?string $scimType, public ?array $schemas)
    {
    }
}
