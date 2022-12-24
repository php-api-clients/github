<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsWorkflowAccessToRepository
{
    public const SCHEMA_JSON = '{"required":["access_level"],"type":"object","properties":{"access_level":{"enum":["none","user","organization","enterprise"],"type":"string","description":"Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the\\nrepository.\\n\\n`none` means the access is only possible from workflows in this repository. `user` level access allows sharing across user owned private repos only. `organization` level access allows sharing across the organization. `enterprise` level access allows sharing across the enterprise."}}}';
    public const SCHEMA_TITLE = 'actions-workflow-access-to-repository';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the
    repository.
    
    `none` means the access is only possible from workflows in this repository. `user` level access allows sharing across user owned private repos only. `organization` level access allows sharing across the organization. `enterprise` level access allows sharing across the enterprise.
    */
    private string $access_level;
    /**
    * Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the
    repository.
    
    `none` means the access is only possible from workflows in this repository. `user` level access allows sharing across user owned private repos only. `organization` level access allows sharing across the organization. `enterprise` level access allows sharing across the enterprise.
    */
    public function access_level() : string
    {
        return $this->access_level;
    }
}
