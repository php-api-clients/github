<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewEdited\PullRequest\Links;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Commits
{
    public const SCHEMA_JSON = '{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}';
    public const SCHEMA_TITLE = 'Link';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated_href_uri-template"}';
    public function __construct(public string $href)
    {
    }
}
