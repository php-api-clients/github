<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateRequiredWorkflow\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["workflow_file_path","repository_id"],"type":"object","properties":{"workflow_file_path":{"type":"string","description":"Path of the workflow file to be configured as a required workflow."},"repository_id":{"type":"string","description":"The ID of the repository that contains the workflow file."},"scope":{"enum":["selected","all"],"type":"string","description":"Enable the required workflow for all repositories or selected repositories in the organization.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`."}}}';
    public const SCHEMA_TITLE = 'CreateRequiredWorkflow\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Path of the workflow file to be configured as a required workflow.
     */
    public readonly string $workflow_file_path;
    /**
     * The ID of the repository that contains the workflow file.
     */
    public readonly string $repository_id;
    /**
     * Enable the required workflow for all repositories or selected repositories in the organization.
     */
    public readonly ?string $scope;
    /**
     * A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds>
     */
    public readonly array $selected_repository_ids;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds> $selected_repository_ids
     */
    public function __construct(string $workflow_file_path, string $repository_id, string $scope, array $selected_repository_ids)
    {
        $this->workflow_file_path = $workflow_file_path;
        $this->repository_id = $repository_id;
        $this->scope = $scope;
        $this->selected_repository_ids = $selected_repository_ids;
    }
}