<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ActionsSetDefaultWorkflowPermissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_workflow_permissions":{"enum":["read","write"],"type":"string","description":"The default workflow permissions granted to the GITHUB_TOKEN when running workflows."},"can_approve_pull_request_reviews":{"type":"boolean","description":"Whether GitHub Actions can approve pull requests. Enabling this can be a security risk."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The default workflow permissions granted to the GITHUB_TOKEN when running workflows.
     */
    public ?string $default_workflow_permissions;
    /**
     * Whether GitHub Actions can approve pull requests. Enabling this can be a security risk.
     */
    public ?bool $can_approve_pull_request_reviews;
    public function __construct(string $default_workflow_permissions, bool $can_approve_pull_request_reviews)
    {
        $this->default_workflow_permissions = $default_workflow_permissions;
        $this->can_approve_pull_request_reviews = $can_approve_pull_request_reviews;
    }
}
