<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleUpdate;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{"required":["update_allows_fetch_and_merge"],"type":"object","properties":{"update_allows_fetch_and_merge":{"type":"boolean","description":"Branch can pull changes from its upstream repository"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"update_allows_fetch_and_merge":false}';

    /**
     * updateAllowsFetchAndMerge: Branch can pull changes from its upstream repository
     */
    public function __construct(#[MapFrom('update_allows_fetch_and_merge')]
    public bool $updateAllowsFetchAndMerge,)
    {
    }
}
