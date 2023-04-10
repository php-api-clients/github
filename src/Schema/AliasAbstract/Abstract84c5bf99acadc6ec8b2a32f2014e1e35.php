<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract84c5bf99acadc6ec8b2a32f2014e1e35
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code_null","message":"generated_message_null","documentation_url":"generated_documentation_url_null","errors":[{"code":"generated_code_null","message":"generated_message_null"}]}';
    /**
     * @param ?array<\ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors> $errors
     */
    public function __construct(public ?string $code, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors::class)] public ?array $errors)
    {
    }
}
