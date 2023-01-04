<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewDismissedIssueEvent;

final class DismissedReview
{
    public const SCHEMA_JSON = '{"required":["state","review_id","dismissal_message"],"type":"object","properties":{"state":{"type":"string"},"review_id":{"type":"integer"},"dismissal_message":{"type":["string","null"]},"dismissal_commit_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'ReviewDismissedIssueEvent\\DismissedReview';
    public const SCHEMA_DESCRIPTION = '';
    private string $state;
    private int $review_id;
    private ?string $dismissal_message;
    private ?string $dismissal_commit_id = null;
    public function state() : string
    {
        return $this->state;
    }
    public function review_id() : int
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
