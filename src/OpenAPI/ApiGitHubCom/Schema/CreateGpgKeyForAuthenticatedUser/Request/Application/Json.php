<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateGpgKeyForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["armored_public_key"],"type":"object","properties":{"name":{"type":"string","description":"A descriptive name for the new key."},"armored_public_key":{"type":"string","description":"A GPG key in ASCII-armored format."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateGpgKeyForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    public readonly ?string $name;
    /**
     * A GPG key in ASCII-armored format.
     */
    public readonly string $armored_public_key;
    public function __construct(string $name, string $armored_public_key)
    {
        $this->name = $name;
        $this->armored_public_key = $armored_public_key;
    }
}
