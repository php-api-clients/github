<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\SetSelectedReposForOrgSecret\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_repository_ids":[13]}';
    /**
     * selected_repository_ids: An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/rest/reference/codespaces#remove-selected-repository-from-an-organization-secret) endpoints.
     * @param ?array<int> $selected_repository_ids
     */
    public function __construct(public ?array $selected_repository_ids)
    {
    }
}
