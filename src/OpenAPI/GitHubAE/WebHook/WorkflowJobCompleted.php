<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\WebHook;

final class WorkflowJobCompleted implements \ApiClients\Client\Github\OpenAPI\GitHubAE\WebHookInterface
{
    public function resolve(array $data) : string
    {
        return 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted';
    }
}
