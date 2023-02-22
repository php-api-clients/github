<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ScimError
{
    public const SCHEMA_JSON = '{"title":"Scim Error","type":"object","properties":{"message":{"type":["string","null"]},"documentation_url":{"type":["string","null"]},"detail":{"type":["string","null"]},"status":{"type":"integer"},"scimType":{"type":["string","null"]},"schemas":{"type":"array","items":{"type":"string"}}},"description":"Scim Error"}';
    public const SCHEMA_TITLE = 'Scim Error';
    public const SCHEMA_DESCRIPTION = 'Scim Error';
    public ?string $message;
    public ?string $documentation_url;
    public ?string $detail;
    public ?int $status;
    public ?string $scimType;
    public ?array $schemas;
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
