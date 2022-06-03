<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ValidationError
{
    public const SCHEMA_TITLE = 'Validation Error';
    public const SCHEMA_DESCRIPTION = 'Validation Error';
    private string $message;
    private string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ValidationError\Errors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ValidationError\Errors::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ValidationError\Errors>
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
