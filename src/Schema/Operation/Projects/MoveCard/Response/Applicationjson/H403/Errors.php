<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Errors
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"resource":{"type":"string"},"field":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code_null","message":"generated_message_null","resource":"generated_resource_null","field":"generated_field_null"}';
    public function __construct(public ?string $code, public ?string $message, public ?string $resource, public ?string $field)
    {
    }
}
