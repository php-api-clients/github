<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Issues;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
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

final class ListEventsForTimelineListing
{
    public const OPERATION_ID    = 'issues/list-events-for-timeline';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/issues/{issue_number}/timeline';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues/{issue_number}/timeline';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies the issue. **/
    private int $issueNumber;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline $hydrator, string $owner, string $repo, int $issueNumber, int $perPage = 30, int $page = 1)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->issueNumber = $issueNumber;
        $this->perPage     = $perPage;
        $this->page        = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{issue_number}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->issueNumber, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\LabeledIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\LabeledIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\UnlabeledIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\UnlabeledIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaab;
                            }

                            items_application_json_two_hundred_aaaab:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\MilestonedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\MilestonedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaac;
                            }

                            items_application_json_two_hundred_aaaac:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\DemilestonedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\DemilestonedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaad;
                            }

                            items_application_json_two_hundred_aaaad:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RenamedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RenamedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaae;
                            }

                            items_application_json_two_hundred_aaaae:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ReviewRequestedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\ReviewRequestedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaf;
                            }

                            items_application_json_two_hundred_aaaaf:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ReviewRequestRemovedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\ReviewRequestRemovedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaag;
                            }

                            items_application_json_two_hundred_aaaag:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ReviewDismissedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\ReviewDismissedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaah;
                            }

                            items_application_json_two_hundred_aaaah:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\LockedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\LockedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaai;
                            }

                            items_application_json_two_hundred_aaaai:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\AddedToProjectIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\AddedToProjectIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaj;
                            }

                            items_application_json_two_hundred_aaaaj:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\MovedColumnInProjectIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\MovedColumnInProjectIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaak;
                            }

                            items_application_json_two_hundred_aaaak:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RemovedFromProjectIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RemovedFromProjectIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaal;
                            }

                            items_application_json_two_hundred_aaaal:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ConvertedNoteToIssueIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\ConvertedNoteToIssueIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaam;
                            }

                            items_application_json_two_hundred_aaaam:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TimelineCommentEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TimelineCommentEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaan;
                            }

                            items_application_json_two_hundred_aaaan:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TimelineCrossReferencedEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TimelineCrossReferencedEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaao;
                            }

                            items_application_json_two_hundred_aaaao:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TimelineCommittedEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TimelineCommittedEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaap;
                            }

                            items_application_json_two_hundred_aaaap:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TimelineReviewedEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TimelineReviewedEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaq;
                            }

                            items_application_json_two_hundred_aaaaq:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TimelineLineCommentedEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TimelineLineCommentedEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaar;
                            }

                            items_application_json_two_hundred_aaaar:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TimelineCommitCommentedEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TimelineCommitCommentedEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaas;
                            }

                            items_application_json_two_hundred_aaaas:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TimelineAssignedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TimelineAssignedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaat;
                            }

                            items_application_json_two_hundred_aaaat:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TimelineUnassignedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TimelineUnassignedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaau;
                            }

                            items_application_json_two_hundred_aaaau:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\StateChangeIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\StateChangeIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaav;
                            }

                            items_application_json_two_hundred_aaaav:
                            throw $error;
                        });
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Gone
                     **/

                    case 410:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(410, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
