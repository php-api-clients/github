<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ActionsSetDefaultWorkflowPermissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_workflow_permissions":{"enum":["read","write"],"type":"string","description":"The default workflow permissions granted to the GITHUB_TOKEN when running workflows."},"can_approve_pull_request_reviews":{"type":"boolean","description":"Whether GitHub Actions can approve pull requests. Enabling this can be a security risk."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"default_workflow_permissions":"read","can_approve_pull_request_reviews":false}';
    /**
     * defaultWorkflowPermissions: The default workflow permissions granted to the GITHUB_TOKEN when running workflows.
     * canApprovePullRequestReviews: Whether GitHub Actions can approve pull requests. Enabling this can be a security risk.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('default_workflow_permissions')] public ?string $defaultWorkflowPermissions, #[\EventSauce\ObjectHydrator\MapFrom('can_approve_pull_request_reviews')] public ?bool $canApprovePullRequestReviews)
    {
    }
}
