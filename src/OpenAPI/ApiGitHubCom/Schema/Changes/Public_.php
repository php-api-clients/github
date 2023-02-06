<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Public_
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\Public';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $from;
    public readonly bool $to;
    public function __construct(bool $from, bool $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
