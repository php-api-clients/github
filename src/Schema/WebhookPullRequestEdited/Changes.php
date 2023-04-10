<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPullRequestEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"base":{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}},"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the comment if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"base":{"ref":{"from":"generated_from_null"},"sha":{"from":"generated_from_null"}},"body":{"from":"generated_from_null"},"title":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookPullRequestEdited\Changes\Base $base, public ?Schema\WebhookPullRequestEdited\Changes\Body $body, public ?Schema\WebhookPullRequestEdited\Changes\Title $title)
    {
    }
}
