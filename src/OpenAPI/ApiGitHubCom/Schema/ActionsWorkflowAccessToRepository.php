<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsWorkflowAccessToRepository
{
    public const SCHEMA_TITLE = 'actions-workflow-access-to-repository';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the
    repository. `none` means access is only possible from workflows in this repository.
    */
    private string $access_level;
    /**
    * Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the
    repository. `none` means access is only possible from workflows in this repository.
    */
    public function access_level() : string
    {
        return $this->access_level;
    }
}
