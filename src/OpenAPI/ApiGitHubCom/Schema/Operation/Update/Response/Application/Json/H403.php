<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Update\Response\Application\Json;

final class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Operation\\Update\\Response\\Application\\Json\\H403';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $message;
    public readonly string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Errors>
     */
    public readonly array $errors;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Errors> $errors
     */
    public function __construct(string $message, string $documentation_url, array $errors)
    {
        $this->message = $message;
        $this->documentation_url = $documentation_url;
        $this->errors = $errors;
    }
}
