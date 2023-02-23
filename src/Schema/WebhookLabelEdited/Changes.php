<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookLabelEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"color":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the color if the action was `edited`."}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}},"description":"The changes to the label if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the label if the action was `edited`.';
    public ?\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Color $color;
    public ?\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Description $description;
    public ?\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Name $name;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Color $color, \ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Description $description, \ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Name $name)
    {
        $this->color = $color;
        $this->description = $description;
        $this->name = $name;
    }
}
