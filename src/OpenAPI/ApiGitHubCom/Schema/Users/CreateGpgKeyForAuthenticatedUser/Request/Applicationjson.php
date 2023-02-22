<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Users\CreateGpgKeyForAuthenticatedUser\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["armored_public_key"],"type":"object","properties":{"name":{"type":"string","description":"A descriptive name for the new key."},"armored_public_key":{"type":"string","description":"A GPG key in ASCII-armored format."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    public string $name;
    /**
     * A GPG key in ASCII-armored format.
     */
    public ?string $armored_public_key;
    public function __construct(string $name, string $armored_public_key)
    {
        $this->name = $name;
        $this->armored_public_key = $armored_public_key;
    }
}
