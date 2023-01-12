<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateRequiredWorkflow\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"workflow_file_path":{"type":"string","description":"Path of the workflow file to be configured as a required workflow."},"repository_id":{"type":"string","description":"The ID of the repository that contains the workflow file."},"scope":{"enum":["selected","all"],"type":"string","description":"Enable the required workflow for all repositories or selected repositories in the organization.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`."}}}';
    public const SCHEMA_TITLE = 'UpdateRequiredWorkflow\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Path of the workflow file to be configured as a required workflow.
     */
    private string $workflow_file_path;
    /**
     * The ID of the repository that contains the workflow file.
     */
    private string $repository_id;
    /**
     * Enable the required workflow for all repositories or selected repositories in the organization.
     */
    private string $scope;
    /**
     * A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * Path of the workflow file to be configured as a required workflow.
     */
    public function workflow_file_path() : string
    {
        return $this->workflow_file_path;
    }
    /**
     * The ID of the repository that contains the workflow file.
     */
    public function repository_id() : string
    {
        return $this->repository_id;
    }
    /**
     * Enable the required workflow for all repositories or selected repositories in the organization.
     */
    public function scope() : string
    {
        return $this->scope;
    }
    /**
     * A list of repository IDs where you want to enable the required workflow. A list of repository IDs where you want to enable the required workflow. You can only provide a list of repository ids when the `scope` is set to `selected`.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
