<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsGetDefaultWorkflowPermissions
{
    public const SCHEMA_TITLE = 'actions-get-default-workflow-permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The default workflow permissions granted to the GITHUB_TOKEN when running workflows.
     */
    private string $default_workflow_permissions;
    /**
     * Whether GitHub Actions can approve pull requests. Enabling this can be a security risk.
     */
    private bool $can_approve_pull_request_reviews;
    /**
     * The default workflow permissions granted to the GITHUB_TOKEN when running workflows.
     */
    public function default_workflow_permissions() : string
    {
        return $this->default_workflow_permissions;
    }
    /**
     * Whether GitHub Actions can approve pull requests. Enabling this can be a security risk.
     */
    public function can_approve_pull_request_reviews() : bool
    {
        return $this->can_approve_pull_request_reviews;
    }
}
