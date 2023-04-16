<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operation\Gists\Get\Response\Applicationjson\H403;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Block
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reason":"generated_reason_null","created_at":"generated_created_at_null","html_url":"generated_html_url_null"}';

    public function __construct(public ?string $reason, #[MapFrom('created_at')] public ?string $createdAt, #[MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
