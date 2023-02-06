<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class PrivacyLevel
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\PrivacyLevel';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy.
     */
    public readonly string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
