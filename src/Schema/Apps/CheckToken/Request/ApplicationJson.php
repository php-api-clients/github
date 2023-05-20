<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Apps\CheckToken\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
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
