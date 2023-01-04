<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C197505B37575Ae3739584A4C9Efe0801;

final class Errors
{
    public const SCHEMA_JSON = '{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}';
    public const SCHEMA_TITLE = 'C197505B37575Ae3739584A4C9Efe0801\\Errors';
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
