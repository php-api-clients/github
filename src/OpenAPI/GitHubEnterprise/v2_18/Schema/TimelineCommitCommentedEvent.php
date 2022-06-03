<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class TimelineCommitCommentedEvent
{
    public const SCHEMA_TITLE = 'Timeline Commit Commented Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Commit Commented Event';
    private string $event;
    private string $node_id;
    private string $commit_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\CommitComment>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\CommitComment::class)
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
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\CommitComment>
     */
    public function comments() : array
    {
        return $this->comments;
    }
}
