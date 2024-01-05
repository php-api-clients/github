<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Reactions;

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

final class ListForTeamDiscussionCommentInOrg
{
    public const OPERATION_ID    = 'reactions/list-for-team-discussion-comment-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;
    /**The number that identifies the comment. **/
    private int $commentNumber;
    /**Returns a single [reaction type](https://docs.github.com/rest/reactions/reactions#about-reactions). Omit this parameter to list all reactions to a team discussion comment. **/
    private string $content;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions $hydrator, string $org, string $teamSlug, int $discussionNumber, int $commentNumber, string $content, int $perPage = 30, int $page = 1)
    {
        $this->org              = $org;
        $this->teamSlug         = $teamSlug;
        $this->discussionNumber = $discussionNumber;
        $this->commentNumber    = $commentNumber;
        $this->content          = $content;
        $this->perPage          = $perPage;
        $this->page             = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{team_slug}', '{discussion_number}', '{comment_number}', '{content}', '{per_page}', '{page}'], [$this->org, $this->teamSlug, $this->discussionNumber, $this->commentNumber, $this->content, $this->perPage, $this->page], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions' . '?content={content}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\Reaction> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Reaction {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Reaction::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\Reaction::class, $body);
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
