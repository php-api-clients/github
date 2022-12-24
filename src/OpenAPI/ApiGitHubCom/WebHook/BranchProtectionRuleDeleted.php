<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook;

final class BranchProtectionRuleDeleted implements \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHookInterface
{
    public function resolve(array $data) : string
    {
        return 'ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\WebhookBranchProtectionRuleDeleted';
    }
}