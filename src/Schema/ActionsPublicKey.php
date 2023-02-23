<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class ActionsPublicKey
{
    public const SCHEMA_JSON = '{"title":"ActionsPublicKey","required":["key_id","key"],"type":"object","properties":{"key_id":{"type":"string","description":"The identifier for the key.","examples":["1234567"]},"key":{"type":"string","description":"The Base64 encoded public key.","examples":["hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs="]},"id":{"type":"integer","examples":[2]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/user\\/keys\\/2"]},"title":{"type":"string","examples":["ssh-rsa AAAAB3NzaC1yc2EAAA"]},"created_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]}},"description":"The public key used for setting Actions Secrets."}';
    public const SCHEMA_TITLE = 'ActionsPublicKey';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting Actions Secrets.';
    /**
     * The identifier for the key.
     */
    public ?string $key_id;
    /**
     * The Base64 encoded public key.
     */
    public ?string $key;
    public int $id;
    public string $url;
    public string $title;
    public string $created_at;
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
