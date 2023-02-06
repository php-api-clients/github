<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommitActivity
{
    public const SCHEMA_JSON = '{"title":"Commit Activity","required":["days","total","week"],"type":"object","properties":{"days":{"type":"array","items":{"type":"integer"},"examples":[0,3,26,20,39,1,0]},"total":{"type":"integer","examples":[89]},"week":{"type":"integer","examples":[1336280400]}},"description":"Commit Activity"}';
    public const SCHEMA_EXAMPLE = '{"days":0,"total":89,"week":1336280400}';
    public const SCHEMA_TITLE = 'Commit Activity';
    public const SCHEMA_DESCRIPTION = 'Commit Activity';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public readonly array $days;
    public readonly int $total;
    public readonly int $week;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat> $days
     */
    public function __construct(array $days, int $total, int $week)
    {
        $this->days = $days;
        $this->total = $total;
        $this->week = $week;
    }
}
