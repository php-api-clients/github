<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookIssuesEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title."}}}},"description":"The changes to the issue."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the issue.';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from_null"},"title":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookIssuesEdited\Changes\Body $body, public ?Schema\WebhookIssuesEdited\Changes\Title $title)
    {
    }
}
