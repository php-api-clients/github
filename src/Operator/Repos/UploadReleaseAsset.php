<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ReleaseAsset;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UploadReleaseAsset
{
    public const OPERATION_ID    = 'repos/upload-release-asset';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/releases/{release_id}/assets';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/releases/{release_id}/assets';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets $hydrator)
    {
    }

    /** @return (Schema\ReleaseAsset | array{code: int}) */
    public function call(string $owner, string $repo, int $releaseId, string $name, string $label, array $params): ReleaseAsset|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\UploadReleaseAsset($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $releaseId, $name, $label);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ReleaseAsset|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
