<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request;

final class Exclude
{
    public const SCHEMA_JSON = '{"enum":["repositories"],"type":"string","description":"Allowed values that can be passed to the exclude param.","examples":["repositories"]}';
    public const SCHEMA_TITLE = 'Request\\Exclude';
    public const SCHEMA_DESCRIPTION = 'Allowed values that can be passed to the exclude param.';
}
