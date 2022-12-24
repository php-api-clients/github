<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CC4Fc9Be802A4A2A9A8586F04507Bf57A
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the project","examples":["Week One Sprint"]},"body":{"type":["string","null"],"description":"Body of the project","examples":["This project represents the sprint of the first week in January"]}}}';
    public const SCHEMA_TITLE = 'c_c4fc9be802a4a2a9a8586f04507bf57a';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the project
     */
    private string $name;
    /**
     * Body of the project
     */
    private $body;
    /**
     * Name of the project
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Body of the project
     */
    public function body()
    {
        return $this->body;
    }
}
