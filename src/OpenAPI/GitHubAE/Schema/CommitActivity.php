<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CommitActivity
{
    public const SCHEMA_JSON = '{"title":"Commit Activity","required":["days","total","week"],"type":"object","properties":{"days":{"type":"array","items":{"type":"integer"},"examples":[0,3,26,20,39,1,0]},"total":{"type":"integer","examples":[89]},"week":{"type":"integer","examples":[1336280400]}},"description":"Commit Activity"}';
    public const SCHEMA_TITLE = 'Commit Activity';
    public const SCHEMA_DESCRIPTION = 'Commit Activity';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03::class)
     */
    private array $days = array();
    private int $total;
    private int $week;
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03>
     */
    public function days() : array
    {
        return $this->days;
    }
    public function total() : int
    {
        return $this->total;
    }
    public function week() : int
    {
        return $this->week;
    }
}