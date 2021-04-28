<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class DeploymentBranchPolicy
{
    public const SCHEMA_TITLE = 'deployment_branch_policy';
    public const SCHEMA_DESCRIPTION = 'The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`.';
    /**Whether only branches with branch protection rules can deploy to this environment. If `protected_branches` is `true`, `custom_branch_policies` must be `false`; if `protected_branches` is `false`, `custom_branch_policies` must be `true`.**/
    private boolean $protected_branches;
    /**Whether only branches that match the specified name patterns can deploy to this environment.  If `custom_branch_policies` is `true`, `protected_branches` must be `false`; if `custom_branch_policies` is `false`, `protected_branches` must be `true`.**/
    private boolean $custom_branch_policies;
    public function protected_branches() : boolean
    {
        return $this->protected_branches;
    }
    public function custom_branch_policies() : boolean
    {
        return $this->custom_branch_policies;
    }
}
