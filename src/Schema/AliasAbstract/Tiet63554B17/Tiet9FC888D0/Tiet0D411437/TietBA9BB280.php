<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet63554B17\Tiet9FC888D0\Tiet0D411437;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietBA9BB280
{
    public const SCHEMA_JSON         = '{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated"},"pull_request":{"href":"generated"},"self":{"href":"generated"}}';

    public function __construct(public Schema\WebhookPullRequestReviewCommentCreated\Comment\Links\Html $html, #[MapFrom('pull_request')]
    public Schema\WebhookPullRequestReviewCommentCreated\Comment\Links\PullRequest $pullRequest, public Schema\WebhookPullRequestReviewCommentCreated\Comment\Links\Self_ $self,)
    {
    }
}
