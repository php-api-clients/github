<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C4Ca76C79C61D9C9De7C578Bd7Aaf0518
{
    public const SCHEMA_JSON = '{"required":["authorized_key"],"type":"object","properties":{"authorized_key":{"type":"string","description":"The public SSH key."}}}';
    public const SCHEMA_TITLE = 'c_4ca76c79c61d9c9de7c578bd7aaf0518';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The public SSH key.
     */
    private string $authorized_key;
    /**
     * The public SSH key.
     */
    public function authorized_key() : string
    {
        return $this->authorized_key;
    }
}
