<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewCommentEdited\Comment;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href_uri-template"},"pull_request":{"href":"generated_href_uri-template"},"self":{"href":"generated_href_uri-template"}}';
    public function __construct(public Schema\WebhookPullRequestReviewCommentEdited\Comment\Links\Html $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public Schema\WebhookPullRequestReviewCommentEdited\Comment\Links\PullRequest $pullRequest, public Schema\WebhookPullRequestReviewCommentEdited\Comment\Links\Self_ $self)
    {
    }
}
