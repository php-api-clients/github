<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Post;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\BaseGist;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\OrganizationInvitation;
use ApiClients\Client\GitHub\Schema\OrganizationRole;
use ApiClients\Client\GitHub\Schema\OrgHook;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamFull;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Integration|Authorization|GistComment|WithoutBody|BaseGist|OrgHook|OrganizationInvitation|Migration|OrganizationRole|Json|\ApiClients\Client\GitHub\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|Project|FullRepository|RepositoryRuleset|TeamFull|ProjectColumn|TeamDiscussion
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app-manifests') {
                if ($pathChunks[2] === '{code}') {
                    if ($pathChunks[3] === 'conversions') {
                        if ($call === 'POST /app-manifests/{code}/conversions') {
                            return $this->routers->internal🔀Router🔀Post🔀Apps()->createFromManifest($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'POST /applications/{client_id}/token') {
                            return $this->routers->internal🔀Router🔀Post🔀Apps()->checkToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'POST /gists/{gist_id}/comments') {
                            return $this->routers->internal🔀Router🔀Post🔀Gists()->createComment($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'POST /gists/{gist_id}/forks') {
                            return $this->routers->internal🔀Router🔀Post🔀Gists()->fork($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'hooks') {
                        if ($call === 'POST /orgs/{org}/hooks') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->createWebhook($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'POST /orgs/{org}/invitations') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->createInvitation($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'POST /orgs/{org}/migrations') {
                            return $this->routers->internal🔀Router🔀Post🔀Migrations()->startForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'organization-roles') {
                        if ($call === 'POST /orgs/{org}/organization-roles') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->createCustomOrganizationRole($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'POST /orgs/{org}/personal-access-token-requests') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->reviewPatGrantRequestsInBulk($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'POST /orgs/{org}/personal-access-tokens') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->updatePatAccesses($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'POST /orgs/{org}/projects') {
                            return $this->routers->internal🔀Router🔀Post🔀Projects()->createForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'POST /orgs/{org}/repos') {
                            return $this->routers->internal🔀Router🔀Post🔀Repos()->createInOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($call === 'POST /orgs/{org}/rulesets') {
                            return $this->routers->internal🔀Router🔀Post🔀Repos()->createOrgRuleset($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'POST /orgs/{org}/teams') {
                            return $this->routers->internal🔀Router🔀Post🔀Teams()->create($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'columns') {
                        if ($call === 'POST /projects/{project_id}/columns') {
                            return $this->routers->internal🔀Router🔀Post🔀Projects()->createColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'POST /teams/{team_id}/discussions') {
                            return $this->routers->internal🔀Router🔀Post🔀Teams()->createDiscussionLegacy($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
