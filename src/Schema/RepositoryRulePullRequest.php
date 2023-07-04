<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRulePullRequest
{
    public const SCHEMA_JSON         = '{"title":"pull_request","required":["type"],"type":"object","properties":{"type":{"enum":["pull_request"],"type":"string"},"ruleset_source_type":{"enum":["Repository","Organization"],"type":"string","description":"The type of source of the ruleset that this rule is configured in"},"ruleset_source":{"type":"string","description":"The name of the source of the ruleset that this rule is configured in"},"ruleset_id":{"type":"integer","description":"The ID of the ruleset that this rule is configured in"},"parameters":{"required":["dismiss_stale_reviews_on_push","require_code_owner_review","require_last_push_approval","required_approving_review_count","required_review_thread_resolution"],"type":"object","properties":{"dismiss_stale_reviews_on_push":{"type":"boolean","description":"New, reviewable commits pushed will dismiss previous pull request review approvals."},"require_code_owner_review":{"type":"boolean","description":"Require an approving review in pull requests that modify files that have a designated code owner."},"require_last_push_approval":{"type":"boolean","description":"Whether the most recent reviewable push must be approved by someone other than the person who pushed it."},"required_approving_review_count":{"maximum":10,"minimum":0,"type":"integer","description":"The number of approving reviews that are required before a pull request can be merged."},"required_review_thread_resolution":{"type":"boolean","description":"All conversations on code must be resolved before a pull request can be merged."}}}},"description":"Require all commits be made to a non-target branch and submitted via a pull request before they can be merged."}';
    public const SCHEMA_TITLE        = 'pull_request';
    public const SCHEMA_DESCRIPTION  = 'Require all commits be made to a non-target branch and submitted via a pull request before they can be merged.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"pull_request","ruleset_source_type":"Repository","ruleset_source":"generated","ruleset_id":10,"parameters":{"dismiss_stale_reviews_on_push":false,"require_code_owner_review":false,"require_last_push_approval":false,"required_approving_review_count":31,"required_review_thread_resolution":false}}';

    /**
     * rulesetSourceType: The type of source of the ruleset that this rule is configured in
     * rulesetSource: The name of the source of the ruleset that this rule is configured in
     * rulesetId: The ID of the ruleset that this rule is configured in
     */
    public function __construct(public string $type, #[MapFrom('ruleset_source_type')]
    public string|null $rulesetSourceType, #[MapFrom('ruleset_source')]
    public string|null $rulesetSource, #[MapFrom('ruleset_id')]
    public int|null $rulesetId, public Schema\RepositoryRulePullRequest\Parameters|null $parameters,)
    {
    }
}
