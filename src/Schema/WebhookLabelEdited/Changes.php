<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookLabelEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"color":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the color if the action was `edited`."}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}},"description":"The changes to the label if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the label if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"color":{"from":"generated_from_null"},"description":{"from":"generated_from_null"},"name":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookLabelEdited\Changes\Color $color, public ?Schema\WebhookLabelEdited\Changes\Description $description, public ?Schema\WebhookLabelEdited\Changes\Name $name)
    {
    }
}
