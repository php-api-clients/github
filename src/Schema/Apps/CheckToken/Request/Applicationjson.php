<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Apps\CheckToken\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The access_token of the OAuth or GitHub application."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"accessToken":"generated_access_token_null"}';
    /**
     * accessToken: The access_token of the OAuth or GitHub application.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('access_token')] public string $accessToken)
    {
    }
}
