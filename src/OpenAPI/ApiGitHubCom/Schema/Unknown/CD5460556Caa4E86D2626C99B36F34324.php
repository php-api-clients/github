<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CD5460556Caa4E86D2626C99B36F34324
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Add selected repository to an organization secret](https:\\/\\/docs.github.com\\/rest\\/actions\\/secrets#add-selected-repository-to-an-organization-secret) and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/actions#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = 'c_d5460556caa4e86d2626c99b36f34324';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Add selected repository to an organization secret](https://docs.github.com/rest/actions/secrets#add-selected-repository-to-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/rest/reference/actions#remove-selected-repository-from-an-organization-secret) endpoints.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CD5460556Caa4E86D2626C99B36F34324\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CD5460556Caa4E86D2626C99B36F34324\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Add selected repository to an organization secret](https://docs.github.com/rest/actions/secrets#add-selected-repository-to-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/rest/reference/actions#remove-selected-repository-from-an-organization-secret) endpoints.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CD5460556Caa4E86D2626C99B36F34324\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
