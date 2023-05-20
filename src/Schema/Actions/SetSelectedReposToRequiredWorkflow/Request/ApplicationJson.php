<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\SetSelectedReposToRequiredWorkflow\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"The IDs of the repositories for which the workflow should be required."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_repository_ids":[24,25]}';

    /**
     * selectedRepositoryIds: The IDs of the repositories for which the workflow should be required.
     */
    public function __construct(#[MapFrom('selected_repository_ids')] public array $selectedRepositoryIds)
    {
    }
}
