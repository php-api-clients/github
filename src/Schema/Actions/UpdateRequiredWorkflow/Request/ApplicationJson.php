<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\UpdateRequiredWorkflow\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"workflow_file_path":{"type":"string","description":"Path of the workflow file to be configured as a required workflow."},"repository_id":{"type":"string","description":"The ID of the repository that contains the workflow file."},"scope":{"enum":["selected","all"],"type":"string","description":"Enable the required workflow for all repositories or selected repositories in the organization.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"workflow_file_path":"generated","repository_id":"generated","scope":"selected","selected_repository_ids":[24,25]}';

    /**
     * workflowFilePath: Path of the workflow file to be configured as a required workflow.
     * repositoryId: The ID of the repository that contains the workflow file.
     * scope: Enable the required workflow for all repositories or selected repositories in the organization.
     * selectedRepositoryIds: A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`.
     */
    public function __construct(#[MapFrom('workflow_file_path')] public ?string $workflowFilePath, #[MapFrom('repository_id')] public ?string $repositoryId, public ?string $scope, #[MapFrom('selected_repository_ids')] public ?array $selectedRepositoryIds)
    {
    }
}
