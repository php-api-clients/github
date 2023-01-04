<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class ContentType
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Changes\\ContentType';
    public const SCHEMA_DESCRIPTION = '';
    private $from;
    private string $to;
    public function from()
    {
        return $this->from;
    }
    public function to() : string
    {
        return $this->to;
    }
}
