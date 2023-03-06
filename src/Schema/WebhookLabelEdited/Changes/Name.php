<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Name
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from"}';
    /**
     * from: The previous version of the name if the action was `edited`.
     */
    public function __construct(public ?string $from)
    {
    }
}
