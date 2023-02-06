<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError;

final class Errors
{
    public const SCHEMA_JSON = '{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'ValidationError\\Errors';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $resource;
    public readonly ?string $field;
    public readonly ?string $message;
    public readonly string $code;
    public readonly ?int $index;
    public readonly mixed $value;
    public function __construct(string $resource, string $field, string $message, string $code, int $index, mixed $value)
    {
        $this->resource = $resource;
        $this->field = $field;
        $this->message = $message;
        $this->code = $code;
        $this->index = $index;
        $this->value = $value;
    }
}
