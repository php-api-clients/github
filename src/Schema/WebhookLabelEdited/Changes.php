<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookLabelEdited;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"color":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the color if the action was `edited`."}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}},"description":"The changes to the label if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the label if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"color":{"from":"generated_from"},"description":{"from":"generated_from"},"name":{"from":"generated_from"}}';
    public function __construct(public ?Schema\WebhookLabelEdited\Changes\Color $color, public ?Schema\WebhookLabelEdited\Changes\Description $description, public ?Schema\WebhookLabelEdited\Changes\Name $name)
    {
    }
}
