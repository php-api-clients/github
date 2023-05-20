<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Artifact;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetArtifact
{
    public const OPERATION_ID    = 'actions/get-artifact';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Artifact>
     **/
    public function call(string $owner, string $repo, int $artifactId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetArtifact($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $artifactId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Artifact {
            return $operation->createResponse($response);
        });
    }
}
