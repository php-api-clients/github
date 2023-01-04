<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C9Fc2B3B8Dd94033A34111C66E1Ab7660
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = 'c_9fc2b3b8dd94033a34111c66e1ab7660';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/rest/reference/codespaces#remove-selected-repository-from-an-organization-secret) endpoints.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C9Fc2B3B8Dd94033A34111C66E1Ab7660\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C9Fc2B3B8Dd94033A34111C66E1Ab7660\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/rest/reference/codespaces#remove-selected-repository-from-an-organization-secret) endpoints.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C9Fc2B3B8Dd94033A34111C66E1Ab7660\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
