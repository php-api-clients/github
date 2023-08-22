<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\ApiOverview;
use ApiClients\Client\GitHub\Schema\Feed;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use ApiClients\Client\GitHub\Schema\PublicUser;
use ApiClients\Client\GitHub\Schema\RateLimitOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Two
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\GlobalAdvisory>||(Observable<Schema\CodeOfConduct>|array{code: int})|(Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|(Observable<Schema\Event>|(Observable<Schema\BaseGist>|(Observable<Schema\Issue>|(Observable<Schema\LicenseSimple>|(Schema\ApiOverview|(Observable<Schema\Thread>|(Observable<Schema\OrganizationSimple>|(Schema\RateLimitOverview|(Observable<Schema\MinimalRepository>|(Schema\PrivateUser|Schema\PublicUser|(Observable<Schema\SimpleUser>|Observable<string> */
    public function call(string $call, array $params, array $pathChunks): iterable|Integration|Json|Feed|ApiOverview|ResponseInterface|RateLimitOverview|PrivateUser|PublicUser|string
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'advisories') {
                if ($call === 'GET /advisories') {
                    $matched = true;
                    if (array_key_exists(Router\Get\SecurityAdvisories::class, $this->router) === false) {
                        $this->router[Router\Get\SecurityAdvisories::class] = new Router\Get\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\SecurityAdvisories::class]->ListGlobalAdvisories($params);
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($call === 'GET /app') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                        $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Apps::class]->GetAuthenticated($params);
                }
            } elseif ($pathChunks[1] === 'codes_of_conduct') {
                if ($call === 'GET /codes_of_conduct') {
                    $matched = true;
                    if (array_key_exists(Router\Get\CodesOfConduct::class, $this->router) === false) {
                        $this->router[Router\Get\CodesOfConduct::class] = new Router\Get\CodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\CodesOfConduct::class]->GetAllCodesOfConduct($params);
                }
            } elseif ($pathChunks[1] === 'emojis') {
                if ($call === 'GET /emojis') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Emojis::class, $this->router) === false) {
                        $this->router[Router\Get\Emojis::class] = new Router\Get\Emojis($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Emojis::class]->Get($params);
                }
            } elseif ($pathChunks[1] === 'events') {
                if ($call === 'GET /events') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                        $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Activity::class]->ListPublicEvents($params);
                }
            } elseif ($pathChunks[1] === 'feeds') {
                if ($call === 'GET /feeds') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                        $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Activity::class]->GetFeeds($params);
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($call === 'GET /gists') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                        $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Gists::class]->List($params);
                }
            } elseif ($pathChunks[1] === 'issues') {
                if ($call === 'GET /issues') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Issues::class]->List($params);
                }
            } elseif ($pathChunks[1] === 'licenses') {
                if ($call === 'GET /licenses') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Licenses::class, $this->router) === false) {
                        $this->router[Router\Get\Licenses::class] = new Router\Get\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Licenses::class]->GetAllCommonlyUsed($params);
                }
            } elseif ($pathChunks[1] === 'meta') {
                if ($call === 'GET /meta') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Meta::class, $this->router) === false) {
                        $this->router[Router\Get\Meta::class] = new Router\Get\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Meta::class]->Get($params);
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($call === 'GET /notifications') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                        $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Activity::class]->ListNotificationsForAuthenticatedUser($params);
                }
            } elseif ($pathChunks[1] === 'octocat') {
                if ($call === 'GET /octocat') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Meta::class, $this->router) === false) {
                        $this->router[Router\Get\Meta::class] = new Router\Get\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Meta::class]->GetOctocat($params);
                }
            } elseif ($pathChunks[1] === 'organizations') {
                if ($call === 'GET /organizations') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Orgs::class]->List($params);
                }
            } elseif ($pathChunks[1] === 'rate_limit') {
                if ($call === 'GET /rate_limit') {
                    $matched = true;
                    if (array_key_exists(Router\Get\RateLimit::class, $this->router) === false) {
                        $this->router[Router\Get\RateLimit::class] = new Router\Get\RateLimit($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\RateLimit::class]->Get($params);
                }
            } elseif ($pathChunks[1] === 'repositories') {
                if ($call === 'GET /repositories') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Repos::class]->ListPublic($params);
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($call === 'GET /user') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                        $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Users::class]->GetAuthenticated($params);
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($call === 'GET /users') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                        $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Users::class]->List($params);
                }
            } elseif ($pathChunks[1] === 'versions') {
                if ($call === 'GET /versions') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Meta::class, $this->router) === false) {
                        $this->router[Router\Get\Meta::class] = new Router\Get\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Meta::class]->GetAllVersions($params);
                }
            } elseif ($pathChunks[1] === 'zen') {
                if ($call === 'GET /zen') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Meta::class, $this->router) === false) {
                        $this->router[Router\Get\Meta::class] = new Router\Get\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Meta::class]->GetZen($params);
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
