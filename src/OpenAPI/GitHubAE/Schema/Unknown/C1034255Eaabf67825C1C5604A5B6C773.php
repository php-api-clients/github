<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C1034255Eaabf67825C1C5604A5B6C773
{
    public const SCHEMA_JSON = '{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}';
    public const SCHEMA_TITLE = 'c_1034255eaabf67825c1c5604a5b6c773';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $resource = null;
    private ?string $field = null;
    private ?string $message = null;
    private string $code;
    private ?int $index = null;
    private $value;
    public function resource() : ?string
    {
        return $this->resource;
    }
    public function field() : ?string
    {
        return $this->field;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function code() : string
    {
        return $this->code;
    }
    public function index() : ?int
    {
        return $this->index;
    }
    public function value()
    {
        return $this->value;
    }
}
