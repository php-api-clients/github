<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CAff1Ff7Ec5Ae3D4Fb651Af57240517Ea
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Add selected repository to an organization secret](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/actions\\/secrets#add-selected-repository-to-an-organization-secret) and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/actions#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = 'c_aff1ff7ec5ae3d4fb651af57240517ea';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Add selected repository to an organization secret](https://docs.github.com/github-ae@latest/rest/actions/secrets#add-selected-repository-to-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/github-ae@latest/rest/reference/actions#remove-selected-repository-from-an-organization-secret) endpoints.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CAff1Ff7Ec5Ae3D4Fb651Af57240517Ea\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CAff1Ff7Ec5Ae3D4Fb651Af57240517Ea\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Add selected repository to an organization secret](https://docs.github.com/github-ae@latest/rest/actions/secrets#add-selected-repository-to-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/github-ae@latest/rest/reference/actions#remove-selected-repository-from-an-organization-secret) endpoints.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CAff1Ff7Ec5Ae3D4Fb651Af57240517Ea\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
