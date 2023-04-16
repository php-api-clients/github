<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract9a3bf4c19b6d9294eea46918d9fbd504
{
    public const SCHEMA_JSON         = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The access_token of the OAuth or GitHub application."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"access_token":"generated_access_token_null"}';

    /**
     * accessToken: The access_token of the OAuth or GitHub application.
     */
    public function __construct(#[MapFrom('access_token')] public string $accessToken)
    {
    }
}
