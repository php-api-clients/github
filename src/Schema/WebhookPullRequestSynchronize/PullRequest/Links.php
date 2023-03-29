<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestSynchronize\PullRequest;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","issue","comments","review_comments","review_comment","commits","statuses"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"href":"generated_href_uri-template"},"commits":{"href":"generated_href_uri-template"},"html":{"href":"generated_href_uri-template"},"issue":{"href":"generated_href_uri-template"},"review_comment":{"href":"generated_href_uri-template"},"review_comments":{"href":"generated_href_uri-template"},"self":{"href":"generated_href_uri-template"},"statuses":{"href":"generated_href_uri-template"}}';
    public function __construct(public Schema\WebhookPullRequestSynchronize\PullRequest\Links\Comments $comments, public Schema\WebhookPullRequestSynchronize\PullRequest\Links\Commits $commits, public Schema\WebhookPullRequestSynchronize\PullRequest\Links\Html $html, public Schema\WebhookPullRequestSynchronize\PullRequest\Links\Issue $issue, #[\EventSauce\ObjectHydrator\MapFrom('review_comment')] public Schema\WebhookPullRequestSynchronize\PullRequest\Links\ReviewComment $reviewComment, #[\EventSauce\ObjectHydrator\MapFrom('review_comments')] public Schema\WebhookPullRequestSynchronize\PullRequest\Links\ReviewComments $reviewComments, public Schema\WebhookPullRequestSynchronize\PullRequest\Links\Self_ $self, public Schema\WebhookPullRequestSynchronize\PullRequest\Links\Statuses $statuses)
    {
    }
}
