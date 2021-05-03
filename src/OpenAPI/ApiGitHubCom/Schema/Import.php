<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Import
{
    public const SCHEMA_TITLE = 'Import';
    public const SPL_HASH = '00000000729dca3f00000000797f0b2e';
    public const SCHEMA_DESCRIPTION = 'A repository import from an external source.';
    private ?string $vcs = null;
    private ?bool $use_lfs = null;
    /**
     * The URL of the originating repository.
     */
    private ?string $vcs_url = null;
    private ?string $svc_root = null;
    private ?string $tfvc_project = null;
    private ?string $status = null;
    private ?string $status_text = null;
    private ?string $failed_step = null;
    private ?string $error_message = null;
    private ?int $import_percent = null;
    private ?int $commit_count = null;
    private ?int $push_percent = null;
    private ?bool $has_large_files = null;
    private ?int $large_files_size = null;
    private ?int $large_files_count = null;
    private array $project_choices = array();
    private ?string $message = null;
    private ?int $authors_count = null;
    private ?string $url = null;
    private ?string $html_url = null;
    private ?string $authors_url = null;
    private ?string $repository_url = null;
    private ?string $svn_root = null;
    public function vcs() : ?string
    {
        return $this->vcs;
    }
    public function use_lfs() : ?bool
    {
        return $this->use_lfs;
    }
    public function vcs_url() : ?string
    {
        return $this->vcs_url;
    }
    public function svc_root() : ?string
    {
        return $this->svc_root;
    }
    public function tfvc_project() : ?string
    {
        return $this->tfvc_project;
    }
    public function status() : ?string
    {
        return $this->status;
    }
    public function status_text() : ?string
    {
        return $this->status_text;
    }
    public function failed_step() : ?string
    {
        return $this->failed_step;
    }
    public function error_message() : ?string
    {
        return $this->error_message;
    }
    public function import_percent() : ?int
    {
        return $this->import_percent;
    }
    public function commit_count() : ?int
    {
        return $this->commit_count;
    }
    public function push_percent() : ?int
    {
        return $this->push_percent;
    }
    public function has_large_files() : ?bool
    {
        return $this->has_large_files;
    }
    public function large_files_size() : ?int
    {
        return $this->large_files_size;
    }
    public function large_files_count() : ?int
    {
        return $this->large_files_count;
    }
    public function project_choices() : array
    {
        return $this->project_choices;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function authors_count() : ?int
    {
        return $this->authors_count;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function authors_url() : ?string
    {
        return $this->authors_url;
    }
    public function repository_url() : ?string
    {
        return $this->repository_url;
    }
    public function svn_root() : ?string
    {
        return $this->svn_root;
    }
}
