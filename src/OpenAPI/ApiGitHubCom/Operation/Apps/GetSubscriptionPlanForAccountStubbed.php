<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetSubscriptionPlanForAccountStubbed
{
    private const OPERATION_ID = 'apps/get-subscription-plan-for-account-stubbed';
    /**account_id parameter**/
    public int $account_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($account_id)
    {
        $this->account_id = $account_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{account_id}'], [$this->account_id], '/marketplace_listing/stubbed/accounts/{account_id}?'));
    }

    function validateResponse(): void
    {
    }
}
