<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ValidationError
{
    public const SCHEMA_JSON = '{"title":"Validation Error","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}}},"description":"Validation Error"}';
    public const SCHEMA_TITLE = 'Validation Error';
    public const SCHEMA_DESCRIPTION = 'Validation Error';
    private string $message;
    private string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError\Errors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError\Errors::class)
     */
    private array $errors = array();
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError\Errors>
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
