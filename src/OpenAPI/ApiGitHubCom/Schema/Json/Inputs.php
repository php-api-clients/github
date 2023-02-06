<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Inputs
{
    public const SCHEMA_JSON = '{"maxProperties":10,"type":"object","description":"Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.","additionalProperties":{"type":"string"}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Json\\Inputs';
    public const SCHEMA_DESCRIPTION = 'Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.';
    public function __construct()
    {
    }
}
