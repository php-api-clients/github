<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class IssueEventDismissedReview
{
    public const SCHEMA_JSON         = '{"title":"Issue Event Dismissed Review","required":["state","review_id","dismissal_message"],"type":"object","properties":{"state":{"type":"string"},"review_id":{"type":"integer"},"dismissal_message":{"type":["string","null"]},"dismissal_commit_id":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = 'Issue Event Dismissed Review';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated","review_id":9,"dismissal_message":"generated","dismissal_commit_id":"generated"}';

    public function __construct(public string $state, #[MapFrom('review_id')] public int $reviewId, #[MapFrom('dismissal_message')] public ?string $dismissalMessage, #[MapFrom('dismissal_commit_id')] public ?string $dismissalCommitId)
    {
    }
}
