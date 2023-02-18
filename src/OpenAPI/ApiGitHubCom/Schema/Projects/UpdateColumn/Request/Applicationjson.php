<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Projects\UpdateColumn\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the project column
     */
    public ?string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
