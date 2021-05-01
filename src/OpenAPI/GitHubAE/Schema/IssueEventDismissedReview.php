<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class IssueEventDismissedReview
{
    public const SCHEMA_TITLE = 'Issue Event Dismissed Review';
    public const SCHEMA_DESCRIPTION = '';
    private string $state;
    private int $review_id;
    private string $dismissal_message;
    private string $dismissal_commit_id;
    public function state() : string
    {
        return $this->state;
    }
    public function review_id() : int
    {
        return $this->review_id;
    }
    public function dismissal_message() : string
    {
        return $this->dismissal_message;
    }
    public function dismissal_commit_id() : string
    {
        return $this->dismissal_commit_id;
    }
}
