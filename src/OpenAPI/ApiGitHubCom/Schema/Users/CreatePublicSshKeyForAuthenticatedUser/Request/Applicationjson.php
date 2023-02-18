<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Users\CreatePublicSshKeyForAuthenticatedUser\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A descriptive name for the new key.","examples":["Personal MacBook Air"]},"key":{"pattern":"^ssh-(rsa|dss|ed25519) |^ecdsa-sha2-nistp(256|384|521) ","type":"string","description":"The public SSH key to add to your GitHub account."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    public string $title;
    /**
     * The public SSH key to add to your GitHub account.
     */
    public ?string $key;

    public function __construct(string $title, string $key)
    {
        $this->title = $title;
        $this->key   = $key;
    }
}
