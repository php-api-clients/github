<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ValidationErrorSimple
{
    public const SCHEMA_JSON = '{"title":"Validation Error Simple","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}},"description":"Validation Error Simple"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Validation Error Simple';
    public const SCHEMA_DESCRIPTION = 'Validation Error Simple';
    public readonly string $message;
    public readonly string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple\Errors>
     */
    public readonly array $errors;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple\Errors> $errors
     */
    public function __construct(string $message, string $documentation_url, array $errors)
    {
        $this->message = $message;
        $this->documentation_url = $documentation_url;
        $this->errors = $errors;
    }
}
