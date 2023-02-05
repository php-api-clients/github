<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMilestoneEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"due_on":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the due date if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the milestone if the action was `edited`."}';
    public const SCHEMA_TITLE = 'WebhookMilestoneEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the milestone if the action was `edited`.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description $description;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\DueOn $due_on;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Title $title;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description $description, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\DueOn $due_on, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Title $title)
    {
        $this->description = $description;
        $this->due_on = $due_on;
        $this->title = $title;
    }
}
