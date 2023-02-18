<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ValidationErrorSimple
{
    public const SCHEMA_JSON        = '{"title":"Validation Error Simple","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}},"description":"Validation Error Simple"}';
    public const SCHEMA_TITLE       = 'Validation Error Simple';
    public const SCHEMA_DESCRIPTION = 'Validation Error Simple';
    public ?string $message;
    public ?string $documentation_url;
    public array $errors;

    public function __construct(string $message, string $documentation_url, array $errors)
    {
        $this->message           = $message;
        $this->documentation_url = $documentation_url;
        $this->errors            = $errors;
    }
}
