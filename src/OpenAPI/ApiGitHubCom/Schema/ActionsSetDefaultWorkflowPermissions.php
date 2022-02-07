<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsSetDefaultWorkflowPermissions
{
    public const SCHEMA_TITLE = 'actions-set-default-workflow-permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The default workflow permissions granted to the GITHUB_TOKEN when running workflows in an organization.
     */
    private string $default_workflow_permissions;
    /**
     * Whether GitHub Actions can submit approving pull request reviews.
     */
    private bool $can_approve_pull_request_reviews;
    /**
     * The default workflow permissions granted to the GITHUB_TOKEN when running workflows in an organization.
     */
    public function default_workflow_permissions() : string
    {
        return $this->default_workflow_permissions;
    }
    /**
     * Whether GitHub Actions can submit approving pull request reviews.
     */
    public function can_approve_pull_request_reviews() : bool
    {
        return $this->can_approve_pull_request_reviews;
    }
}
