<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissReview\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"enum":["DISMISS"],"type":"string","examples":["\\"DISMISS\\""]}}}';
    public const SCHEMA_EXAMPLE = '{"event":"\\"DISMISS\\""}';
    public const SCHEMA_TITLE = 'DismissReview\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The message for the pull request review dismissal
     */
    public readonly string $message;
    public readonly ?string $event;
    public function __construct(string $message, string $event)
    {
        $this->message = $message;
        $this->event = $event;
    }
}
