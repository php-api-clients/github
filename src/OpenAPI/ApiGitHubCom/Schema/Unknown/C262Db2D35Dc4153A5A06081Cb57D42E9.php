<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C262Db2D35Dc4153A5A06081Cb57D42E9
{
    public const SCHEMA_JSON = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A descriptive name for the new key.","examples":["Personal MacBook Air"]},"key":{"pattern":"^ssh-(rsa|dss|ed25519) |^ecdsa-sha2-nistp(256|384|521) ","type":"string","description":"The public SSH key to add to your GitHub account."}}}';
    public const SCHEMA_TITLE = 'c_262db2d35dc4153a5a06081cb57d42e9';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    private ?string $title = null;
    /**
     * The public SSH key to add to your GitHub account.
     */
    private string $key;
    /**
     * A descriptive name for the new key.
     */
    public function title() : ?string
    {
        return $this->title;
    }
    /**
     * The public SSH key to add to your GitHub account.
     */
    public function key() : string
    {
        return $this->key;
    }
}
