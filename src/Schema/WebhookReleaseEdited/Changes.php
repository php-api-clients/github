<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookReleaseEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}},"make_latest":{"required":["to"],"type":"object","properties":{"to":{"type":"boolean","description":"Whether this release was explicitly `edited` to be the latest."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from_null"},"name":{"from":"generated_from_null"},"make_latest":{"to":false}}';
    public function __construct(public ?Schema\WebhookReleaseEdited\Changes\Body $body, public ?Schema\WebhookReleaseEdited\Changes\Name $name, #[\EventSauce\ObjectHydrator\MapFrom('make_latest')] public ?Schema\WebhookReleaseEdited\Changes\MakeLatest $makeLatest)
    {
    }
}