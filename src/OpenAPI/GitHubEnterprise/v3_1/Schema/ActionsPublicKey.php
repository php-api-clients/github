<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ActionsPublicKey
{
    public const SCHEMA_JSON = '{"title":"ActionsPublicKey","required":["key_id","key"],"type":"object","properties":{"key_id":{"type":"string","description":"The identifier for the key.","examples":["1234567"]},"key":{"type":"string","description":"The Base64 encoded public key.","examples":["hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs="]},"id":{"type":"integer","examples":[2]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/user\\/keys\\/2"]},"title":{"type":"string","examples":["ssh-rsa AAAAB3NzaC1yc2EAAA"]},"created_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]}},"description":"The public key used for setting Actions Secrets."}';
    public const SCHEMA_TITLE = 'ActionsPublicKey';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting Actions Secrets.';
    /**
     * The identifier for the key.
     */
    private string $key_id;
    /**
     * The Base64 encoded public key.
     */
    private string $key;
    private ?int $id = null;
    private ?string $url = null;
    private ?string $title = null;
    private ?string $created_at = null;
    /**
     * The identifier for the key.
     */
    public function key_id() : string
    {
        return $this->key_id;
    }
    /**
     * The Base64 encoded public key.
     */
    public function key() : string
    {
        return $this->key;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
}
