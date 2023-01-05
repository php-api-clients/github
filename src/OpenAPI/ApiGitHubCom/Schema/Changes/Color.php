<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Color
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the color if the action was `edited`."}}}';
    public const SCHEMA_TITLE = 'Changes\\Color';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous version of the color if the action was `edited`.
     */
    private string $from;
    /**
     * The previous version of the color if the action was `edited`.
     */
    public function from() : string
    {
        return $this->from;
    }
}