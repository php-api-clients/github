<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookRepositoryRenamed;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["repository"],"type":"object","properties":{"repository":{"required":["name"],"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"repository":{"name":{"from":"generated_from_null"}}}';
    public function __construct(public Schema\WebhookRepositoryRenamed\Changes\Repository $repository)
    {
    }
}
