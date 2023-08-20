<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class GetReviewsForRun
{
    public const OPERATION_ID    = 'actions/get-reviews-for-run';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/approvals';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/runs/{run_id}/approvals';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the workflow run. **/
    private int $runId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals $hydrator, string $owner, string $repo, int $runId)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->runId = $runId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{run_id}'], [$this->owner, $this->repo, $this->runId], self::PATH));
    }

    /** @return Observable<Schema\EnvironmentApprovals> */
    public function createResponse(ResponseInterface $response): Observable
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\EnvironmentApprovals {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\EnvironmentApprovals::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\EnvironmentApprovals::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
