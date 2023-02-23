<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\SetSelectedReposForOrgVariable\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"The IDs of the repositories that can access the organization variable."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The IDs of the repositories that can access the organization variable.
     */
    public ?array $selected_repository_ids;
    public function __construct(array $selected_repository_ids)
    {
        $this->selected_repository_ids = $selected_repository_ids;
    }
}
