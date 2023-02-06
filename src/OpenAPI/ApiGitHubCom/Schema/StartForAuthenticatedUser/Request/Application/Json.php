<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StartForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"lock_repositories":{"type":"boolean","description":"Lock the repositories being migrated at the start of the migration","readOnly":false,"examples":[true]},"exclude_metadata":{"type":"boolean","description":"Indicates whether metadata should be excluded and only git source should be included for the migration.","readOnly":false,"examples":[true]},"exclude_git_data":{"type":"boolean","description":"Indicates whether the repository git data should be excluded from the migration.","readOnly":false,"examples":[true]},"exclude_attachments":{"type":"boolean","description":"Do not include attachments in the migration","readOnly":false,"examples":[true]},"exclude_releases":{"type":"boolean","description":"Do not include releases in the migration","readOnly":false,"examples":[true]},"exclude_owner_projects":{"type":"boolean","description":"Indicates whether projects owned by the organization or users should be excluded.","readOnly":false,"examples":[true]},"org_metadata_only":{"type":"boolean","description":"Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).","default":false,"examples":[true]},"exclude":{"type":"array","items":{"enum":["repositories"],"type":"string","description":"Allowed values that can be passed to the exclude param.","examples":["repositories"]},"description":"Exclude attributes from the API response to improve performance","readOnly":false,"examples":["repositories"]},"repositories":{"type":"array","items":{"type":"string","description":"Repository path, owner and name","examples":["acme\\/widgets"]}}}}';
    public const SCHEMA_EXAMPLE = '{"lock_repositories":true,"exclude_metadata":true,"exclude_git_data":true,"exclude_attachments":true,"exclude_releases":true,"exclude_owner_projects":true,"org_metadata_only":true,"exclude":"repositories"}';
    public const SCHEMA_TITLE = 'StartForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Lock the repositories being migrated at the start of the migration
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
     * Do not include attachments in the migration
     */
    public readonly ?bool $exclude_attachments;
    /**
     * Do not include releases in the migration
     */
    public readonly ?bool $exclude_releases;
    /**
     * Indicates whether projects owned by the organization or users should be excluded.
     */
    public readonly ?bool $exclude_owner_projects;
    /**
     * Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     */
    public readonly ?bool $org_metadata_only;
    /**
     * Exclude attributes from the API response to improve performance
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Exclude>
     */
    public readonly array $exclude;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Repositories>
     */
    public readonly array $repositories;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Exclude> $exclude
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Repositories> $repositories
     */
    public function __construct(bool $lock_repositories, bool $exclude_metadata, bool $exclude_git_data, bool $exclude_attachments, bool $exclude_releases, bool $exclude_owner_projects, bool $org_metadata_only, array $exclude, array $repositories)
    {
        $this->lock_repositories = $lock_repositories;
        $this->exclude_metadata = $exclude_metadata;
        $this->exclude_git_data = $exclude_git_data;
        $this->exclude_attachments = $exclude_attachments;
        $this->exclude_releases = $exclude_releases;
        $this->exclude_owner_projects = $exclude_owner_projects;
        $this->org_metadata_only = $org_metadata_only;
        $this->exclude = $exclude;
        $this->repositories = $repositories;
    }
}
