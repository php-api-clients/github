<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json;

final class H503
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'Operation\\Projects\\Response\\Application\\Json\\H503';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $code;
    public readonly string $message;
    public readonly string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H503\Errors>
     */
    public readonly array $errors;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H503\Errors> $errors
     */
    public function __construct(string $code, string $message, string $documentation_url, array $errors)
    {
        $this->code = $code;
        $this->message = $message;
        $this->documentation_url = $documentation_url;
        $this->errors = $errors;
    }
}
