<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract3725e2559d7806782692985ee129b0e5
{
    public const SCHEMA_JSON         = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href_uri-template"},"pull_request":{"href":"generated_href_uri-template"}}';

    public function __construct(public Schema\WebhookPullRequestReviewDismissed\Review\Links\Html $html, #[MapFrom('pull_request')] public Schema\WebhookPullRequestReviewDismissed\Review\Links\PullRequest $pullRequest)
    {
    }
}
