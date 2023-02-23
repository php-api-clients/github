<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class IssueEventDismissedReview
{
    public const SCHEMA_JSON = '{"title":"Issue Event Dismissed Review","required":["state","review_id","dismissal_message"],"type":"object","properties":{"state":{"type":"string"},"review_id":{"type":"integer"},"dismissal_message":{"type":["string","null"]},"dismissal_commit_id":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Issue Event Dismissed Review';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $state;
    public ?int $review_id;
    public ?string $dismissal_message;
    public ?string $dismissal_commit_id;
    public function __construct(string $state, int $review_id, string $dismissal_message, string $dismissal_commit_id)
    {
        $this->state = $state;
        $this->review_id = $review_id;
        $this->dismissal_message = $dismissal_message;
        $this->dismissal_commit_id = $dismissal_commit_id;
    }
}
