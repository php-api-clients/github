<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetOrgRuleset
{
    public const OPERATION_ID    = 'repos/get-org-ruleset';
    public const OPERATION_MATCH = 'GET /orgs/{org}/rulesets/{ruleset_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/rulesets/{ruleset_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Rulesets\RulesetId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<RepositoryRuleset>
     **/
    public function call(string $org, int $rulesetId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetOrgRuleset($this->responseSchemaValidator, $this->hydrator, $org, $rulesetId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryRuleset {
            return $operation->createResponse($response);
        });
    }
}
