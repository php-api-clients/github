<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class SshSigningKey
{
    public const SCHEMA_JSON = '{"title":"SSH Signing Key","required":["key","id","title","created_at"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"}},"description":"A public SSH key used to sign Git commits"}';
    public const SCHEMA_TITLE = 'SSH Signing Key';
    public const SCHEMA_DESCRIPTION = 'A public SSH key used to sign Git commits';
    public ?string $key;
    public ?int $id;
    public ?string $title;
    public ?string $created_at;
    public function __construct(string $key, int $id, string $title, string $created_at)
    {
        $this->key = $key;
        $this->id = $id;
        $this->title = $title;
        $this->created_at = $created_at;
    }
}
