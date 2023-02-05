<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Permission
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Changes\\Permission';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $from;
    public readonly ?string $to;
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
