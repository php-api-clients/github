<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class TimelineLineCommentedEvent
{
    public const SCHEMA_TITLE = 'Timeline Line Commented Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Line Commented Event';
    private string $event;
    private string $node_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewComment>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewComment::class)
     */
    private array $comments = array();
    public function event() : string
    {
        return $this->event;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewComment>
     */
    public function comments() : array
    {
        return $this->comments;
    }
}
