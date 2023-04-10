<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CommitActivity
{
    public const SCHEMA_JSON = '{"title":"Commit Activity","required":["days","total","week"],"type":"object","properties":{"days":{"type":"array","items":{"type":"integer"},"examples":[0,3,26,20,39,1,0]},"total":{"type":"integer","examples":[89]},"week":{"type":"integer","examples":[1336280400]}},"description":"Commit Activity"}';
    public const SCHEMA_TITLE = 'Commit Activity';
    public const SCHEMA_DESCRIPTION = 'Commit Activity';
    public const SCHEMA_EXAMPLE_DATA = '{"days":[0],"total":89,"week":1336280400}';
    /**
     * @param array<int> $days
     */
    public function __construct(public array $days, public int $total, public int $week)
    {
    }
}
