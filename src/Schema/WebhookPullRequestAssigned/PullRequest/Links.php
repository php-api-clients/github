<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestAssigned\PullRequest;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Links
{
    public const SCHEMA_JSON         = '{"required":["self","html","issue","comments","review_comments","review_comment","commits","statuses"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"href":"generated"},"commits":{"href":"generated"},"html":{"href":"generated"},"issue":{"href":"generated"},"review_comment":{"href":"generated"},"review_comments":{"href":"generated"},"self":{"href":"generated"},"statuses":{"href":"generated"}}';

    public function __construct(public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $comments, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $commits, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $html, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $issue, #[MapFrom('review_comment')] public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $reviewComment, #[MapFrom('review_comments')] public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $reviewComments, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $self, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $statuses)
    {
    }
}
