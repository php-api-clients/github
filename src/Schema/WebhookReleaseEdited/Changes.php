<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookReleaseEdited;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from"},"name":{"from":"generated_from"}}';
    public function __construct(public ?Schema\WebhookProjectEdited\Changes\Body $body, public ?Schema\WebhookLabelEdited\Changes\Name $name)
    {
    }
}
