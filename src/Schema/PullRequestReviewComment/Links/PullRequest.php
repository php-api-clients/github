<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links;

final readonly class PullRequest
{
    public const SCHEMA_JSON         = '{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"}';

    public function __construct(public string $href)
    {
    }
}
