<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookMilestoneEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"due_on":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the due date if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the milestone if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the milestone if the action was `edited`.';
    public ?\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Description $description;
    public ?\ApiClients\Client\Github\Schema\WebhookMilestoneEdited\Changes\DueOn $due_on;
    public ?\ApiClients\Client\Github\Schema\WebhookMilestoneEdited\Changes\Title $title;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Description $description, \ApiClients\Client\Github\Schema\WebhookMilestoneEdited\Changes\DueOn $due_on, \ApiClients\Client\Github\Schema\WebhookMilestoneEdited\Changes\Title $title)
    {
        $this->description = $description;
        $this->due_on = $due_on;
        $this->title = $title;
    }
}
