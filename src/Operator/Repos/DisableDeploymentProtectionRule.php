<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DisableDeploymentProtectionRule
{
    public const OPERATION_ID    = 'repos/disable-deployment-protection-rule';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $environmentName, string $repo, string $owner, int $protectionRuleId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\DisableDeploymentProtectionRule($environmentName, $repo, $owner, $protectionRuleId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
