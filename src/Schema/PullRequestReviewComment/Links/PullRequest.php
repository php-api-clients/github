<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PullRequestReviewComment\Links;

final readonly class PullRequest
{
    public const SCHEMA_JSON = '{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $href;
    public function __construct(string $href)
    {
        $this->href = $href;
    }
}
