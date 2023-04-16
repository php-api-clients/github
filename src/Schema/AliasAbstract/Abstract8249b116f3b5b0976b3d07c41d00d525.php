<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract8249b116f3b5b0976b3d07c41d00d525
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url_null","html_url":"generated_html_url_null","sha":"generated_sha_null"}';

    public function __construct(public ?string $url, #[MapFrom('html_url')] public ?string $htmlUrl, public ?string $sha)
    {
    }
}
