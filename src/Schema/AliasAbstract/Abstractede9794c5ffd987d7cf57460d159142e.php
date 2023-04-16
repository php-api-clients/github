<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstractede9794c5ffd987d7cf57460d159142e
{
    public const SCHEMA_JSON         = '{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}';
    public const SCHEMA_TITLE        = 'Link';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated_href_uri-template"}';

    public function __construct(public string $href)
    {
    }
}
