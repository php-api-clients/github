<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

abstract readonly class Abstract84c5bf99acadc6ec8b2a32f2014e1e35
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code_null","message":"generated_message_null","documentation_url":"generated_documentation_url_null","errors":[{"code":"generated_code_null","message":"generated_message_null"}]}';

    /**
     * @param ?array<Errors> $errors
     */
    public function __construct(public ?string $code, public ?string $message, #[MapFrom('documentation_url')] public ?string $documentationUrl, #[CastListToType(Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors::class)] public ?array $errors)
    {
    }
}
