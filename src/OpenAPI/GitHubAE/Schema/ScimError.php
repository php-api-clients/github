<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ScimError
{
    public const SCHEMA_JSON = '{"title":"Scim Error","type":"object","properties":{"message":{"type":["string","null"]},"documentation_url":{"type":["string","null"]},"detail":{"type":["string","null"]},"status":{"type":"integer"},"scimType":{"type":["string","null"]},"schemas":{"type":"array","items":{"type":"string"}}},"description":"Scim Error"}';
    public const SCHEMA_TITLE = 'Scim Error';
    public const SCHEMA_DESCRIPTION = 'Scim Error';
    private $message;
    private $documentation_url;
    private $detail;
    private int $status;
    private $scimType;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError\Schemas>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError\Schemas::class)
     */
    private array $schemas = array();
    public function message()
    {
        return $this->message;
    }
    public function documentation_url()
    {
        return $this->documentation_url;
    }
    public function detail()
    {
        return $this->detail;
    }
    public function status() : int
    {
        return $this->status;
    }
    public function scimType()
    {
        return $this->scimType;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError\Schemas>
     */
    public function schemas() : array
    {
        return $this->schemas;
    }
}
