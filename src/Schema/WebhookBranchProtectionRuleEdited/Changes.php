<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"admin_enforced":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_actor_names":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"authorized_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_dismissal_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"linear_history_requirement_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}},"required_status_checks":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"required_status_checks_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}},"description":"If the action was `edited`, the changes to the rule."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'If the action was `edited`, the changes to the rule.';
    public const SCHEMA_EXAMPLE_DATA = '{"admin_enforced":{"from":false},"authorized_actor_names":{"from":["generated","generated"]},"authorized_actors_only":{"from":false},"authorized_dismissal_actors_only":{"from":false},"linear_history_requirement_enforcement_level":{"from":"everyone"},"required_status_checks":{"from":["generated","generated"]},"required_status_checks_enforcement_level":{"from":"everyone"}}';

    public function __construct(#[MapFrom('admin_enforced')]
    public Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced|null $adminEnforced, #[MapFrom('authorized_actor_names')]
    public Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames|null $authorizedActorNames, #[MapFrom('authorized_actors_only')]
    public Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorsOnly|null $authorizedActorsOnly, #[MapFrom('authorized_dismissal_actors_only')]
    public Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedDismissalActorsOnly|null $authorizedDismissalActorsOnly, #[MapFrom('linear_history_requirement_enforcement_level')]
    public Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel|null $linearHistoryRequirementEnforcementLevel, #[MapFrom('required_status_checks')]
    public Schema\WebhookBranchProtectionRuleEdited\Changes\RequiredStatusChecks|null $requiredStatusChecks, #[MapFrom('required_status_checks_enforcement_level')]
    public Schema\WebhookBranchProtectionRuleEdited\Changes\RequiredStatusChecksEnforcementLevel|null $requiredStatusChecksEnforcementLevel,)
    {
    }
}
