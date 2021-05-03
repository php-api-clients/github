<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CheckRun
{
    public const SCHEMA_TITLE = 'CheckRun';
    public const SPL_HASH = '000000000cd53c380000000040effa88';
    public const SCHEMA_DESCRIPTION = 'A check performed on the code of a given code change';
    /**
     * The id of the check.
     */
    private ?int $id = null;
    /**
     * The SHA of the commit that is being checked.
     */
    private ?string $head_sha = null;
    private ?string $node_id = null;
    private ?string $external_id = null;
    private ?string $url = null;
    private ?string $html_url = null;
    private ?string $details_url = null;
    /**
     * The phase of the lifecycle that the check is currently in.
     */
    private ?string $status = null;
    private ?string $conclusion = null;
    private ?string $started_at = null;
    private ?string $completed_at = null;
    private ?object $output = null;
    /**
     * The name of the check.
     */
    private ?string $name = null;
    private ?object $check_suite = null;
    private $app;
    private $pull_requests;
    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     */
    private ?object $deployment = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function head_sha() : ?string
    {
        return $this->head_sha;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function external_id() : ?string
    {
        return $this->external_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function details_url() : ?string
    {
        return $this->details_url;
    }
    public function status() : ?string
    {
        return $this->status;
    }
    public function conclusion() : ?string
    {
        return $this->conclusion;
    }
    public function started_at() : ?string
    {
        return $this->started_at;
    }
    public function completed_at() : ?string
    {
        return $this->completed_at;
    }
    public function output() : ?object
    {
        return $this->output;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function check_suite() : ?object
    {
        return $this->check_suite;
    }
    public function app()
    {
        return $this->app;
    }
    public function pull_requests()
    {
        return $this->pull_requests;
    }
    public function deployment() : ?object
    {
        return $this->deployment;
    }
}
