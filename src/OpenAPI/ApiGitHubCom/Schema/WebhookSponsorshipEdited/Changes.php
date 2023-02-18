<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSponsorshipEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"privacy_level":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSponsorshipEdited\Changes\PrivacyLevel $privacy_level;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSponsorshipEdited\Changes\PrivacyLevel $privacy_level)
    {
        $this->privacy_level = $privacy_level;
    }
}
