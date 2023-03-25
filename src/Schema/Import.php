<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Import
{
    public const SCHEMA_JSON = '{"title":"Import","required":["vcs","vcs_url","status","url","repository_url","html_url","authors_url"],"type":"object","properties":{"vcs":{"type":["string","null"]},"use_lfs":{"type":"boolean"},"vcs_url":{"type":"string","description":"The URL of the originating repository."},"svc_root":{"type":"string"},"tfvc_project":{"type":"string"},"status":{"enum":["auth","error","none","detecting","choose","auth_failed","importing","mapping","waiting_to_push","pushing","complete","setup","unknown","detection_found_multiple","detection_found_nothing","detection_needs_auth"],"type":"string"},"status_text":{"type":["string","null"]},"failed_step":{"type":["string","null"]},"error_message":{"type":["string","null"]},"import_percent":{"type":["integer","null"]},"commit_count":{"type":["integer","null"]},"push_percent":{"type":["integer","null"]},"has_large_files":{"type":"boolean"},"large_files_size":{"type":"integer"},"large_files_count":{"type":"integer"},"project_choices":{"type":"array","items":{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}},"message":{"type":"string"},"authors_count":{"type":["integer","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"authors_url":{"type":"string","format":"uri"},"repository_url":{"type":"string","format":"uri"},"svn_root":{"type":"string"}},"description":"A repository import from an external source."}';
    public const SCHEMA_TITLE = 'Import';
    public const SCHEMA_DESCRIPTION = 'A repository import from an external source.';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs":"generated_vcs_null","useLfs":false,"vcsUrl":"generated_vcs_url_null","svcRoot":"generated_svc_root_null","tfvcProject":"generated_tfvc_project_null","status":"auth","statusText":"generated_status_text_null","failedStep":"generated_failed_step_null","errorMessage":"generated_error_message_null","importPercent":13,"commitCount":13,"pushPercent":13,"hasLargeFiles":false,"largeFilesSize":13,"largeFilesCount":13,"projectChoices":[{"vcs":"generated_vcs_null","tfvcProject":"generated_tfvc_project_null","humanName":"generated_human_name_null"}],"message":"generated_message_null","authorsCount":13,"url":"https:\\/\\/example.com\\/","htmlUrl":"https:\\/\\/example.com\\/","authorsUrl":"https:\\/\\/example.com\\/","repositoryUrl":"https:\\/\\/example.com\\/","svnRoot":"generated_svn_root_null"}';
    /**
     * vcsUrl: The URL of the originating repository.
     * @param ?array<\ApiClients\Client\GitHub\Schema\Import\ProjectChoices> $projectChoices
     */
    public function __construct(public ?string $vcs, #[\EventSauce\ObjectHydrator\MapFrom('use_lfs')] public ?bool $useLfs, #[\EventSauce\ObjectHydrator\MapFrom('vcs_url')] public string $vcsUrl, #[\EventSauce\ObjectHydrator\MapFrom('svc_root')] public ?string $svcRoot, #[\EventSauce\ObjectHydrator\MapFrom('tfvc_project')] public ?string $tfvcProject, public string $status, #[\EventSauce\ObjectHydrator\MapFrom('status_text')] public ?string $statusText, #[\EventSauce\ObjectHydrator\MapFrom('failed_step')] public ?string $failedStep, #[\EventSauce\ObjectHydrator\MapFrom('error_message')] public ?string $errorMessage, #[\EventSauce\ObjectHydrator\MapFrom('import_percent')] public ?int $importPercent, #[\EventSauce\ObjectHydrator\MapFrom('commit_count')] public ?int $commitCount, #[\EventSauce\ObjectHydrator\MapFrom('push_percent')] public ?int $pushPercent, #[\EventSauce\ObjectHydrator\MapFrom('has_large_files')] public ?bool $hasLargeFiles, #[\EventSauce\ObjectHydrator\MapFrom('large_files_size')] public ?int $largeFilesSize, #[\EventSauce\ObjectHydrator\MapFrom('large_files_count')] public ?int $largeFilesCount, #[\EventSauce\ObjectHydrator\MapFrom('project_choices')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Import\ProjectChoices::class)] public ?array $projectChoices, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('authors_count')] public ?int $authorsCount, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('authors_url')] public string $authorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repository_url')] public string $repositoryUrl, #[\EventSauce\ObjectHydrator\MapFrom('svn_root')] public ?string $svnRoot)
    {
    }
}
