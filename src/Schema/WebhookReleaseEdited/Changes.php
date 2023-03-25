<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookReleaseEdited;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}},"make_latest":{"required":["to"],"type":"object","properties":{"to":{"type":"boolean","description":"Whether this release was explicitly `edited` to be the latest."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from_null"},"name":{"from":"generated_from_null"},"makeLatest":{"to":false}}';
    public function __construct(public ?Schema\WebhookProjectEdited\Changes\Body $body, public ?Schema\WebhookLabelEdited\Changes\Name $name, #[\EventSauce\ObjectHydrator\MapFrom('make_latest')] public ?Schema\WebhookReleaseEdited\Changes\MakeLatest $makeLatest)
    {
    }
}
