<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\SetSelectedReposForOrgVariable\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"The IDs of the repositories that can access the organization variable."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_repository_ids":[24,25]}';

    /**
     * selectedRepositoryIds: The IDs of the repositories that can access the organization variable.
     */
    public function __construct(#[MapFrom('selected_repository_ids')]
    public array $selectedRepositoryIds,)
    {
    }
}
