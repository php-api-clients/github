<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespacesUserPublicKey
{
    public const SCHEMA_JSON = '{"title":"CodespacesUserPublicKey","required":["key_id","key"],"type":"object","properties":{"key_id":{"type":"string","description":"The identifier for the key.","examples":["1234567"]},"key":{"type":"string","description":"The Base64 encoded public key.","examples":["hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs="]}},"description":"The public key used for setting user Codespaces\' Secrets."}';
    public const SCHEMA_TITLE = 'CodespacesUserPublicKey';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting user Codespaces\' Secrets.';
    /**
     * The identifier for the key.
     */
    public readonly string $key_id;
    /**
     * The Base64 encoded public key.
     */
    public readonly string $key;
    public function __construct(string $key_id, string $key)
    {
        $this->key_id = $key_id;
        $this->key = $key;
    }
}
