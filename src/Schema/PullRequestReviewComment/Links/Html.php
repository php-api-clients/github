<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PullRequestReviewComment\Links;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Html
{
    public const SCHEMA_JSON = '{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"}';
    public function __construct(public string $href)
    {
    }
}
