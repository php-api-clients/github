<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Schema;

final class Milestone
{
    public const SCHEMA_TITLE = 'Milestone';
    public const SCHEMA_DESCRIPTION = 'A collection of related issues and pull requests.';
    private string $url;
    private string $html_url;
    private string $labels_url;
    private int $id;
    private string $node_id;
    /**The number of the milestone.**/
    private int $number;
    /**The state of the milestone.**/
    private string $state;
    /**The title of the milestone.**/
    private string $title;
    private string $description;
    private $creator;
    private int $open_issues;
    private int $closed_issues;
    private string $created_at;
    private string $updated_at;
    private string $closed_at;
    private string $due_on;
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function labels_url() : string
    {
        return $this->labels_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function creator()
    {
        return $this->creator;
    }
    public function open_issues() : int
    {
        return $this->open_issues;
    }
    public function closed_issues() : int
    {
        return $this->closed_issues;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function closed_at() : string
    {
        return $this->closed_at;
    }
    public function due_on() : string
    {
        return $this->due_on;
    }
}
