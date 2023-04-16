<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Migrations\StartForAuthenticatedUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["repositories"],"type":"object","properties":{"lock_repositories":{"type":"boolean","description":"Lock the repositories being migrated at the start of the migration","readOnly":false,"examples":[true]},"exclude_metadata":{"type":"boolean","description":"Indicates whether metadata should be excluded and only git source should be included for the migration.","readOnly":false,"examples":[true]},"exclude_git_data":{"type":"boolean","description":"Indicates whether the repository git data should be excluded from the migration.","readOnly":false,"examples":[true]},"exclude_attachments":{"type":"boolean","description":"Do not include attachments in the migration","readOnly":false,"examples":[true]},"exclude_releases":{"type":"boolean","description":"Do not include releases in the migration","readOnly":false,"examples":[true]},"exclude_owner_projects":{"type":"boolean","description":"Indicates whether projects owned by the organization or users should be excluded.","readOnly":false,"examples":[true]},"org_metadata_only":{"type":"boolean","description":"Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).","default":false,"examples":[true]},"exclude":{"type":"array","items":{"enum":["repositories"],"type":"string","description":"Allowed values that can be passed to the exclude param.","examples":["repositories"]},"description":"Exclude attributes from the API response to improve performance","readOnly":false,"examples":["repositories"]},"repositories":{"type":"array","items":{"type":"string","description":"Repository path, owner and name","examples":["acme\\/widgets"]}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"lock_repositories":true,"exclude_metadata":true,"exclude_git_data":true,"exclude_attachments":true,"exclude_releases":true,"exclude_owner_projects":true,"org_metadata_only":true,"exclude":["repositories"],"repositories":["generated_repositories_null"]}';

    /**
     * lockRepositories: Lock the repositories being migrated at the start of the migration
     * excludeMetadata: Indicates whether metadata should be excluded and only git source should be included for the migration.
     * excludeGitData: Indicates whether the repository git data should be excluded from the migration.
     * excludeAttachments: Do not include attachments in the migration
     * excludeReleases: Do not include releases in the migration
     * excludeOwnerProjects: Indicates whether projects owned by the organization or users should be excluded.
     * orgMetadataOnly: Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     * exclude: Exclude attributes from the API response to improve performance
     *
     * @param ?array<string> $exclude
     * @param array<string>  $repositories
     */
    public function __construct(#[MapFrom('lock_repositories')] public ?bool $lockRepositories, #[MapFrom('exclude_metadata')] public ?bool $excludeMetadata, #[MapFrom('exclude_git_data')] public ?bool $excludeGitData, #[MapFrom('exclude_attachments')] public ?bool $excludeAttachments, #[MapFrom('exclude_releases')] public ?bool $excludeReleases, #[MapFrom('exclude_owner_projects')] public ?bool $excludeOwnerProjects, #[MapFrom('org_metadata_only')] public ?bool $orgMetadataOnly, public ?array $exclude, public array $repositories)
    {
    }
}
