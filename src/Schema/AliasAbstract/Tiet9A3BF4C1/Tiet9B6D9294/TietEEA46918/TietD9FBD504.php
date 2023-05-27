<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet9A3BF4C1\Tiet9B6D9294\TietEEA46918;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietD9FBD504
{
    public const SCHEMA_JSON         = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The access_token of the OAuth or GitHub application."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"access_token":"generated"}';

    /**
     * accessToken: The access_token of the OAuth or GitHub application.
     */
    public function __construct(#[MapFrom('access_token')] public string $accessToken)
    {
    }
}
