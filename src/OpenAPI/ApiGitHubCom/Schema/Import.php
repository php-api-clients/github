<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Import
{
    public const SCHEMA_TITLE = 'Import';
    public const SCHEMA_DESCRIPTION = 'A repository import from an external source.';
    private $vcs;
    private ?bool $use_lfs = null;
    /**
     * The URL of the originating repository.
     */
    private string $vcs_url;
    private ?string $svc_root = null;
    private ?string $tfvc_project = null;
    private string $status;
    private $status_text;
    private $failed_step;
    private $error_message;
    private $import_percent;
    private $commit_count;
    private $push_percent;
    private ?bool $has_large_files = null;
    private ?int $large_files_size = null;
    private ?int $large_files_count = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import\ProjectChoices>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import\ProjectChoices::class)
     */
    private array $project_choices = array();
    private ?string $message = null;
    private $authors_count;
    private string $url;
    private string $html_url;
    private string $authors_url;
    private string $repository_url;
    private ?string $svn_root = null;
    public function vcs()
    {
        return $this->vcs;
    }
    public function use_lfs() : ?bool
    {
        return $this->use_lfs;
    }
    /**
     * The URL of the originating repository.
     */
    public function vcs_url() : string
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
    public function status() : string
    {
        return $this->status;
    }
    public function status_text()
    {
        return $this->status_text;
    }
    public function failed_step()
    {
        return $this->failed_step;
    }
    public function error_message()
    {
        return $this->error_message;
    }
    public function import_percent()
    {
        return $this->import_percent;
    }
    public function commit_count()
    {
        return $this->commit_count;
    }
    public function push_percent()
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
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import\ProjectChoices>
     */
    public function project_choices() : array
    {
        return $this->project_choices;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function authors_count()
    {
        return $this->authors_count;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function authors_url() : string
    {
        return $this->authors_url;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    public function svn_root() : ?string
    {
        return $this->svn_root;
    }
}
