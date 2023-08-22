<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Eight
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<Schema\TeamDiscussionComment>|iterable<Schema\Reaction>|iterable<Schema\CodeScanningAlertInstance>|(iterable<Schema\SecretScanningLocation>|array{code: int}) */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($pathChunks[7] === 'comments') {
                                        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
                                            $matched = true;
                                            if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                                $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\List\Teams::class]->ListDiscussionCommentsInOrgListing($params);
                                        }
                                    } elseif ($pathChunks[7] === 'reactions') {
                                        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                                $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\List\Reactions::class]->ListForTeamDiscussionInOrgListing($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($pathChunks[7] === 'instances') {
                                        if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
                                            $matched = true;
                                            if (array_key_exists(Router\List\CodeScanning::class, $this->router) === false) {
                                                $this->router[Router\List\CodeScanning::class] = new Router\List\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\List\CodeScanning::class]->ListAlertInstancesListing($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'LIST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                                $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\List\Reactions::class]->ListForIssueCommentListing($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                                $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\List\Reactions::class]->ListForPullRequestReviewCommentListing($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($pathChunks[7] === 'locations') {
                                        if ($call === 'LIST /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations') {
                                            $matched = true;
                                            if (array_key_exists(Router\List\SecretScanning::class, $this->router) === false) {
                                                $this->router[Router\List\SecretScanning::class] = new Router\List\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\List\SecretScanning::class]->ListLocationsForAlertListing($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_number}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                                $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\List\Reactions::class]->ListForTeamDiscussionCommentLegacyListing($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
