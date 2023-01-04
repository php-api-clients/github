<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert;

final class Tool
{
    public const SCHEMA_JSON = '{"required":["name","version"],"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}}';
    public const SCHEMA_TITLE = 'Alert\\Tool';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tool used to generate the code scanning analysis alert.
     */
    private string $name;
    /**
     * The version of the tool used to detect the alert.
     */
    private $version;
    /**
     * The name of the tool used to generate the code scanning analysis alert.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The version of the tool used to detect the alert.
     */
    public function version()
    {
        return $this->version;
    }
}
