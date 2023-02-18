<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Gists\CbGistIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Forks implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\ForkOf' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple⚡️ForkOf($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\Files' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple⚡️Files($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Files' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist⚡️Files($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['forks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks';
                    goto after_forks;
                }

                $properties['forks'] = $value;
    
                after_forks:

                $value = $payload['history'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'history';
                    goto after_history;
                }

                $properties['history'] = $value;
    
                after_history:

                $value = $payload['fork_of'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'fork_of';
                    goto after_fork_of;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'fork_of';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple⚡️ForkOf($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['fork_of'] = $value;
    
                after_fork_of:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['forks_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks_url';
                    goto after_forks_url;
                }

                $properties['forks_url'] = $value;
    
                after_forks_url:

                $value = $payload['commits_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commits_url';
                    goto after_commits_url;
                }

                $properties['commits_url'] = $value;
    
                after_commits_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['git_pull_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_pull_url';
                    goto after_git_pull_url;
                }

                $properties['git_pull_url'] = $value;
    
                after_git_pull_url:

                $value = $payload['git_push_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_push_url';
                    goto after_git_push_url;
                }

                $properties['git_push_url'] = $value;
    
                after_git_push_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['files'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'files';
                    goto after_files;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'files';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple⚡️Files($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['files'] = $value;
    
                after_files:

                $value = $payload['public'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public';
                    goto after_public;
                }

                $properties['public'] = $value;
    
                after_public:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['comments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments';
                    goto after_comments;
                }

                $properties['comments'] = $value;
    
                after_comments:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user';
                    goto after_user;
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['comments_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments_url';
                    goto after_comments_url;
                }

                $properties['comments_url'] = $value;
    
                after_comments_url:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'owner';
                    goto after_owner;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'owner';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['truncated'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'truncated';
                    goto after_truncated;
                }

                $properties['truncated'] = $value;
    
                after_truncated:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['forks_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks_url';
                    goto after_forks_url;
                }

                $properties['forks_url'] = $value;
    
                after_forks_url:

                $value = $payload['commits_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commits_url';
                    goto after_commits_url;
                }

                $properties['commits_url'] = $value;
    
                after_commits_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['git_pull_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_pull_url';
                    goto after_git_pull_url;
                }

                $properties['git_pull_url'] = $value;
    
                after_git_pull_url:

                $value = $payload['git_push_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_push_url';
                    goto after_git_push_url;
                }

                $properties['git_push_url'] = $value;
    
                after_git_push_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['files'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'files';
                    goto after_files;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'files';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist⚡️Files($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['files'] = $value;
    
                after_files:

                $value = $payload['public'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public';
                    goto after_public;
                }

                $properties['public'] = $value;
    
                after_public:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['comments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments';
                    goto after_comments;
                }

                $properties['comments'] = $value;
    
                after_comments:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $properties['user'] = null;
                    goto after_user;
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['comments_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments_url';
                    goto after_comments_url;
                }

                $properties['comments_url'] = $value;
    
                after_comments_url:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'owner';
                    goto after_owner;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'owner';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['truncated'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'truncated';
                    goto after_truncated;
                }

                $properties['truncated'] = $value;
    
                after_truncated:

                $value = $payload['forks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks';
                    goto after_forks;
                }

                $properties['forks'] = $value;
    
                after_forks:

                $value = $payload['history'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'history';
                    goto after_history;
                }

                $properties['history'] = $value;
    
                after_history:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['errors'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'errors';
                    goto after_errors;
                }

                $properties['errors'] = $value;
    
                after_errors:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple⚡️ForkOf(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\ForkOf
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['forks_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks_url';
                    goto after_forks_url;
                }

                $properties['forks_url'] = $value;
    
                after_forks_url:

                $value = $payload['commits_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commits_url';
                    goto after_commits_url;
                }

                $properties['commits_url'] = $value;
    
                after_commits_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['git_pull_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_pull_url';
                    goto after_git_pull_url;
                }

                $properties['git_pull_url'] = $value;
    
                after_git_pull_url:

                $value = $payload['git_push_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_push_url';
                    goto after_git_push_url;
                }

                $properties['git_push_url'] = $value;
    
                after_git_push_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['files'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'files';
                    goto after_files;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'files';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist⚡️Files($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['files'] = $value;
    
                after_files:

                $value = $payload['public'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public';
                    goto after_public;
                }

                $properties['public'] = $value;
    
                after_public:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['comments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments';
                    goto after_comments;
                }

                $properties['comments'] = $value;
    
                after_comments:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $properties['user'] = null;
                    goto after_user;
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['comments_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments_url';
                    goto after_comments_url;
                }

                $properties['comments_url'] = $value;
    
                after_comments_url:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $properties['owner'] = null;
                    goto after_owner;
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['truncated'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'truncated';
                    goto after_truncated;
                }

                $properties['truncated'] = $value;
    
                after_truncated:

                $value = $payload['forks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks';
                    goto after_forks;
                }

                $properties['forks'] = $value;
    
                after_forks:

                $value = $payload['history'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'history';
                    goto after_history;
                }

                $properties['history'] = $value;
    
                after_history:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\ForkOf', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\ForkOf::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\ForkOf(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\ForkOf', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple⚡️Files(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\Files
        {
            $properties = []; 
            $missingFields = [];
            try {
                
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\Files', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\Files::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\Files(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\Files', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'email';
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'login';
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'avatar_url';
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'gravatar_id';
                    goto after_gravatar_id;
                }

                $properties['gravatar_id'] = $value;
    
                after_gravatar_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['followers_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'followers_url';
                    goto after_followers_url;
                }

                $properties['followers_url'] = $value;
    
                after_followers_url:

                $value = $payload['following_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'following_url';
                    goto after_following_url;
                }

                $properties['following_url'] = $value;
    
                after_following_url:

                $value = $payload['gists_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'gists_url';
                    goto after_gists_url;
                }

                $properties['gists_url'] = $value;
    
                after_gists_url:

                $value = $payload['starred_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_url';
                    goto after_starred_url;
                }

                $properties['starred_url'] = $value;
    
                after_starred_url:

                $value = $payload['subscriptions_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subscriptions_url';
                    goto after_subscriptions_url;
                }

                $properties['subscriptions_url'] = $value;
    
                after_subscriptions_url:

                $value = $payload['organizations_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organizations_url';
                    goto after_organizations_url;
                }

                $properties['organizations_url'] = $value;
    
                after_organizations_url:

                $value = $payload['repos_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repos_url';
                    goto after_repos_url;
                }

                $properties['repos_url'] = $value;
    
                after_repos_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'events_url';
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['received_events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'received_events_url';
                    goto after_received_events_url;
                }

                $properties['received_events_url'] = $value;
    
                after_received_events_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['site_admin'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'site_admin';
                    goto after_site_admin;
                }

                $properties['site_admin'] = $value;
    
                after_site_admin:

                $value = $payload['starred_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_at';
                    goto after_starred_at;
                }

                $properties['starred_at'] = $value;
    
                after_starred_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist⚡️Files(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Files
        {
            $properties = []; 
            $missingFields = [];
            try {
                
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Files', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Files::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Files(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Files', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ValidationError($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple);
        $result = [];
        
        $forks = $object->forks;

        if ($forks === null) {
            goto after_forks;
        }
        static $forksSerializer0;

        if ($forksSerializer0 === null) {
            $forksSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $forks = $forksSerializer0->serialize($forks, $this);
        after_forks:        $result['forks'] = $forks;

        
        $history = $object->history;

        if ($history === null) {
            goto after_history;
        }
        static $historySerializer0;

        if ($historySerializer0 === null) {
            $historySerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $history = $historySerializer0->serialize($history, $this);
        after_history:        $result['history'] = $history;

        
        $fork_of = $object->fork_of;

        if ($fork_of === null) {
            goto after_fork_of;
        }
        $fork_of = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple⚡️ForkOf($fork_of);
        after_fork_of:        $result['fork_of'] = $fork_of;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $forks_url = $object->forks_url;

        if ($forks_url === null) {
            goto after_forks_url;
        }
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $commits_url = $object->commits_url;

        if ($commits_url === null) {
            goto after_commits_url;
        }
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $git_pull_url = $object->git_pull_url;

        if ($git_pull_url === null) {
            goto after_git_pull_url;
        }
        after_git_pull_url:        $result['git_pull_url'] = $git_pull_url;

        
        $git_push_url = $object->git_push_url;

        if ($git_push_url === null) {
            goto after_git_push_url;
        }
        after_git_push_url:        $result['git_push_url'] = $git_push_url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $files = $object->files;

        if ($files === null) {
            goto after_files;
        }
        $files = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️GistSimple⚡️Files($files);
        after_files:        $result['files'] = $files;

        
        $public = $object->public;

        if ($public === null) {
            goto after_public;
        }
        after_public:        $result['public'] = $public;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $comments = $object->comments;

        if ($comments === null) {
            goto after_comments;
        }
        after_comments:        $result['comments'] = $comments;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        after_user:        $result['user'] = $user;

        
        $comments_url = $object->comments_url;

        if ($comments_url === null) {
            goto after_comments_url;
        }
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        
        $truncated = $object->truncated;

        if ($truncated === null) {
            goto after_truncated;
        }
        after_truncated:        $result['truncated'] = $truncated;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $forks_url = $object->forks_url;

        if ($forks_url === null) {
            goto after_forks_url;
        }
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $commits_url = $object->commits_url;

        if ($commits_url === null) {
            goto after_commits_url;
        }
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $git_pull_url = $object->git_pull_url;

        if ($git_pull_url === null) {
            goto after_git_pull_url;
        }
        after_git_pull_url:        $result['git_pull_url'] = $git_pull_url;

        
        $git_push_url = $object->git_push_url;

        if ($git_push_url === null) {
            goto after_git_push_url;
        }
        after_git_push_url:        $result['git_push_url'] = $git_push_url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $files = $object->files;

        if ($files === null) {
            goto after_files;
        }
        $files = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BaseGist⚡️Files($files);
        after_files:        $result['files'] = $files;

        
        $public = $object->public;

        if ($public === null) {
            goto after_public;
        }
        after_public:        $result['public'] = $public;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $comments = $object->comments;

        if ($comments === null) {
            goto after_comments;
        }
        after_comments:        $result['comments'] = $comments;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        after_user:        $result['user'] = $user;

        
        $comments_url = $object->comments_url;

        if ($comments_url === null) {
            goto after_comments_url;
        }
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $owner = $object->owner;
        $owner = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        
        $truncated = $object->truncated;
        after_truncated:        $result['truncated'] = $truncated;

        
        $forks = $object->forks;
        static $forksSerializer0;

        if ($forksSerializer0 === null) {
            $forksSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $forks = $forksSerializer0->serialize($forks, $this);
        after_forks:        $result['forks'] = $forks;

        
        $history = $object->history;
        static $historySerializer0;

        if ($historySerializer0 === null) {
            $historySerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $history = $historySerializer0->serialize($history, $this);
        after_history:        $result['history'] = $history;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
