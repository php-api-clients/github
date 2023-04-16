<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"public":{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}},"short_description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"title":{"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":{"from":"generated_from_null","to":"generated_to_null"},"public":{"from":false,"to":false},"short_description":{"from":"generated_from_null","to":"generated_to_null"},"title":{"from":"generated_from_null","to":"generated_to_null"}}';
    public function __construct(public ?Schema\WebhookProjectsV2ProjectEdited\Changes\Description $description, public ?Schema\WebhookProjectsV2ProjectEdited\Changes\Public_ $public, #[\EventSauce\ObjectHydrator\MapFrom('short_description')] public ?Schema\WebhookProjectsV2ProjectEdited\Changes\ShortDescription $shortDescription, public ?Schema\WebhookProjectsV2ProjectEdited\Changes\Title $title)
    {
    }
}
