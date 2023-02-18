<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Projects\MoveColumn\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["position"],"type":"object","properties":{"position":{"pattern":"^(?:first|last|after:\\\\d+)$","type":"string","description":"The position of the column in a project. Can be one of: `first`, `last`, or `after:<column_id>` to place after the specified column.","examples":["last"]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The position of the column in a project. Can be one of: `first`, `last`, or `after:<column_id>` to place after the specified column.
     */
    public ?string $position;

    public function __construct(string $position)
    {
        $this->position = $position;
    }
}
