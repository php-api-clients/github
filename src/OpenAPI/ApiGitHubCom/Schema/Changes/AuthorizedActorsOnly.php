<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class AuthorizedActorsOnly
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}}';
    public const SCHEMA_TITLE = 'Changes\\AuthorizedActorsOnly';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?bool $from;
    public function __construct(bool $from)
    {
        $this->from = $from;
    }
}
