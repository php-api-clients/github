<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DependabotPublicKey
{
    public const SCHEMA_TITLE = 'DependabotPublicKey';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting Dependabot Secrets.';
    /**
     * The identifier for the key.
     */
    private string $key_id;
    /**
     * The Base64 encoded public key.
     */
    private string $key;
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
}
