<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\ValidationError;

final class Errors
{
    public const SCHEMA_TITLE       = 'validation-error::errors';
    public const SCHEMA_DESCRIPTION = '';
    private string $resource;
    private string $field;
    private string $message;
    private string $code;
    private int $index;
    private $value;

    public function resource(): string
    {
        return $this->resource;
    }

    public function field(): string
    {
        return $this->field;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function code(): string
    {
        return $this->code;
    }

    public function index(): int
    {
        return $this->index;
    }

    public function value()
    {
        return $this->value;
    }
}