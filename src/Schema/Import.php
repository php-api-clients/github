<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Import
{
    public const SCHEMA_JSON         = '{"title":"Import","required":["vcs","vcs_url","status","url","repository_url","html_url","authors_url"],"type":"object","properties":{"vcs":{"type":["string","null"]},"use_lfs":{"type":"boolean"},"vcs_url":{"type":"string","description":"The URL of the originating repository."},"svc_root":{"type":"string"},"tfvc_project":{"type":"string"},"status":{"enum":["auth","error","none","detecting","choose","auth_failed","importing","mapping","waiting_to_push","pushing","complete","setup","unknown","detection_found_multiple","detection_found_nothing","detection_needs_auth"],"type":"string"},"status_text":{"type":["string","null"]},"failed_step":{"type":["string","null"]},"error_message":{"type":["string","null"]},"import_percent":{"type":["integer","null"]},"commit_count":{"type":["integer","null"]},"push_percent":{"type":["integer","null"]},"has_large_files":{"type":"boolean"},"large_files_size":{"type":"integer"},"large_files_count":{"type":"integer"},"project_choices":{"type":"array","items":{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}},"message":{"type":"string"},"authors_count":{"type":["integer","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"authors_url":{"type":"string","format":"uri"},"repository_url":{"type":"string","format":"uri"},"svn_root":{"type":"string"}},"description":"A repository import from an external source."}';
    public const SCHEMA_TITLE        = 'Import';
    public const SCHEMA_DESCRIPTION  = 'A repository import from an external source.';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs":"generated","use_lfs":false,"vcs_url":"generated","svc_root":"generated","tfvc_project":"generated","status":"detection_needs_auth","status_text":"generated","failed_step":"generated","error_message":"generated","import_percent":14,"commit_count":12,"push_percent":12,"has_large_files":false,"large_files_size":16,"large_files_count":17,"project_choices":[{"vcs":"generated","tfvc_project":"generated","human_name":"generated"},{"vcs":"generated","tfvc_project":"generated","human_name":"generated"}],"message":"generated","authors_count":13,"url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","authors_url":"https:\\/\\/example.com\\/","repository_url":"https:\\/\\/example.com\\/","svn_root":"generated"}';

    /**
     * vcsUrl: The URL of the originating repository.
     */
    public function __construct(public string|null $vcs, #[MapFrom('use_lfs')]
    public bool|null $useLfs, #[MapFrom('vcs_url')]
    public string $vcsUrl, #[MapFrom('svc_root')]
    public string|null $svcRoot, #[MapFrom('tfvc_project')]
    public string|null $tfvcProject, public string $status, #[MapFrom('status_text')]
    public string|null $statusText, #[MapFrom('failed_step')]
    public string|null $failedStep, #[MapFrom('error_message')]
    public string|null $errorMessage, #[MapFrom('import_percent')]
    public int|null $importPercent, #[MapFrom('commit_count')]
    public int|null $commitCount, #[MapFrom('push_percent')]
    public int|null $pushPercent, #[MapFrom('has_large_files')]
    public bool|null $hasLargeFiles, #[MapFrom('large_files_size')]
    public int|null $largeFilesSize, #[MapFrom('large_files_count')]
    public int|null $largeFilesCount, #[MapFrom('project_choices')]
    public array|null $projectChoices, public string|null $message, #[MapFrom('authors_count')]
    public int|null $authorsCount, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('authors_url')]
    public string $authorsUrl, #[MapFrom('repository_url')]
    public string $repositoryUrl, #[MapFrom('svn_root')]
    public string|null $svnRoot,)
    {
    }
}
