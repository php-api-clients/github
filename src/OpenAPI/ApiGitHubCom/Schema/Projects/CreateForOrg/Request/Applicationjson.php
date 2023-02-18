<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Projects\CreateForOrg\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the project."},"body":{"type":"string","description":"The description of the project."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the project.
     */
    public ?string $name;
    /**
     * The description of the project.
     */
    public string $body;

    public function __construct(string $name, string $body)
    {
        $this->name = $name;
        $this->body = $body;
    }
}
