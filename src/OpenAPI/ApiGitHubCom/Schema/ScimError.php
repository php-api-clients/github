<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimError
{
    public const SCHEMA_JSON = '{"title":"Scim Error","type":"object","properties":{"message":{"type":["string","null"]},"documentation_url":{"type":["string","null"]},"detail":{"type":["string","null"]},"status":{"type":"integer"},"scimType":{"type":["string","null"]},"schemas":{"type":"array","items":{"type":"string"}}},"description":"Scim Error"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Scim Error';
    public const SCHEMA_DESCRIPTION = 'Scim Error';
    public readonly ?string $message;
    public readonly ?string $documentation_url;
    public readonly ?string $detail;
    public readonly int $status;
    public readonly ?string $scimType;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError\Schemas>
     */
    public readonly array $schemas;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError\Schemas> $schemas
     */
    public function __construct(string $message, string $documentation_url, string $detail, int $status, string $scimType, array $schemas)
    {
        $this->message = $message;
        $this->documentation_url = $documentation_url;
        $this->detail = $detail;
        $this->status = $status;
        $this->scimType = $scimType;
        $this->schemas = $schemas;
    }
}
