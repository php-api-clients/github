<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Note
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Changes\\Note';
    public const SCHEMA_DESCRIPTION = '';
    private $from;
    public function from()
    {
        return $this->from;
    }
}
