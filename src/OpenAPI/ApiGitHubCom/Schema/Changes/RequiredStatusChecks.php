<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class RequiredStatusChecks
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\RequiredStatusChecks';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\From>
     */
    public readonly array $from;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\From> $from
     */
    public function __construct(array $from)
    {
        $this->from = $from;
    }
}
