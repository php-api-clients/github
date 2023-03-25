<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin_enforced":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_actor_names":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"authorized_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_dismissal_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"linear_history_requirement_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}},"required_status_checks":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"required_status_checks_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}},"description":"If the action was `edited`, the changes to the rule."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'If the action was `edited`, the changes to the rule.';
    public const SCHEMA_EXAMPLE_DATA = '{"adminEnforced":{"from":false},"authorizedActorNames":{"from":["generated_from_null"]},"authorizedActorsOnly":{"from":false},"authorizedDismissalActorsOnly":{"from":false},"linearHistoryRequirementEnforcementLevel":{"from":"off"},"requiredStatusChecks":{"from":["generated_from_null"]},"requiredStatusChecksEnforcementLevel":{"from":"off"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('admin_enforced')] public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $adminEnforced, #[\EventSauce\ObjectHydrator\MapFrom('authorized_actor_names')] public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $authorizedActorNames, #[\EventSauce\ObjectHydrator\MapFrom('authorized_actors_only')] public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorizedActorsOnly, #[\EventSauce\ObjectHydrator\MapFrom('authorized_dismissal_actors_only')] public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorizedDismissalActorsOnly, #[\EventSauce\ObjectHydrator\MapFrom('linear_history_requirement_enforcement_level')] public ?Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $linearHistoryRequirementEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('required_status_checks')] public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $requiredStatusChecks, #[\EventSauce\ObjectHydrator\MapFrom('required_status_checks_enforcement_level')] public ?Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $requiredStatusChecksEnforcementLevel)
    {
    }
}
