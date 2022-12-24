<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C05C9447987Ae914466A385Adc87F4067
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"lock_repositories":{"type":"boolean","description":"Lock the repositories being migrated at the start of the migration","readOnly":false,"examples":[true]},"exclude_metadata":{"type":"boolean","description":"Indicates whether metadata should be excluded and only git source should be included for the migration.","readOnly":false,"examples":[true]},"exclude_git_data":{"type":"boolean","description":"Indicates whether the repository git data should be excluded from the migration.","readOnly":false,"examples":[true]},"exclude_attachments":{"type":"boolean","description":"Do not include attachments in the migration","readOnly":false,"examples":[true]},"exclude_releases":{"type":"boolean","description":"Do not include releases in the migration","readOnly":false,"examples":[true]},"exclude_owner_projects":{"type":"boolean","description":"Indicates whether projects owned by the organization or users should be excluded.","readOnly":false,"examples":[true]},"org_metadata_only":{"type":"boolean","description":"Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).","default":false,"examples":[true]},"exclude":{"type":"array","items":{"enum":["repositories"],"type":"string","description":"Allowed values that can be passed to the exclude param.","examples":["repositories"]},"description":"Exclude attributes from the API response to improve performance","readOnly":false,"examples":["repositories"]},"repositories":{"type":"array","items":{"type":"string","description":"Repository path, owner and name","examples":["acme\\/widgets"]}}}}';
    public const SCHEMA_TITLE = 'c_05c9447987ae914466a385adc87f4067';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Lock the repositories being migrated at the start of the migration
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
     * Do not include attachments in the migration
     */
    private ?bool $exclude_attachments = null;
    /**
     * Do not include releases in the migration
     */
    private ?bool $exclude_releases = null;
    /**
     * Indicates whether projects owned by the organization or users should be excluded.
     */
    private ?bool $exclude_owner_projects = null;
    /**
     * Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     */
    private ?bool $org_metadata_only = null;
    /**
     * Exclude attributes from the API response to improve performance
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C259209F4A4A76Fdb66057Bc645D8A08D>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C259209F4A4A76Fdb66057Bc645D8A08D::class)
     */
    private array $exclude = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C167C51647D2Ff4Aa36Df0718650E8362>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C167C51647D2Ff4Aa36Df0718650E8362::class)
     */
    private array $repositories = array();
    /**
     * Lock the repositories being migrated at the start of the migration
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
     * Do not include attachments in the migration
     */
    public function exclude_attachments() : ?bool
    {
        return $this->exclude_attachments;
    }
    /**
     * Do not include releases in the migration
     */
    public function exclude_releases() : ?bool
    {
        return $this->exclude_releases;
    }
    /**
     * Indicates whether projects owned by the organization or users should be excluded.
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
     * Exclude attributes from the API response to improve performance
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C259209F4A4A76Fdb66057Bc645D8A08D>
     */
    public function exclude() : array
    {
        return $this->exclude;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C167C51647D2Ff4Aa36Df0718650E8362>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
}
