<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstractb84d28b17786e0453136b62e5df48315
{
    public const SCHEMA_JSON         = '{"required":["sha","url","html_url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/"}';

    /**
     * sha: SHA for the commit
     */
    public function __construct(public string $sha, public string $url, #[MapFrom('html_url')] public string $htmlUrl)
    {
    }
}
