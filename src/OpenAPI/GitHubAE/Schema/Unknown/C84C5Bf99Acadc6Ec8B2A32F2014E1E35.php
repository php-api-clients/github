<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C84C5Bf99Acadc6Ec8B2A32F2014E1E35
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'c_84c5bf99acadc6ec8b2a32f2014e1e35';
    public const SCHEMA_DESCRIPTION = '';
    private string $code;
    private string $message;
    private string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C84C5Bf99Acadc6Ec8B2A32F2014E1E35\Errors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C84C5Bf99Acadc6Ec8B2A32F2014E1E35\Errors::class)
     */
    private array $errors = array();
    public function code() : string
    {
        return $this->code;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C84C5Bf99Acadc6Ec8B2A32F2014E1E35\Errors>
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
