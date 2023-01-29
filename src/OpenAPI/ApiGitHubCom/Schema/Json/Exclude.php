<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Exclude
{
    public const SCHEMA_JSON = '{"enum":["repositories"],"type":"string","description":"Allowed values that can be passed to the exclude param.","examples":["repositories"]}';
    public const SCHEMA_TITLE = 'Json\\Exclude';
    public const SCHEMA_DESCRIPTION = 'Allowed values that can be passed to the exclude param.';
    public function __construct()
    {
    }
}
