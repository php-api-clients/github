<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin_enforced":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_actor_names":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"authorized_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_dismissal_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"linear_history_requirement_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}},"required_status_checks":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"required_status_checks_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}},"description":"If the action was `edited`, the changes to the rule."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'If the action was `edited`, the changes to the rule.';
    public ?\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $admin_enforced;
    public ?\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $authorized_actor_names;
    public ?\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorized_actors_only;
    public ?\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorized_dismissal_actors_only;
    public ?\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $linear_history_requirement_enforcement_level;
    public ?\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $required_status_checks;
    public ?\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $required_status_checks_enforcement_level;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $admin_enforced, \ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $authorized_actor_names, \ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorized_actors_only, \ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorized_dismissal_actors_only, \ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $linear_history_requirement_enforcement_level, \ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $required_status_checks, \ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $required_status_checks_enforcement_level)
    {
        $this->admin_enforced = $admin_enforced;
        $this->authorized_actor_names = $authorized_actor_names;
        $this->authorized_actors_only = $authorized_actors_only;
        $this->authorized_dismissal_actors_only = $authorized_dismissal_actors_only;
        $this->linear_history_requirement_enforcement_level = $linear_history_requirement_enforcement_level;
        $this->required_status_checks = $required_status_checks;
        $this->required_status_checks_enforcement_level = $required_status_checks_enforcement_level;
    }
}
