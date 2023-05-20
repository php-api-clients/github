<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"public":{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}},"short_description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"title":{"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":{"from":"generated","to":"generated"},"public":{"from":false,"to":false},"short_description":{"from":"generated","to":"generated"},"title":{"from":"generated","to":"generated"}}';

    public function __construct(public ?Schema\WebhookMemberEdited\Changes\Permission $description, public ?Schema\WebhookProjectsV2ProjectEdited\Changes\Public_ $public, #[MapFrom('short_description')] public ?Schema\WebhookMemberEdited\Changes\Permission $shortDescription, public ?Schema\WebhookProjectsV2ProjectEdited\Changes\Title $title)
    {
    }
}
