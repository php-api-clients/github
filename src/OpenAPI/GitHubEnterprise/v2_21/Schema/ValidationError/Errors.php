<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\ValidationError;

final class Errors
{
    public const SCHEMA_TITLE = 'validation-error::errors';
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
