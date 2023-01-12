<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MoveColumn\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["position"],"type":"object","properties":{"position":{"pattern":"^(?:first|last|after:\\\\d+)$","type":"string","description":"The position of the column in a project. Can be one of: `first`, `last`, or `after:<column_id>` to place after the specified column.","examples":["last"]}}}';
    public const SCHEMA_TITLE = 'MoveColumn\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The position of the column in a project. Can be one of: `first`, `last`, or `after:<column_id>` to place after the specified column.
     */
    private string $position;
    /**
     * The position of the column in a project. Can be one of: `first`, `last`, or `after:<column_id>` to place after the specified column.
     */
    public function position() : string
    {
        return $this->position;
    }
}
