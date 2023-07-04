<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateEnvironment\Request;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"wait_timer":{"type":"integer","description":"The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).","examples":[30]},"reviewers":{"type":["array","null"],"items":{"type":"object","properties":{"type":{"enum":["User","Team"],"type":"string","description":"The type of reviewer.","examples":["User"]},"id":{"type":"integer","description":"The id of the user or team who can review the deployment","examples":[4532992]}}},"description":"The people or teams that may review jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed."},"deployment_branch_policy":{"required":["protected_branches","custom_branch_policies"],"type":["object","null"],"properties":{"protected_branches":{"type":"boolean","description":"Whether only branches with branch protection rules can deploy to this environment. If `protected_branches` is `true`, `custom_branch_policies` must be `false`; if `protected_branches` is `false`, `custom_branch_policies` must be `true`."},"custom_branch_policies":{"type":"boolean","description":"Whether only branches that match the specified name patterns can deploy to this environment.  If `custom_branch_policies` is `true`, `protected_branches` must be `false`; if `custom_branch_policies` is `false`, `protected_branches` must be `true`."}},"description":"The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`."}},"additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"wait_timer":30,"reviewers":null,"deployment_branch_policy":{"protected_branches":false,"custom_branch_policies":false}}';

    /**
     * waitTimer: The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).
     * reviewers: The people or teams that may review jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed.
     * deploymentBranchPolicy: The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`.
     */
    public function __construct(#[MapFrom('wait_timer')]
    public int|null $waitTimer, public array|null $reviewers, #[MapFrom('deployment_branch_policy')]
    public Schema\DeploymentBranchPolicySettings|null $deploymentBranchPolicy,)
    {
    }
}
