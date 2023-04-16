<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class ValidationError
{
    public const SCHEMA_JSON = '{"title":"Validation Error","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}}},"description":"Validation Error"}';
    public const SCHEMA_TITLE = 'Validation Error';
    public const SCHEMA_DESCRIPTION = 'Validation Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentation_url":"generated_documentation_url_null","errors":[{"resource":"generated_resource_null","field":"generated_field_null","message":"generated_message_null","code":"generated_code_null","index":13,"value":"generated_value_null"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\ValidationError\Errors> $errors
     */
    public function __construct(public string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public string $documentationUrl, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ValidationError\Errors::class)] public ?array $errors)
    {
    }
}
