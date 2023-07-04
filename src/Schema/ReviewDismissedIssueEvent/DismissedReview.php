<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ReviewDismissedIssueEvent;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class DismissedReview
{
    public const SCHEMA_JSON         = '{"required":["state","review_id","dismissal_message"],"type":"object","properties":{"state":{"type":"string"},"review_id":{"type":"integer"},"dismissal_message":{"type":["string","null"]},"dismissal_commit_id":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated","review_id":9,"dismissal_message":"generated","dismissal_commit_id":"generated"}';

    public function __construct(public string $state, #[MapFrom('review_id')]
    public int $reviewId, #[MapFrom('dismissal_message')]
    public string|null $dismissalMessage, #[MapFrom('dismissal_commit_id')]
    public string|null $dismissalCommitId,)
    {
    }
}
