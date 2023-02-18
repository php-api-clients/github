<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class Import
{
    public const SCHEMA_JSON        = '{"title":"Import","required":["vcs","vcs_url","status","url","repository_url","html_url","authors_url"],"type":"object","properties":{"vcs":{"type":["string","null"]},"use_lfs":{"type":"boolean"},"vcs_url":{"type":"string","description":"The URL of the originating repository."},"svc_root":{"type":"string"},"tfvc_project":{"type":"string"},"status":{"enum":["auth","error","none","detecting","choose","auth_failed","importing","mapping","waiting_to_push","pushing","complete","setup","unknown","detection_found_multiple","detection_found_nothing","detection_needs_auth"],"type":"string"},"status_text":{"type":["string","null"]},"failed_step":{"type":["string","null"]},"error_message":{"type":["string","null"]},"import_percent":{"type":["integer","null"]},"commit_count":{"type":["integer","null"]},"push_percent":{"type":["integer","null"]},"has_large_files":{"type":"boolean"},"large_files_size":{"type":"integer"},"large_files_count":{"type":"integer"},"project_choices":{"type":"array","items":{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}},"message":{"type":"string"},"authors_count":{"type":["integer","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"authors_url":{"type":"string","format":"uri"},"repository_url":{"type":"string","format":"uri"},"svn_root":{"type":"string"}},"description":"A repository import from an external source."}';
    public const SCHEMA_TITLE       = 'Import';
    public const SCHEMA_DESCRIPTION = 'A repository import from an external source.';
    public ?string $vcs;
    public bool $use_lfs;
    /**
     * The URL of the originating repository.
     */
    public ?string $vcs_url;
    public string $svc_root;
    public string $tfvc_project;
    public ?string $status;
    public ?string $status_text;
    public ?string $failed_step;
    public ?string $error_message;
    public ?int $import_percent;
    public ?int $commit_count;
    public ?int $push_percent;
    public bool $has_large_files;
    public int $large_files_size;
    public int $large_files_count;
    public array $project_choices;
    public string $message;
    public ?int $authors_count;
    public ?string $url;
    public ?string $html_url;
    public ?string $authors_url;
    public ?string $repository_url;
    public string $svn_root;

    public function __construct(string $vcs, bool $use_lfs, string $vcs_url, string $svc_root, string $tfvc_project, string $status, string $status_text, string $failed_step, string $error_message, int $import_percent, int $commit_count, int $push_percent, bool $has_large_files, int $large_files_size, int $large_files_count, array $project_choices, string $message, int $authors_count, string $url, string $html_url, string $authors_url, string $repository_url, string $svn_root)
    {
        $this->vcs               = $vcs;
        $this->use_lfs           = $use_lfs;
        $this->vcs_url           = $vcs_url;
        $this->svc_root          = $svc_root;
        $this->tfvc_project      = $tfvc_project;
        $this->status            = $status;
        $this->status_text       = $status_text;
        $this->failed_step       = $failed_step;
        $this->error_message     = $error_message;
        $this->import_percent    = $import_percent;
        $this->commit_count      = $commit_count;
        $this->push_percent      = $push_percent;
        $this->has_large_files   = $has_large_files;
        $this->large_files_size  = $large_files_size;
        $this->large_files_count = $large_files_count;
        $this->project_choices   = $project_choices;
        $this->message           = $message;
        $this->authors_count     = $authors_count;
        $this->url               = $url;
        $this->html_url          = $html_url;
        $this->authors_url       = $authors_url;
        $this->repository_url    = $repository_url;
        $this->svn_root          = $svn_root;
    }
}
