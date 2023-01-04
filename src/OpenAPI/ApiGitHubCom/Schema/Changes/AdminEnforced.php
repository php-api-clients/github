<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class AdminEnforced
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}}';
    public const SCHEMA_TITLE = 'Changes\\AdminEnforced';
    public const SCHEMA_DESCRIPTION = '';
    private $from;
    public function from()
    {
        return $this->from;
    }
}
