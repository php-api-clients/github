<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\WebHook;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
/**
 * @internal
 */
final class WorkflowRun implements \ApiClients\Contracts\OpenAPI\WebHookInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly Hydrator\WebHook\WorkflowRun $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, Hydrator\WebHook\WorkflowRun $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function resolve(array $headers, array $data) : Schema\WebhookWorkflowRunCompleted|Schema\WebhookWorkflowRunInProgress|Schema\WebhookWorkflowRunRequested
    {
        $error = new \RuntimeException('No action matching given headers and data');
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentHN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdHN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventHN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdHN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeHN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryHN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureHN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookWorkflowRunCompleted::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookWorkflowRunCompleted::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaaa;
            }
        }
        actions_aaaaa:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentHO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdHO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventHO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdHO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeHO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryHO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureHO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookWorkflowRunInProgress::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookWorkflowRunInProgress::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaab;
            }
        }
        actions_aaaab:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentHP::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdHP::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventHP::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdHP::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeHP::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryHP::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureHP::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookWorkflowRunRequested::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookWorkflowRunRequested::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaac;
            }
        }
        actions_aaaac:
        throw $error;
    }
}
