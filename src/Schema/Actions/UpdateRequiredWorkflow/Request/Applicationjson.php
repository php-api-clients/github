<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\UpdateRequiredWorkflow\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"workflow_file_path":{"type":"string","description":"Path of the workflow file to be configured as a required workflow."},"repository_id":{"type":"string","description":"The ID of the repository that contains the workflow file."},"scope":{"enum":["selected","all"],"type":"string","description":"Enable the required workflow for all repositories or selected repositories in the organization.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"workflow_file_path":"generated_workflow_file_path_null","repository_id":"generated_repository_id_null","scope":"selected","selected_repository_ids":[13]}';
    /**
     * workflowFilePath: Path of the workflow file to be configured as a required workflow.
     * repositoryId: The ID of the repository that contains the workflow file.
     * scope: Enable the required workflow for all repositories or selected repositories in the organization.
     * selectedRepositoryIds: A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`.
     * @param ?array<int> $selectedRepositoryIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('workflow_file_path')] public ?string $workflowFilePath, #[\EventSauce\ObjectHydrator\MapFrom('repository_id')] public ?string $repositoryId, public ?string $scope, #[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public ?array $selectedRepositoryIds)
    {
    }
}
