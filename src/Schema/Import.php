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
    public const SCHEMA_EXAMPLE_DATA = '{"vcs":"generated_vcs","use_lfs":false,"vcs_url":"generated_vcs_url","svc_root":"generated_svc_root","tfvc_project":"generated_tfvc_project","status":"generated_status","status_text":"generated_status_text","failed_step":"generated_failed_step","error_message":"generated_error_message","import_percent":13,"commit_count":13,"push_percent":13,"has_large_files":false,"large_files_size":13,"large_files_count":13,"project_choices":[{"vcs":"generated_vcs","tfvc_project":"generated_tfvc_project","human_name":"generated_human_name"}],"message":"generated_message","authors_count":13,"url":"generated_url","html_url":"generated_html_url","authors_url":"generated_authors_url","repository_url":"generated_repository_url","svn_root":"generated_svn_root"}';
    /**
     * vcs_url: The URL of the originating repository.
     * @param ?array<\ApiClients\Client\GitHub\Schema\Import\ProjectChoices> $project_choices
     */
    public function __construct(public ?string $vcs, public ?bool $use_lfs, public string $vcs_url, public ?string $svc_root, public ?string $tfvc_project, public string $status, public ?string $status_text, public ?string $failed_step, public ?string $error_message, public ?int $import_percent, public ?int $commit_count, public ?int $push_percent, public ?bool $has_large_files, public ?int $large_files_size, public ?int $large_files_count, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Import\ProjectChoices::class)] public ?array $project_choices, public ?string $message, public ?int $authors_count, public string $url, public string $html_url, public string $authors_url, public string $repository_url, public ?string $svn_root)
    {
    }
}
