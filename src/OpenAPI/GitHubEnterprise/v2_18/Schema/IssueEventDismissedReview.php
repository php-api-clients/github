<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class IssueEventDismissedReview
{
    public const SCHEMA_TITLE = 'Issue Event Dismissed Review';
    public const SPL_HASH = '000000000c92e149000000006ad867a6';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $state = null;
    private ?int $review_id = null;
    private ?string $dismissal_message = null;
    private ?string $dismissal_commit_id = null;
    public function state() : ?string
    {
        return $this->state;
    }
    public function review_id() : ?int
    {
        return $this->review_id;
    }
    public function dismissal_message() : ?string
    {
        return $this->dismissal_message;
    }
    public function dismissal_commit_id() : ?string
    {
        return $this->dismissal_commit_id;
    }
}
