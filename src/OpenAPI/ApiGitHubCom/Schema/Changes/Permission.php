<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Permission
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Changes\\Permission';
    public const SCHEMA_DESCRIPTION = '';
    private $from;
    private $to;
    public function from()
    {
        return $this->from;
    }
    public function to()
    {
        return $this->to;
    }
}
