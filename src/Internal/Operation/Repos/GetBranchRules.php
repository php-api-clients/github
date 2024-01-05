<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal;
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

final class GetBranchRules
{
    public const OPERATION_ID    = 'repos/get-branch-rules';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/rules/branches/{branch}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the branch. Cannot contain wildcard characters. To use wildcard characters in branch names, use [the GraphQL API](https://docs.github.com/graphql). **/
    private string $branch;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch $hydrator, string $owner, string $repo, string $branch, int $perPage = 30, int $page = 1)
    {
        $this->owner   = $owner;
        $this->repo    = $repo;
        $this->branch  = $branch;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{branch}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->branch, $this->perPage, $this->page], '/repos/{owner}/{repo}/rules/branches/{branch}' . '?per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern|Schema\RepositoryRuleWorkflows> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern|Schema\RepositoryRuleWorkflows {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleCreation::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleCreation::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleUpdate::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleUpdate::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaab;
                            }

                            items_application_json_two_hundred_aaaab:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleDeletion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleDeletion::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaac;
                            }

                            items_application_json_two_hundred_aaaac:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleRequiredLinearHistory::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleRequiredLinearHistory::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaad;
                            }

                            items_application_json_two_hundred_aaaad:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleRequiredDeployments::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleRequiredDeployments::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaae;
                            }

                            items_application_json_two_hundred_aaaae:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleRequiredSignatures::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleRequiredSignatures::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaf;
                            }

                            items_application_json_two_hundred_aaaaf:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRulePullRequest::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRulePullRequest::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaag;
                            }

                            items_application_json_two_hundred_aaaag:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleRequiredStatusChecks::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleRequiredStatusChecks::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaah;
                            }

                            items_application_json_two_hundred_aaaah:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleNonFastForward::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleNonFastForward::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaai;
                            }

                            items_application_json_two_hundred_aaaai:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleCommitMessagePattern::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleCommitMessagePattern::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaj;
                            }

                            items_application_json_two_hundred_aaaaj:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleCommitAuthorEmailPattern::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleCommitAuthorEmailPattern::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaak;
                            }

                            items_application_json_two_hundred_aaaak:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleCommitterEmailPattern::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleCommitterEmailPattern::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaal;
                            }

                            items_application_json_two_hundred_aaaal:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleBranchNamePattern::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleBranchNamePattern::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaam;
                            }

                            items_application_json_two_hundred_aaaam:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleTagNamePattern::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleTagNamePattern::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaan;
                            }

                            items_application_json_two_hundred_aaaan:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleWorkflows::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryRuleWorkflows::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaao;
                            }

                            items_application_json_two_hundred_aaaao:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
