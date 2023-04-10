<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract63554b179fc888d00d411437ba9bb280
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href_uri-template"},"pull_request":{"href":"generated_href_uri-template"},"self":{"href":"generated_href_uri-template"}}';
    public function __construct(public Schema\WebhookPullRequestReviewCommentCreated\Comment\Links\Html $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public Schema\WebhookPullRequestReviewCommentCreated\Comment\Links\PullRequest $pullRequest, public Schema\WebhookPullRequestReviewCommentCreated\Comment\Links\Self_ $self)
    {
    }
}