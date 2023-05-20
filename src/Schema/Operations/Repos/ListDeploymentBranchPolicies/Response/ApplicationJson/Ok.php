<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{"required":["total_count","branch_policies"],"type":"object","properties":{"total_count":{"type":"integer","description":"The number of deployment branch policies for the environment.","examples":[2]},"branch_policies":{"type":"array","items":{"title":"Deployment branch policy","type":"object","properties":{"id":{"type":"integer","description":"The unique identifier of the branch policy.","examples":[361471]},"node_id":{"type":"string","examples":["MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE="]},"name":{"type":"string","description":"The name pattern that branches must match in order to deploy to the environment.","examples":["release\\/*"]}},"description":"Details of a deployment branch policy."}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":2,"branch_policies":[{"id":361471,"node_id":"MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE=","name":"release\\/*"},{"id":361471,"node_id":"MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE=","name":"release\\/*"}]}';

    /**
     * totalCount: The number of deployment branch policies for the environment.
     */
    public function __construct(#[MapFrom('total_count')] public int $totalCount, #[MapFrom('branch_policies')] public array $branchPolicies)
    {
    }
}
