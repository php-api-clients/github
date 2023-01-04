<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Topics
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Changes\\Topics';
    public const SCHEMA_DESCRIPTION = '';
    private $from;
    public function from()
    {
        return $this->from;
    }
}
