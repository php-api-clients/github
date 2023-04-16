<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403\Errors;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

final readonly class H403
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"resource":{"type":"string"},"field":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentation_url":"generated_documentation_url_null","errors":[{"code":"generated_code_null","message":"generated_message_null","resource":"generated_resource_null","field":"generated_field_null"}]}';

    /**
     * @param ?array<Errors> $errors
     */
    public function __construct(public ?string $message, #[MapFrom('documentation_url')] public ?string $documentationUrl, #[CastListToType(Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403\Errors::class)] public ?array $errors)
    {
    }
}
