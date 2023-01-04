<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMilestoneEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"due_on":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the due date if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the milestone if the action was `edited`."}';
    public const SCHEMA_TITLE = 'WebhookMilestoneEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the milestone if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description $description;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\DueOn::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\DueOn $due_on;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Title::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Title $title;
    public function description() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description
    {
        return $this->description;
    }
    public function due_on() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\DueOn
    {
        return $this->due_on;
    }
    public function title() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Title
    {
        return $this->title;
    }
}
