<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Migrations\StartForOrg\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"repositories":{"type":"array","items":{"type":"string"},"description":"A list of arrays indicating which repositories should be migrated."},"lock_repositories":{"type":"boolean","description":"Indicates whether repositories should be locked (to prevent manipulation) while migrating data.","default":false,"examples":[true]},"exclude_metadata":{"type":"boolean","description":"Indicates whether metadata should be excluded and only git source should be included for the migration.","default":false},"exclude_git_data":{"type":"boolean","description":"Indicates whether the repository git data should be excluded from the migration.","default":false},"exclude_attachments":{"type":"boolean","description":"Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).","default":false,"examples":[true]},"exclude_releases":{"type":"boolean","description":"Indicates whether releases should be excluded from the migration (to reduce migration archive file size).","default":false,"examples":[true]},"exclude_owner_projects":{"type":"boolean","description":"Indicates whether projects owned by the organization or users should be excluded. from the migration.","default":false,"examples":[true]},"org_metadata_only":{"type":"boolean","description":"Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).","default":false,"examples":[true]},"exclude":{"type":"array","items":{"enum":["repositories"],"type":"string"},"description":"Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `\\"repositories\\"`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"repositories":["generated_repositories_null"],"lock_repositories":true,"exclude_metadata":false,"exclude_git_data":false,"exclude_attachments":true,"exclude_releases":true,"exclude_owner_projects":true,"org_metadata_only":true,"exclude":["generated_exclude_null"]}';
    /**
     * repositories: A list of arrays indicating which repositories should be migrated.
     * @param array<string> $repositories
     * lockRepositories: Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     * excludeMetadata: Indicates whether metadata should be excluded and only git source should be included for the migration.
     * excludeGitData: Indicates whether the repository git data should be excluded from the migration.
     * excludeAttachments: Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     * excludeReleases: Indicates whether releases should be excluded from the migration (to reduce migration archive file size).
     * excludeOwnerProjects: Indicates whether projects owned by the organization or users should be excluded. from the migration.
     * orgMetadataOnly: Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     * exclude: Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `"repositories"`.
     * @param ?array<string> $exclude
     */
    public function __construct(public array $repositories, #[\EventSauce\ObjectHydrator\MapFrom('lock_repositories')] public ?bool $lockRepositories, #[\EventSauce\ObjectHydrator\MapFrom('exclude_metadata')] public ?bool $excludeMetadata, #[\EventSauce\ObjectHydrator\MapFrom('exclude_git_data')] public ?bool $excludeGitData, #[\EventSauce\ObjectHydrator\MapFrom('exclude_attachments')] public ?bool $excludeAttachments, #[\EventSauce\ObjectHydrator\MapFrom('exclude_releases')] public ?bool $excludeReleases, #[\EventSauce\ObjectHydrator\MapFrom('exclude_owner_projects')] public ?bool $excludeOwnerProjects, #[\EventSauce\ObjectHydrator\MapFrom('org_metadata_only')] public ?bool $orgMetadataOnly, public ?array $exclude)
    {
    }
}
