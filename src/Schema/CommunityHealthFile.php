<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CommunityHealthFile
{
    public const SCHEMA_JSON         = '{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = 'Community Health File';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/"}';

    public function __construct(public string $url, #[MapFrom('html_url')]
    public string $htmlUrl,)
    {
    }
}
