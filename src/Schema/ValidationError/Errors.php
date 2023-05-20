<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ValidationError;

final readonly class Errors
{
    public const SCHEMA_JSON         = '{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"resource":"generated","field":"generated","message":"generated","code":"generated","index":5,"value":null}';

    public function __construct(public ?string $resource, public ?string $field, public ?string $message, public string $code, public ?int $index, public null|string|int|array $value)
    {
    }
}
