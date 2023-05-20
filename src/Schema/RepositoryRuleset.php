<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleset
{
    public const SCHEMA_JSON         = '{"title":"Repository ruleset","required":["id","name","source","enforcement"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the ruleset"},"name":{"type":"string","description":"The name of the ruleset"},"target":{"enum":["branch","tag"],"type":"string","description":"The target of the ruleset"},"source_type":{"enum":["Repository","Organization"],"type":"string","description":"The type of the source of the ruleset"},"source":{"type":"string","description":"The name of the source"},"enforcement":{"enum":["disabled","active","evaluate"],"type":"string","description":"The enforcement level of the ruleset. `evaluate` allows admins to test rules before enforcing them. Admins can view insights on the Rule Insights page (`evaluate` is only available with GitHub Enterprise)."},"bypass_mode":{"enum":["none","repository","organization"],"type":"string","description":"The permission level required to bypass this ruleset. \\"repository\\" allows those with bypass permission at the repository level to bypass. \\"organization\\" allows those with bypass permission at the organization level to bypass. \\"none\\" prevents anyone from bypassing."},"bypass_actors":{"type":"array","items":{"title":"Repository Ruleset Bypass Actor","type":"object","properties":{"actor_id":{"type":"integer","description":"The ID of the actor that can bypass a ruleset"},"actor_type":{"enum":["Team","Integration"],"type":"string","description":"The type of actor that can bypass a ruleset"}},"description":"An actor that can bypass rules in a ruleset"},"description":"The actors that can bypass the rules in this ruleset"},"node_id":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"object","properties":{"href":{"type":"string","description":"The URL of the ruleset"}}}}},"conditions":{"anyOf":[{"title":"Repository ruleset conditions for ref names","type":"object","properties":{"ref_name":{"type":"object","properties":{"include":{"type":"array","items":{"type":"string"},"description":"Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."},"exclude":{"type":"array","items":{"type":"string"},"description":"Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."}}}},"description":"Parameters for a repository ruleset ref name condition"},{"title":"Organization ruleset conditions","type":"object","allOf":[{"title":"Repository ruleset conditions for ref names","type":"object","properties":{"ref_name":{"type":"object","properties":{"include":{"type":"array","items":{"type":"string"},"description":"Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."},"exclude":{"type":"array","items":{"type":"string"},"description":"Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."}}}},"description":"Parameters for a repository ruleset ref name condition"},{"title":"Repository ruleset conditions for repository names","type":"object","properties":{"repository_name":{"type":"object","properties":{"include":{"type":"array","items":{"type":"string"},"description":"Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."},"exclude":{"type":"array","items":{"type":"string"},"description":"Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."},"protected":{"type":"boolean","description":"Whether renaming of target repositories is prevented."}}}},"description":"Parameters for a repository name condition"}],"description":"Conditions for a organization ruleset"}]},"rules":{"type":"array","items":{"title":"Repository Rule","type":"object","oneOf":[{"title":"creation","required":["type"],"type":"object","properties":{"type":{"enum":["creation"],"type":"string"}},"description":"Parameters to be used for the creation rule"},{"title":"update","required":["type"],"type":"object","properties":{"type":{"enum":["update"],"type":"string"},"parameters":{"required":["update_allows_fetch_and_merge"],"type":"object","properties":{"update_allows_fetch_and_merge":{"type":"boolean","description":"Branch can pull changes from its upstream repository"}}}},"description":"Parameters to be used for the update rule"},{"title":"deletion","required":["type"],"type":"object","properties":{"type":{"enum":["deletion"],"type":"string"}},"description":"Parameters to be used for the deletion rule"},{"title":"required_linear_history","required":["type"],"type":"object","properties":{"type":{"enum":["required_linear_history"],"type":"string"}},"description":"Parameters to be used for the required_linear_history rule"},{"title":"required_deployments","required":["type"],"type":"object","properties":{"type":{"enum":["required_deployments"],"type":"string"},"parameters":{"required":["required_deployment_environments"],"type":"object","properties":{"required_deployment_environments":{"type":"array","items":{"type":"string"},"description":"The environments that must be successfully deployed to before branches can be merged."}}}},"description":"Parameters to be used for the required_deployments rule"},{"title":"required_signatures","required":["type"],"type":"object","properties":{"type":{"enum":["required_signatures"],"type":"string"}},"description":"Parameters to be used for the required_signatures rule"},{"title":"pull_request","required":["type"],"type":"object","properties":{"type":{"enum":["pull_request"],"type":"string"},"parameters":{"required":["dismiss_stale_reviews_on_push","require_code_owner_review","require_last_push_approval","required_approving_review_count","required_review_thread_resolution"],"type":"object","properties":{"dismiss_stale_reviews_on_push":{"type":"boolean","description":"New, reviewable commits pushed will dismiss previous pull request review approvals."},"require_code_owner_review":{"type":"boolean","description":"Require an approving review in pull requests that modify files that have a designated code owner."},"require_last_push_approval":{"type":"boolean","description":"Whether the most recent reviewable push must be approved by someone other than the person who pushed it."},"required_approving_review_count":{"maximum":10,"minimum":0,"type":"integer","description":"The number of approving reviews that are required before a pull request can be merged."},"required_review_thread_resolution":{"type":"boolean","description":"All conversations on code must be resolved before a pull request can be merged."}}}},"description":"Parameters to be used for the pull_request rule"},{"title":"required_status_checks","required":["type"],"type":"object","properties":{"type":{"enum":["required_status_checks"],"type":"string"},"parameters":{"required":["required_status_checks","strict_required_status_checks_policy"],"type":"object","properties":{"required_status_checks":{"type":"array","items":{"title":"StatusCheckConfiguration","required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The status check context name that must be present on the commit."},"integration_id":{"type":"integer","description":"The optional integration ID that this status check must originate from."}},"description":"Required status check"},"description":"Status checks that are required."},"strict_required_status_checks_policy":{"type":"boolean","description":"Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."}}}},"description":"Parameters to be used for the required_status_checks rule"},{"title":"non_fast_forward","required":["type"],"type":"object","properties":{"type":{"enum":["non_fast_forward"],"type":"string"}},"description":"Parameters to be used for the non_fast_forward rule"},{"title":"commit_message_pattern","required":["type"],"type":"object","properties":{"type":{"enum":["commit_message_pattern"],"type":"string"},"parameters":{"required":["operator","pattern"],"type":"object","properties":{"name":{"type":"string","description":"How this rule will appear to users."},"negate":{"type":"boolean","description":"If true, the rule will fail if the pattern matches."},"operator":{"enum":["starts_with","ends_with","contains","regex"],"type":"string","description":"The operator to use for matching."},"pattern":{"type":"string","description":"The pattern to match with."}}}},"description":"Parameters to be used for the commit_message_pattern rule"},{"title":"commit_author_email_pattern","required":["type"],"type":"object","properties":{"type":{"enum":["commit_author_email_pattern"],"type":"string"},"parameters":{"required":["operator","pattern"],"type":"object","properties":{"name":{"type":"string","description":"How this rule will appear to users."},"negate":{"type":"boolean","description":"If true, the rule will fail if the pattern matches."},"operator":{"enum":["starts_with","ends_with","contains","regex"],"type":"string","description":"The operator to use for matching."},"pattern":{"type":"string","description":"The pattern to match with."}}}},"description":"Parameters to be used for the commit_author_email_pattern rule"},{"title":"committer_email_pattern","required":["type"],"type":"object","properties":{"type":{"enum":["committer_email_pattern"],"type":"string"},"parameters":{"required":["operator","pattern"],"type":"object","properties":{"name":{"type":"string","description":"How this rule will appear to users."},"negate":{"type":"boolean","description":"If true, the rule will fail if the pattern matches."},"operator":{"enum":["starts_with","ends_with","contains","regex"],"type":"string","description":"The operator to use for matching."},"pattern":{"type":"string","description":"The pattern to match with."}}}},"description":"Parameters to be used for the committer_email_pattern rule"},{"title":"branch_name_pattern","required":["type"],"type":"object","properties":{"type":{"enum":["branch_name_pattern"],"type":"string"},"parameters":{"required":["operator","pattern"],"type":"object","properties":{"name":{"type":"string","description":"How this rule will appear to users."},"negate":{"type":"boolean","description":"If true, the rule will fail if the pattern matches."},"operator":{"enum":["starts_with","ends_with","contains","regex"],"type":"string","description":"The operator to use for matching."},"pattern":{"type":"string","description":"The pattern to match with."}}}},"description":"Parameters to be used for the branch_name_pattern rule"},{"title":"tag_name_pattern","required":["type"],"type":"object","properties":{"type":{"enum":["tag_name_pattern"],"type":"string"},"parameters":{"required":["operator","pattern"],"type":"object","properties":{"name":{"type":"string","description":"How this rule will appear to users."},"negate":{"type":"boolean","description":"If true, the rule will fail if the pattern matches."},"operator":{"enum":["starts_with","ends_with","contains","regex"],"type":"string","description":"The operator to use for matching."},"pattern":{"type":"string","description":"The pattern to match with."}}}},"description":"Parameters to be used for the tag_name_pattern rule"}],"description":"A repository rule."}}},"description":"A set of rules to apply when specified conditions are met."}';
    public const SCHEMA_TITLE        = 'Repository ruleset';
    public const SCHEMA_DESCRIPTION  = 'A set of rules to apply when specified conditions are met.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"name":"generated","target":"tag","source_type":"Repository","source":"generated","enforcement":"disabled","bypass_mode":"none","bypass_actors":[{"actor_id":8,"actor_type":"Integration"},{"actor_id":8,"actor_type":"Integration"}],"node_id":"generated","_links":{"self":{"href":"generated"}},"conditions":null,"rules":[null,null]}';

    /**
     * id: The ID of the ruleset
     * name: The name of the ruleset
     * target: The target of the ruleset
     * sourceType: The type of the source of the ruleset
     * source: The name of the source
     * enforcement: The enforcement level of the ruleset. `evaluate` allows admins to test rules before enforcing them. Admins can view insights on the Rule Insights page (`evaluate` is only available with GitHub Enterprise).
     * bypassMode: The permission level required to bypass this ruleset. "repository" allows those with bypass permission at the repository level to bypass. "organization" allows those with bypass permission at the organization level to bypass. "none" prevents anyone from bypassing.
     * bypassActors: The actors that can bypass the rules in this ruleset
     */
    public function __construct(public int $id, public string $name, public ?string $target, #[MapFrom('source_type')] public ?string $sourceType, public string $source, public string $enforcement, #[MapFrom('bypass_mode')] public ?string $bypassMode, #[MapFrom('bypass_actors')] public ?array $bypassActors, #[MapFrom('node_id')] public ?string $nodeId, #[MapFrom('_links')] public ?Schema\RepositoryRuleset\Links $links, public ?Schema\RepositoryRulesetConditions $conditions, public ?array $rules)
    {
    }
}
