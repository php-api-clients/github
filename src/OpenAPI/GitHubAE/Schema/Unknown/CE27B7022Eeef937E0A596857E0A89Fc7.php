<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CE27B7022Eeef937E0A596857E0A89Fc7
{
    public const SCHEMA_JSON = '{"required":["login"],"type":"object","properties":{"login":{"type":"string","description":"The organization\'s new name."}}}';
    public const SCHEMA_TITLE = 'c_e27b7022eeef937e0a596857e0a89fc7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The organization's new name.
     */
    private string $login;
    /**
     * The organization's new name.
     */
    public function login() : string
    {
        return $this->login;
    }
}
