<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CFc76D862E7C636F8B6C27Ad8F73806Fd
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"repositories":{"type":"array","items":{"type":"string"},"description":"A list of arrays indicating which repositories should be migrated."},"lock_repositories":{"type":"boolean","description":"Indicates whether repositories should be locked (to prevent manipulation) while migrating data.","default":false,"examples":[true]},"exclude_metadata":{"type":"boolean","description":"Indicates whether metadata should be excluded and only git source should be included for the migration.","default":false},"exclude_git_data":{"type":"boolean","description":"Indicates whether the repository git data should be excluded from the migration.","default":false},"exclude_attachments":{"type":"boolean","description":"Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).","default":false,"examples":[true]},"exclude_releases":{"type":"boolean","description":"Indicates whether releases should be excluded from the migration (to reduce migration archive file size).","default":false,"examples":[true]},"exclude_owner_projects":{"type":"boolean","description":"Indicates whether projects owned by the organization or users should be excluded. from the migration.","default":false,"examples":[true]},"org_metadata_only":{"type":"boolean","description":"Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).","default":false,"examples":[true]},"exclude":{"type":"array","items":{"enum":["repositories"],"type":"string"},"description":"Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `\\"repositories\\"`."}}}';
    public const SCHEMA_TITLE = 'c_fc76d862e7c636f8b6c27ad8f73806fd';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A list of arrays indicating which repositories should be migrated.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $repositories = array();
    /**
     * Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     */
    private ?bool $lock_repositories = null;
    /**
     * Indicates whether metadata should be excluded and only git source should be included for the migration.
     */
    private ?bool $exclude_metadata = null;
    /**
     * Indicates whether the repository git data should be excluded from the migration.
     */
    private ?bool $exclude_git_data = null;
    /**
     * Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     */
    private ?bool $exclude_attachments = null;
    /**
     * Indicates whether releases should be excluded from the migration (to reduce migration archive file size).
     */
    private ?bool $exclude_releases = null;
    /**
     * Indicates whether projects owned by the organization or users should be excluded. from the migration.
     */
    private ?bool $exclude_owner_projects = null;
    /**
     * Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     */
    private ?bool $org_metadata_only = null;
    /**
     * Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `"repositories"`.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C49D9Ebfd04F3918C3Fca7F6Dcfa7A409>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C49D9Ebfd04F3918C3Fca7F6Dcfa7A409::class)
     */
    private array $exclude = array();
    /**
     * A list of arrays indicating which repositories should be migrated.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
    /**
     * Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     */
    public function lock_repositories() : ?bool
    {
        return $this->lock_repositories;
    }
    /**
     * Indicates whether metadata should be excluded and only git source should be included for the migration.
     */
    public function exclude_metadata() : ?bool
    {
        return $this->exclude_metadata;
    }
    /**
     * Indicates whether the repository git data should be excluded from the migration.
     */
    public function exclude_git_data() : ?bool
    {
        return $this->exclude_git_data;
    }
    /**
     * Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     */
    public function exclude_attachments() : ?bool
    {
        return $this->exclude_attachments;
    }
    /**
     * Indicates whether releases should be excluded from the migration (to reduce migration archive file size).
     */
    public function exclude_releases() : ?bool
    {
        return $this->exclude_releases;
    }
    /**
     * Indicates whether projects owned by the organization or users should be excluded. from the migration.
     */
    public function exclude_owner_projects() : ?bool
    {
        return $this->exclude_owner_projects;
    }
    /**
     * Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     */
    public function org_metadata_only() : ?bool
    {
        return $this->org_metadata_only;
    }
    /**
     * Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `"repositories"`.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C49D9Ebfd04F3918C3Fca7F6Dcfa7A409>
     */
    public function exclude() : array
    {
        return $this->exclude;
    }
}
