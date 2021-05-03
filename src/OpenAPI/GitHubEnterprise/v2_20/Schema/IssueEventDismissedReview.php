<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class IssueEventDismissedReview
{
    public const SCHEMA_TITLE = 'Issue Event Dismissed Review';
    public const SPL_HASH = '000000001c23f0c5000000003890ca58';
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
