<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebHookHeader\UserAgent;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewCommentCreated;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewCommentDeleted;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewCommentEdited;
use ApiClients\Contracts\OpenAPI\WebHookInterface;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use RuntimeException;
use Throwable;

final class PullRequestReviewComment implements WebHookInterface
{
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\WebHook\PullRequestReviewComment $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\WebHook\PullRequestReviewComment $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
    }

    public function resolve(array $headers, array $data): string
    {
        $error = new RuntimeException('No action matching given headers and data');
        if ($headers['content-type'] === 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['User-Agent'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Id'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Event'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Installation-Target-Id'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Installation-Target-Type'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-GitHub-Delivery'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Hub-Signature-256'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(WebhookPullRequestReviewCommentCreated::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return '\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\WebhookPullRequestReviewCommentCreated';
            } catch (Throwable $error) {
                goto actions_aaaaa;
            }
        }

        actions_aaaaa:
        if ($headers['content-type'] === 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['User-Agent'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Id'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Event'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Installation-Target-Id'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Installation-Target-Type'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-GitHub-Delivery'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Hub-Signature-256'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(WebhookPullRequestReviewCommentDeleted::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return '\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\WebhookPullRequestReviewCommentDeleted';
            } catch (Throwable $error) {
                goto actions_aaaab;
            }
        }

        actions_aaaab:
        if ($headers['content-type'] === 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['User-Agent'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Id'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Event'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Installation-Target-Id'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Github-Hook-Installation-Target-Type'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-GitHub-Delivery'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['X-Hub-Signature-256'], Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(WebhookPullRequestReviewCommentEdited::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return '\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\WebhookPullRequestReviewCommentEdited';
            } catch (Throwable $error) {
                goto actions_aaaac;
            }
        }

        actions_aaaac:
        throw $error;
    }
}
