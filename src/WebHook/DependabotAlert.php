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
final class DependabotAlert implements \ApiClients\Contracts\OpenAPI\WebHookInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly Hydrator\WebHook\DependabotAlert $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, Hydrator\WebHook\DependabotAlert $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function resolve(array $headers, array $data) : Schema\WebhookDependabotAlertCreated|Schema\WebhookDependabotAlertDismissed|Schema\WebhookDependabotAlertFixed|Schema\WebhookDependabotAlertReintroduced|Schema\WebhookDependabotAlertReopened
    {
        $error = new \RuntimeException('No action matching given headers and data');
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentS::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdS::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventS::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdS::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeS::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryS::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureS::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookDependabotAlertCreated::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookDependabotAlertCreated::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaaa;
            }
        }
        actions_aaaaa:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentT::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdT::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventT::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdT::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeT::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryT::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureT::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookDependabotAlertDismissed::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookDependabotAlertDismissed::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaab;
            }
        }
        actions_aaaab:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentU::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdU::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventU::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdU::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeU::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryU::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureU::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookDependabotAlertFixed::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookDependabotAlertFixed::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaac;
            }
        }
        actions_aaaac:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentV::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdV::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventV::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdV::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeV::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryV::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureV::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookDependabotAlertReintroduced::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookDependabotAlertReintroduced::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaad;
            }
        }
        actions_aaaad:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookDependabotAlertReopened::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookDependabotAlertReopened::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaae;
            }
        }
        actions_aaaae:
        throw $error;
    }
}
