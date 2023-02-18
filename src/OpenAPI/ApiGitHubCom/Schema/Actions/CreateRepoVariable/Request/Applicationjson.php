<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actions\CreateRepoVariable\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["name","value"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable."},"value":{"type":"string","description":"The value of the variable."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the variable.
     */
    public ?string $name;
    /**
     * The value of the variable.
     */
    public ?string $value;

    public function __construct(string $name, string $value)
    {
        $this->name  = $name;
        $this->value = $value;
    }
}
