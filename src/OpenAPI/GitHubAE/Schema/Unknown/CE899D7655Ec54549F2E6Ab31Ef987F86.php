<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CE899D7655Ec54549F2E6Ab31Ef987F86
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all","private"],"type":"string","description":"Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs that can access the runner group."},"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false}}}';
    public const SCHEMA_TITLE = 'c_e899d7655ec54549f2e6ab31ef987f86';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the runner group.
     */
    private string $name;
    /**
     * Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.
     */
    private ?string $visibility = null;
    /**
     * List of repository IDs that can access the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE899D7655Ec54549F2E6Ab31Ef987F86\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE899D7655Ec54549F2E6Ab31Ef987F86\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * List of runner IDs to add to the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE899D7655Ec54549F2E6Ab31Ef987F86\Runners>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE899D7655Ec54549F2E6Ab31Ef987F86\Runners::class)
     */
    private array $runners = array();
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    private ?bool $allows_public_repositories = null;
    /**
     * Name of the runner group.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.
     */
    public function visibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * List of repository IDs that can access the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE899D7655Ec54549F2E6Ab31Ef987F86\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
    /**
     * List of runner IDs to add to the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE899D7655Ec54549F2E6Ab31Ef987F86\Runners>
     */
    public function runners() : array
    {
        return $this->runners;
    }
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    public function allows_public_repositories() : ?bool
    {
        return $this->allows_public_repositories;
    }
}
