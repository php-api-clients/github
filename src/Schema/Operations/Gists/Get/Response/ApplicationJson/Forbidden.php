<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Gists\Get\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Forbidden
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"block":{"reason":"generated","created_at":"generated","html_url":"generated"},"message":"generated","documentation_url":"generated"}';

    public function __construct(public Schema\Operations\Gists\Get\Response\ApplicationJson\Forbidden\Block|null $block, public string|null $message, #[MapFrom('documentation_url')]
    public string|null $documentationUrl,)
    {
    }
}
