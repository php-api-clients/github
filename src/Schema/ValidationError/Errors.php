<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ValidationError;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Errors
{
    public const SCHEMA_JSON = '{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"resource":"generated_resource","field":"generated_field","message":"generated_message","code":"generated_code","index":13,"value":"generated_value"}';
    public function __construct(public string $resource, public string $field, public string $message, public ?string $code, public int $index, public ?string $value)
    {
    }
}
