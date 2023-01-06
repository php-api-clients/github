<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissReview;

final class Request
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"enum":["DISMISS"],"type":"string","examples":["\\"DISMISS\\""]}}}';
    public const SCHEMA_TITLE = 'DismissReview\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The message for the pull request review dismissal
     */
    private string $message;
    private ?string $event = null;
    /**
     * The message for the pull request review dismissal
     */
    public function message() : string
    {
        return $this->message;
    }
    public function event() : ?string
    {
        return $this->event;
    }
}
