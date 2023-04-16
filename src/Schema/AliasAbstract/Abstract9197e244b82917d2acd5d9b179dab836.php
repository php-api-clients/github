<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract9197e244b82917d2acd5d9b179dab836
{
    public const SCHEMA_JSON         = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The OAuth access token used to authenticate to the GitHub API."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"access_token":"generated_access_token_null"}';

    /**
     * accessToken: The OAuth access token used to authenticate to the GitHub API.
     */
    public function __construct(#[MapFrom('access_token')] public string $accessToken)
    {
    }
}
