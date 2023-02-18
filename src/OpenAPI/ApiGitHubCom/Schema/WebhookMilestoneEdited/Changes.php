<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMilestoneEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookLabelEdited\Changes\Description;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMilestoneEdited\Changes\DueOn;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMilestoneEdited\Changes\Title;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"due_on":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the due date if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the milestone if the action was `edited`."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the milestone if the action was `edited`.';
    public ?Description $description;
    public ?DueOn $due_on;
    public ?Title $title;

    public function __construct(Description $description, DueOn $due_on, Title $title)
    {
        $this->description = $description;
        $this->due_on      = $due_on;
        $this->title       = $title;
    }
}
