<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Update\Response\Application\Json;

final class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Update\\Response\\Application\\Json\\H403';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    private string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Errors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Errors::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Errors>
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
