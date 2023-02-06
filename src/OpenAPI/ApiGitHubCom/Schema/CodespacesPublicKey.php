<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespacesPublicKey
{
    public const SCHEMA_JSON = '{"title":"CodespacesPublicKey","required":["key_id","key"],"type":"object","properties":{"key_id":{"type":"string","description":"The identifier for the key.","examples":["1234567"]},"key":{"type":"string","description":"The Base64 encoded public key.","examples":["hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs="]},"id":{"type":"integer","examples":[2]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/user\\/keys\\/2"]},"title":{"type":"string","examples":["ssh-rsa AAAAB3NzaC1yc2EAAA"]},"created_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]}},"description":"The public key used for setting Codespaces secrets."}';
    public const SCHEMA_EXAMPLE = '{"key_id":"1234567","key":"hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs=","id":2,"url":"https:\\/\\/api.github.com\\/user\\/keys\\/2","title":"ssh-rsa AAAAB3NzaC1yc2EAAA","created_at":"2011-01-26T19:01:12Z"}';
    public const SCHEMA_TITLE = 'CodespacesPublicKey';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting Codespaces secrets.';
    /**
     * The identifier for the key.
     */
    public readonly string $key_id;
    /**
     * The Base64 encoded public key.
     */
    public readonly string $key;
    public readonly ?int $id;
    public readonly ?string $url;
    public readonly ?string $title;
    public readonly ?string $created_at;
    public function __construct(string $key_id, string $key, int $id, string $url, string $title, string $created_at)
    {
        $this->key_id = $key_id;
        $this->key = $key;
        $this->id = $id;
        $this->url = $url;
        $this->title = $title;
        $this->created_at = $created_at;
    }
}
