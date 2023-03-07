<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\UpdateRequiredWorkflow\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"workflow_file_path":{"type":"string","description":"Path of the workflow file to be configured as a required workflow."},"repository_id":{"type":"string","description":"The ID of the repository that contains the workflow file."},"scope":{"enum":["selected","all"],"type":"string","description":"Enable the required workflow for all repositories or selected repositories in the organization.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"workflow_file_path":"generated_workflow_file_path","repository_id":"generated_repository_id","scope":"generated_scope","selected_repository_ids":[13]}';
    /**
     * workflow_file_path: Path of the workflow file to be configured as a required workflow.
     * repository_id: The ID of the repository that contains the workflow file.
     * scope: Enable the required workflow for all repositories or selected repositories in the organization.
     * selected_repository_ids: A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`.
     * @param ?array<int> $selected_repository_ids
     */
    public function __construct(public ?string $workflow_file_path, public ?string $repository_id, public ?string $scope, public ?array $selected_repository_ids)
    {
    }
}
