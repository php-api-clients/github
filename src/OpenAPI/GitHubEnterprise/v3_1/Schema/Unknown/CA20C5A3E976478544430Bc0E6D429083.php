<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CA20C5A3E976478544430Bc0E6D429083
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/actions#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/actions#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = 'c_a20c5a3e976478544430bc0e6d429083';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://docs.github.com/enterprise-server@3.1/rest/reference/actions#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/enterprise-server@3.1/rest/reference/actions#remove-selected-repository-from-an-organization-secret) endpoints.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA20C5A3E976478544430Bc0E6D429083\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA20C5A3E976478544430Bc0E6D429083\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://docs.github.com/enterprise-server@3.1/rest/reference/actions#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/enterprise-server@3.1/rest/reference/actions#remove-selected-repository-from-an-organization-secret) endpoints.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA20C5A3E976478544430Bc0E6D429083\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
