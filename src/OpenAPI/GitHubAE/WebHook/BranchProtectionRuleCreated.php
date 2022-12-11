<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\WebHook;

final class BranchProtectionRuleCreated implements \ApiClients\Client\Github\OpenAPI\GitHubAE\WebHookInterface
{
    public function resolve(array $data) : string
    {
        return 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated';
    }
}
