<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateDeployment\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["ref"],"type":"object","properties":{"ref":{"type":"string","description":"The ref to deploy. This can be a branch, tag, or SHA."},"task":{"type":"string","description":"Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).","default":"deploy"},"auto_merge":{"type":"boolean","description":"Attempts to automatically merge the default branch into the requested ref, if it\'s behind the default branch.","default":true},"required_contexts":{"type":"array","items":{"type":"string"},"description":"The [status](https:\\/\\/docs.github.com\\/rest\\/commits\\/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts."},"payload":{"oneOf":[{"type":"object","additionalProperties":true},{"type":"string","description":"JSON payload with extra information about the deployment.","default":""}]},"environment":{"type":"string","description":"Name for the target deployment environment (e.g., `production`, `staging`, `qa`).","default":"production"},"description":{"type":["string","null"],"description":"Short description of the deployment.","default":""},"transient_environment":{"type":"boolean","description":"Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`","default":false},"production_environment":{"type":"boolean","description":"Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref_null","task":"generated_task_null","auto_merge":false,"required_contexts":["generated_required_contexts_null"],"payload":null,"environment":"generated_environment_null","description":"generated_description_null","transient_environment":false,"production_environment":false}';
    /**
     * ref: The ref to deploy. This can be a branch, tag, or SHA.
     * task: Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).
     * autoMerge: Attempts to automatically merge the default branch into the requested ref, if it's behind the default branch.
     * requiredContexts: The [status](https://docs.github.com/rest/commits/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts.
     * @param ?array<string> $requiredContexts
     * environment: Name for the target deployment environment (e.g., `production`, `staging`, `qa`).
     * description: Short description of the deployment.
     * transientEnvironment: Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`
     * productionEnvironment: Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.
     */
    public function __construct(public string $ref, public ?string $task, #[\EventSauce\ObjectHydrator\MapFrom('auto_merge')] public ?bool $autoMerge, #[\EventSauce\ObjectHydrator\MapFrom('required_contexts')] public ?array $requiredContexts, public mixed $payload, public ?string $environment, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('transient_environment')] public ?bool $transientEnvironment, #[\EventSauce\ObjectHydrator\MapFrom('production_environment')] public ?bool $productionEnvironment)
    {
    }
}
