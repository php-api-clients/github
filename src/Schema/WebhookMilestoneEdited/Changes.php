<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookMilestoneEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"due_on":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the due date if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the milestone if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the milestone if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"description":{"from":"generated_from_null"},"due_on":{"from":"generated_from_null"},"title":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookMilestoneEdited\Changes\Description $description, #[\EventSauce\ObjectHydrator\MapFrom('due_on')] public ?Schema\WebhookMilestoneEdited\Changes\DueOn $dueOn, public ?Schema\WebhookMilestoneEdited\Changes\Title $title)
    {
    }
}