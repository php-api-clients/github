<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreatePublicSshKeyForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A descriptive name for the new key.","examples":["Personal MacBook Air"]},"key":{"pattern":"^ssh-(rsa|dss|ed25519) |^ecdsa-sha2-nistp(256|384|521) ","type":"string","description":"The public SSH key to add to your GitHub account."}}}';
    public const SCHEMA_EXAMPLE = '{"title":"Personal MacBook Air"}';
    public const SCHEMA_TITLE = 'CreatePublicSshKeyForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    public readonly ?string $title;
    /**
     * The public SSH key to add to your GitHub account.
     */
    public readonly string $key;
    public function __construct(string $title, string $key)
    {
        $this->title = $title;
        $this->key = $key;
    }
}
