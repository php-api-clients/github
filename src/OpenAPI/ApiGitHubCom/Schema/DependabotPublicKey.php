<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DependabotPublicKey
{
    public const SCHEMA_JSON = '{"title":"DependabotPublicKey","required":["key_id","key"],"type":"object","properties":{"key_id":{"type":"string","description":"The identifier for the key.","examples":["1234567"]},"key":{"type":"string","description":"The Base64 encoded public key.","examples":["hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs="]}},"description":"The public key used for setting Dependabot Secrets."}';
    public const SCHEMA_EXAMPLE = '{"key_id":"1234567","key":"hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs="}';
    public const SCHEMA_TITLE = 'DependabotPublicKey';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting Dependabot Secrets.';
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
