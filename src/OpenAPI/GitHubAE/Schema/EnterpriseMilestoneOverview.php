<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnterpriseMilestoneOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Milestone Stats","required":["total_milestones","open_milestones","closed_milestones"],"type":"object","properties":{"total_milestones":{"type":"integer"},"open_milestones":{"type":"integer"},"closed_milestones":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Milestone Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_milestones;
    private int $open_milestones;
    private int $closed_milestones;
    public function total_milestones() : int
    {
        return $this->total_milestones;
    }
    public function open_milestones() : int
    {
        return $this->open_milestones;
    }
    public function closed_milestones() : int
    {
        return $this->closed_milestones;
    }
}
