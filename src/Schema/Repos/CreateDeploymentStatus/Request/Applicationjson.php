<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreateDeploymentStatus\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["error","failure","inactive","in_progress","queued","pending","success"],"type":"string","description":"The state of the status. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub."},"target_url":{"type":"string","description":"The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It\'s recommended to use the `log_url` parameter, which replaces `target_url`.","default":""},"log_url":{"type":"string","description":"The full URL of the deployment\'s output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `\\"\\"`","default":""},"description":{"type":"string","description":"A short description of the status. The maximum description length is 140 characters.","default":""},"environment":{"enum":["production","staging","qa"],"type":"string","description":"Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`."},"environment_url":{"type":"string","description":"Sets the URL for accessing your environment. Default: `\\"\\"`","default":""},"auto_inactive":{"type":"boolean","description":"Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status\'s deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true`"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"error","target_url":"generated_target_url_null","log_url":"generated_log_url_null","description":"generated_description_null","environment":"production","environment_url":"generated_environment_url_null","auto_inactive":false}';
    /**
     * state: The state of the status. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub.
     * targetUrl: The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It's recommended to use the `log_url` parameter, which replaces `target_url`.
     * logUrl: The full URL of the deployment's output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `""`
     * description: A short description of the status. The maximum description length is 140 characters.
     * environment: Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`.
     * environmentUrl: Sets the URL for accessing your environment. Default: `""`
     * autoInactive: Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status's deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true`
     */
    public function __construct(public string $state, #[\EventSauce\ObjectHydrator\MapFrom('target_url')] public ?string $targetUrl, #[\EventSauce\ObjectHydrator\MapFrom('log_url')] public ?string $logUrl, public ?string $description, public ?string $environment, #[\EventSauce\ObjectHydrator\MapFrom('environment_url')] public ?string $environmentUrl, #[\EventSauce\ObjectHydrator\MapFrom('auto_inactive')] public ?bool $autoInactive)
    {
    }
}
