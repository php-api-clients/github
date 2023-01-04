<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSponsorshipEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"privacy_level":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."}}}}}';
    public const SCHEMA_TITLE = 'WebhookSponsorshipEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\PrivacyLevel::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\PrivacyLevel $privacy_level;
    public function privacy_level() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\PrivacyLevel
    {
        return $this->privacy_level;
    }
}
