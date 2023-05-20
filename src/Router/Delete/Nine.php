<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Nine
{
    private array $router = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($pathChunks[7] === 'comments') {
                                        if ($pathChunks[8] === '{comment_number}') {
                                            if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
                                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Teams::class]->deleteDiscussionCommentInOrg($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] === 'reactions') {
                                        if ($pathChunks[8] === '{reaction_id}') {
                                            if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}') {
                                                if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Reactions::class]->deleteForTeamDiscussion($params);
                                            }
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
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($pathChunks[7] === 'labels') {
                                        if ($pathChunks[8] === '{name}') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}/labels/{name}') {
                                                if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Actions::class]->removeCustomLabelFromSelfHostedRunnerForRepo($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'required_status_checks') {
                                        if ($pathChunks[8] === 'contexts') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
                                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Repos::class]->removeStatusCheckContexts($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($pathChunks[8] === 'apps') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
                                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Repos::class]->removeAppAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'teams') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
                                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Repos::class]->removeTeamAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'users') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
                                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Repos::class]->removeUserAccessRestrictions($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($pathChunks[8] === '{reaction_id}') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}') {
                                                if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Reactions::class]->deleteForIssueComment($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($pathChunks[8] === '{reaction_id}') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}') {
                                                if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Reactions::class]->deleteForPullRequestComment($params);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
