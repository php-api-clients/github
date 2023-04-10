<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ParticipationStats
{
    public const SCHEMA_JSON = '{"title":"Participation Stats","required":["all","owner"],"type":"object","properties":{"all":{"type":"array","items":{"type":"integer"}},"owner":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = 'Participation Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"all":[13],"owner":[13]}';
    /**
     * @param array<int> $all
     * @param array<int> $owner
     */
    public function __construct(public array $all, public array $owner)
    {
    }
}
