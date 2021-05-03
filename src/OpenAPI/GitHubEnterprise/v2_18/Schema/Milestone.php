<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Milestone
{
    public const SCHEMA_TITLE = 'Milestone';
    public const SPL_HASH = '000000000c92eaed000000006ad867a6';
    public const SCHEMA_DESCRIPTION = 'A collection of related issues and pull requests.';
    private ?string $url = null;
    private ?string $html_url = null;
    private ?string $labels_url = null;
    private ?int $id = null;
    private ?string $node_id = null;
    /**
     * The number of the milestone.
     */
    private ?int $number = null;
    /**
     * The state of the milestone.
     */
    private ?string $state = null;
    /**
     * The title of the milestone.
     */
    private ?string $title = null;
    private ?string $description = null;
    private $creator;
    private ?int $open_issues = null;
    private ?int $closed_issues = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $closed_at = null;
    private ?string $due_on = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function labels_url() : ?string
    {
        return $this->labels_url;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function number() : ?int
    {
        return $this->number;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function creator()
    {
        return $this->creator;
    }
    public function open_issues() : ?int
    {
        return $this->open_issues;
    }
    public function closed_issues() : ?int
    {
        return $this->closed_issues;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function closed_at() : ?string
    {
        return $this->closed_at;
    }
    public function due_on() : ?string
    {
        return $this->due_on;
    }
}
