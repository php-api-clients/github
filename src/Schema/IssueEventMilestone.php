<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class IssueEventMilestone
{
    public const SCHEMA_JSON = '{"title":"Issue Event Milestone","required":["title"],"type":"object","properties":{"title":{"type":"string"}},"description":"Issue Event Milestone"}';
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    public ?string $title;
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
