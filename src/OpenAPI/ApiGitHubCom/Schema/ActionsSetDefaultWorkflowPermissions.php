<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsSetDefaultWorkflowPermissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_workflow_permissions":{"enum":["read","write"],"type":"string","description":"The default workflow permissions granted to the GITHUB_TOKEN when running workflows."},"can_approve_pull_request_reviews":{"type":"boolean","description":"Whether GitHub Actions can approve pull requests. Enabling this can be a security risk."}}}';
    public const SCHEMA_TITLE = 'actions-set-default-workflow-permissions';
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
