<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs to enable for GitHub Actions."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_repository_ids":[24,25]}';

    /**
     * selectedRepositoryIds: List of repository IDs to enable for GitHub Actions.
     */
    public function __construct(#[MapFrom('selected_repository_ids')] public array $selectedRepositoryIds)
    {
    }
}
