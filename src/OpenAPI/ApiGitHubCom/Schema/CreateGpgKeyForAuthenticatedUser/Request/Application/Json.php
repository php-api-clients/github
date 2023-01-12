<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateGpgKeyForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["armored_public_key"],"type":"object","properties":{"name":{"type":"string","description":"A descriptive name for the new key."},"armored_public_key":{"type":"string","description":"A GPG key in ASCII-armored format."}}}';
    public const SCHEMA_TITLE = 'CreateGpgKeyForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    private ?string $name = null;
    /**
     * A GPG key in ASCII-armored format.
     */
    private string $armored_public_key;
    /**
     * A descriptive name for the new key.
     */
    public function name() : ?string
    {
        return $this->name;
    }
    /**
     * A GPG key in ASCII-armored format.
     */
    public function armored_public_key() : string
    {
        return $this->armored_public_key;
    }
}
