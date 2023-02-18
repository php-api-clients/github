<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Pulls\DismissReview\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"enum":["DISMISS"],"type":"string","examples":["\\"DISMISS\\""]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The message for the pull request review dismissal
     */
    public ?string $message;
    public string $event;

    public function __construct(string $message, string $event)
    {
        $this->message = $message;
        $this->event   = $event;
    }
}
