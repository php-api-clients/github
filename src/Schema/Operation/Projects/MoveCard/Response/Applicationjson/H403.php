<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"resource":{"type":"string"},"field":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentation_url":"generated_documentation_url_null","errors":[{"code":"generated_code_null","message":"generated_message_null","resource":"generated_resource_null","field":"generated_field_null"}]}';
    /**
     * @param ?array<\ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403\Errors> $errors
     */
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403\Errors::class)] public ?array $errors)
    {
    }
}
