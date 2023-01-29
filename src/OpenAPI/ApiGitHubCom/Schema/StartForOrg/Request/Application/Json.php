<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StartForOrg\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"repositories":{"type":"array","items":{"type":"string"},"description":"A list of arrays indicating which repositories should be migrated."},"lock_repositories":{"type":"boolean","description":"Indicates whether repositories should be locked (to prevent manipulation) while migrating data.","default":false,"examples":[true]},"exclude_metadata":{"type":"boolean","description":"Indicates whether metadata should be excluded and only git source should be included for the migration.","default":false},"exclude_git_data":{"type":"boolean","description":"Indicates whether the repository git data should be excluded from the migration.","default":false},"exclude_attachments":{"type":"boolean","description":"Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).","default":false,"examples":[true]},"exclude_releases":{"type":"boolean","description":"Indicates whether releases should be excluded from the migration (to reduce migration archive file size).","default":false,"examples":[true]},"exclude_owner_projects":{"type":"boolean","description":"Indicates whether projects owned by the organization or users should be excluded. from the migration.","default":false,"examples":[true]},"org_metadata_only":{"type":"boolean","description":"Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).","default":false,"examples":[true]},"exclude":{"type":"array","items":{"enum":["repositories"],"type":"string"},"description":"Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `\\"repositories\\"`."}}}';
    public const SCHEMA_TITLE = 'StartForOrg\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A list of arrays indicating which repositories should be migrated.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Repositories>
     */
    public readonly array $repositories;
    /**
     * Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     */
    public readonly ?bool $lock_repositories;
    /**
     * Indicates whether metadata should be excluded and only git source should be included for the migration.
     */
    public readonly ?bool $exclude_metadata;
    /**
     * Indicates whether the repository git data should be excluded from the migration.
     */
    public readonly ?bool $exclude_git_data;
    /**
     * Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     */
    public readonly ?bool $exclude_attachments;
    /**
     * Indicates whether releases should be excluded from the migration (to reduce migration archive file size).
     */
    public readonly ?bool $exclude_releases;
    /**
     * Indicates whether projects owned by the organization or users should be excluded. from the migration.
     */
    public readonly ?bool $exclude_owner_projects;
    /**
     * Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     */
    public readonly ?bool $org_metadata_only;
    /**
     * Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `"repositories"`.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Exclude>
     */
    public readonly array $exclude;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Repositories> $repositories
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Exclude> $exclude
     */
    public function __construct(array $repositories, bool $lock_repositories, bool $exclude_metadata, bool $exclude_git_data, bool $exclude_attachments, bool $exclude_releases, bool $exclude_owner_projects, bool $org_metadata_only, array $exclude)
    {
        $this->repositories = $repositories;
        $this->lock_repositories = $lock_repositories;
        $this->exclude_metadata = $exclude_metadata;
        $this->exclude_git_data = $exclude_git_data;
        $this->exclude_attachments = $exclude_attachments;
        $this->exclude_releases = $exclude_releases;
        $this->exclude_owner_projects = $exclude_owner_projects;
        $this->org_metadata_only = $org_metadata_only;
        $this->exclude = $exclude;
    }
}
