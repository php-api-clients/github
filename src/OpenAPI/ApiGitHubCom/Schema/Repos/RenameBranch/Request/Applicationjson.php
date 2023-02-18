<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\RenameBranch\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["new_name"],"type":"object","properties":{"new_name":{"type":"string","description":"The new name of the branch."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new name of the branch.
     */
    public ?string $new_name;

    public function __construct(string $new_name)
    {
        $this->new_name = $new_name;
    }
}
