<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Migrations\StartForOrg\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"repositories":{"type":"array","items":{"type":"string"},"description":"A list of arrays indicating which repositories should be migrated."},"lock_repositories":{"type":"boolean","description":"Indicates whether repositories should be locked (to prevent manipulation) while migrating data.","default":false,"examples":[true]},"exclude_metadata":{"type":"boolean","description":"Indicates whether metadata should be excluded and only git source should be included for the migration.","default":false},"exclude_git_data":{"type":"boolean","description":"Indicates whether the repository git data should be excluded from the migration.","default":false},"exclude_attachments":{"type":"boolean","description":"Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).","default":false,"examples":[true]},"exclude_releases":{"type":"boolean","description":"Indicates whether releases should be excluded from the migration (to reduce migration archive file size).","default":false,"examples":[true]},"exclude_owner_projects":{"type":"boolean","description":"Indicates whether projects owned by the organization or users should be excluded. from the migration.","default":false,"examples":[true]},"org_metadata_only":{"type":"boolean","description":"Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).","default":false,"examples":[true]},"exclude":{"type":"array","items":{"enum":["repositories"],"type":"string"},"description":"Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `\\"repositories\\"`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"repositories":["generated_repositories"],"lock_repositories":true,"exclude_metadata":false,"exclude_git_data":false,"exclude_attachments":true,"exclude_releases":true,"exclude_owner_projects":true,"org_metadata_only":true,"exclude":["generated_exclude"]}';
    /**
     * repositories: A list of arrays indicating which repositories should be migrated.
     * @param array<string> $repositories
     * lock_repositories: Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     * exclude_metadata: Indicates whether metadata should be excluded and only git source should be included for the migration.
     * exclude_git_data: Indicates whether the repository git data should be excluded from the migration.
     * exclude_attachments: Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     * exclude_releases: Indicates whether releases should be excluded from the migration (to reduce migration archive file size).
     * exclude_owner_projects: Indicates whether projects owned by the organization or users should be excluded. from the migration.
     * org_metadata_only: Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     * exclude: Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `"repositories"`.
     * @param ?array<string> $exclude
     */
    public function __construct(public array $repositories, public ?bool $lock_repositories, public ?bool $exclude_metadata, public ?bool $exclude_git_data, public ?bool $exclude_attachments, public ?bool $exclude_releases, public ?bool $exclude_owner_projects, public ?bool $org_metadata_only, public ?array $exclude)
    {
    }
}
