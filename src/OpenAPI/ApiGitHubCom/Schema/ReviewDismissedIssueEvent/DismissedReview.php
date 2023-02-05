<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewDismissedIssueEvent;

final class DismissedReview
{
    public const SCHEMA_JSON = '{"required":["state","review_id","dismissal_message"],"type":"object","properties":{"state":{"type":"string"},"review_id":{"type":"integer"},"dismissal_message":{"type":["string","null"]},"dismissal_commit_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'ReviewDismissedIssueEvent\\DismissedReview';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $state;
    public readonly int $review_id;
    public readonly ?string $dismissal_message;
    public readonly ?string $dismissal_commit_id;
    public function __construct(string $state, int $review_id, string $dismissal_message, string $dismissal_commit_id)
    {
        $this->state = $state;
        $this->review_id = $review_id;
        $this->dismissal_message = $dismissal_message;
        $this->dismissal_commit_id = $dismissal_commit_id;
    }
}
