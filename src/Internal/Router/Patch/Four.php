<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Patch;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\WebhookConfig|Schema\Authorization|WithoutBody|Schema\ProjectColumn|Schema\FullRepository|Schema\BasicError|Schema\Codespace|iterable<int,Schema\Email> */
    public function call(string $call, array $params, array $pathChunks): WebhookConfig|Authorization|WithoutBody|ProjectColumn|FullRepository|BasicError|Codespace|iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'PATCH /app/hook/config') {
                            return $this->routers->internal🔀Router🔀Patch🔀Apps()->updateWebhookConfigForApp($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'PATCH /applications/{client_id}/token') {
                            return $this->routers->internal🔀Router🔀Patch🔀Apps()->resetToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'PATCH /notifications/threads/{thread_id}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Activity()->markThreadAsRead($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'PATCH /projects/columns/{column_id}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Projects()->updateColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'PATCH /repos/{owner}/{repo}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Repos()->update($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === '{codespace_name}') {
                        if ($call === 'PATCH /user/codespaces/{codespace_name}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Codespaces()->updateForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'email') {
                    if ($pathChunks[3] === 'visibility') {
                        if ($call === 'PATCH /user/email/visibility') {
                            return $this->routers->internal🔀Router🔀Patch🔀Users()->setPrimaryEmailVisibilityForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($pathChunks[3] === '{invitation_id}') {
                        if ($call === 'PATCH /user/repository_invitations/{invitation_id}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Repos()->acceptInvitationForAuthenticatedUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
