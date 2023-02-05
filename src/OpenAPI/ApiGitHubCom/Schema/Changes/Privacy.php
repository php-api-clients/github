<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Privacy
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s privacy if the action was `edited`."}}}';
    public const SCHEMA_TITLE = 'Changes\\Privacy';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous version of the team's privacy if the action was `edited`.
     */
    public readonly string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
