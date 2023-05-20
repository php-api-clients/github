<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\FileCommit\Commit;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parents
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated","html_url":"generated","sha":"generated"}';

    public function __construct(public ?string $url, #[MapFrom('html_url')] public ?string $htmlUrl, public ?string $sha)
    {
    }
}
