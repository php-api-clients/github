<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CE4Cc0Dccb54C42A464Fcac9075B1C1F6
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"enum":["DISMISS"],"type":"string","examples":["\\"DISMISS\\""]}}}';
    public const SCHEMA_TITLE = 'c_e4cc0dccb54c42a464fcac9075b1c1f6';
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
