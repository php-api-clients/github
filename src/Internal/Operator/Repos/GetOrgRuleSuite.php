<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\RuleSuite;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetOrgRuleSuite
{
    public const OPERATION_ID    = 'repos/get-org-rule-suite';
    public const OPERATION_MATCH = 'GET /orgs/{org}/rulesets/rule-suites/{rule_suite_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites\RuleSuiteId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $ruleSuiteId): RuleSuite|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\GetOrgRuleSuite($this->responseSchemaValidator, $this->hydrator, $org, $ruleSuiteId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RuleSuite|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
