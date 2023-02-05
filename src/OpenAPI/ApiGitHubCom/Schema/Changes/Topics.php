<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Topics
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Changes\\Topics';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topics\From>
     */
    public readonly array $from;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topics\From> $from
     */
    public function __construct(array $from)
    {
        $this->from = $from;
    }
}
