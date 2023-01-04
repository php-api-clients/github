<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CF694556E3Cc88993A89F1Ed7Afdf4E13
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'c_f694556e3cc88993a89f1ed7afdf4e13';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    private string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CF694556E3Cc88993A89F1Ed7Afdf4E13\Errors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CF694556E3Cc88993A89F1Ed7Afdf4E13\Errors::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CF694556E3Cc88993A89F1Ed7Afdf4E13\Errors>
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
