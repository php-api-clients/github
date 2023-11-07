<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DisableDeploymentProtectionRule
{
    public const OPERATION_ID    = 'repos/disable-deployment-protection-rule';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}';
    /**The name of the environment. **/
    private string $environmentName;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The unique identifier of the protection rule. **/
    private int $protectionRuleId;

    public function __construct(string $environmentName, string $repo, string $owner, int $protectionRuleId)
    {
        $this->environmentName  = $environmentName;
        $this->repo             = $repo;
        $this->owner            = $owner;
        $this->protectionRuleId = $protectionRuleId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{environment_name}', '{repo}', '{owner}', '{protection_rule_id}'], [$this->environmentName, $this->repo, $this->owner, $this->protectionRuleId], '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
