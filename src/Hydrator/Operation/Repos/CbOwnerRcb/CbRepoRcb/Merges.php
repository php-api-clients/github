<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Merges implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\GitUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Commit\Tree' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($payload),
                'ApiClients\Client\GitHub\Schema\Verification' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Parents' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Parents($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Stats' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($payload),
                'ApiClients\Client\GitHub\Schema\DiffEntry' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DiffEntry($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit(array $payload): \ApiClients\Client\GitHub\Schema\Commit
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['comments_url'] ?? null;
    
                if ($value === null) {
                    $properties['comments_url'] = null;
                    goto after_comments_url;
                }

                $properties['comments_url'] = $value;
    
                after_comments_url:

                $value = $payload['commit'] ?? null;
    
                if ($value === null) {
                    $properties['commit'] = null;
                    goto after_commit;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'commit';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['commit'] = $value;
    
                after_commit:

                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $properties['author'] = null;
                    goto after_author;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'author';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['committer'] ?? null;
    
                if ($value === null) {
                    $properties['committer'] = null;
                    goto after_committer;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'committer';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['committer'] = $value;
    
                after_committer:

                $value = $payload['parents'] ?? null;
    
                if ($value === null) {
                    $properties['parents'] = null;
                    goto after_parents;
                }

                static $parentsCaster1;
    
                if ($parentsCaster1 === null) {
                    $parentsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Commit\\Parents',
));
                }
    
                $value = $parentsCaster1->cast($value, $this);

                $properties['parents'] = $value;
    
                after_parents:

                $value = $payload['stats'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'stats';
                    goto after_stats;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'stats';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['stats'] = $value;
    
                after_stats:

                $value = $payload['files'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'files';
                    goto after_files;
                }

                static $filesCaster1;
    
                if ($filesCaster1 === null) {
                    $filesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DiffEntry',
));
                }
    
                $value = $filesCaster1->cast($value, $this);

                $properties['files'] = $value;
    
                after_files:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Commit(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit(array $payload): \ApiClients\Client\GitHub\Schema\Commit\Commit
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $properties['author'] = null;
                    goto after_author;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'author';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['committer'] ?? null;
    
                if ($value === null) {
                    $properties['committer'] = null;
                    goto after_committer;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'committer';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['committer'] = $value;
    
                after_committer:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['comment_count'] ?? null;
    
                if ($value === null) {
                    $properties['comment_count'] = null;
                    goto after_comment_count;
                }

                $properties['comment_count'] = $value;
    
                after_comment_count:

                $value = $payload['tree'] ?? null;
    
                if ($value === null) {
                    $properties['tree'] = null;
                    goto after_tree;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tree';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tree'] = $value;
    
                after_tree:

                $value = $payload['verification'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'verification';
                    goto after_verification;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'verification';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['verification'] = $value;
    
                after_verification:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit\Commit::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Commit\Commit(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser(array $payload): \ApiClients\Client\GitHub\Schema\GitUser
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['date'] ?? null;
    
                if ($value === null) {
                    $properties['date'] = null;
                    goto after_date;
                }

                $properties['date'] = $value;
    
                after_date:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GitUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\GitUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree(array $payload): \ApiClients\Client\GitHub\Schema\Commit\Commit\Tree
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit\Commit\Tree::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Commit\Commit\Tree(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification(array $payload): \ApiClients\Client\GitHub\Schema\Verification
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['verified'] ?? null;
    
                if ($value === null) {
                    $properties['verified'] = null;
                    goto after_verified;
                }

                $properties['verified'] = $value;
    
                after_verified:

                $value = $payload['reason'] ?? null;
    
                if ($value === null) {
                    $properties['reason'] = null;
                    goto after_reason;
                }

                $properties['reason'] = $value;
    
                after_reason:

                $value = $payload['payload'] ?? null;
    
                if ($value === null) {
                    $properties['payload'] = null;
                    goto after_payload;
                }

                $properties['payload'] = $value;
    
                after_payload:

                $value = $payload['signature'] ?? null;
    
                if ($value === null) {
                    $properties['signature'] = null;
                    goto after_signature;
                }

                $properties['signature'] = $value;
    
                after_signature:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Verification', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Verification::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Verification(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Verification', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\GitHub\Schema\SimpleUser
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $properties['login'] = null;
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $properties['avatar_url'] = null;
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $properties['gravatar_id'] = null;
                    goto after_gravatar_id;
                }

                $properties['gravatar_id'] = $value;
    
                after_gravatar_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['followers_url'] ?? null;
    
                if ($value === null) {
                    $properties['followers_url'] = null;
                    goto after_followers_url;
                }

                $properties['followers_url'] = $value;
    
                after_followers_url:

                $value = $payload['following_url'] ?? null;
    
                if ($value === null) {
                    $properties['following_url'] = null;
                    goto after_following_url;
                }

                $properties['following_url'] = $value;
    
                after_following_url:

                $value = $payload['gists_url'] ?? null;
    
                if ($value === null) {
                    $properties['gists_url'] = null;
                    goto after_gists_url;
                }

                $properties['gists_url'] = $value;
    
                after_gists_url:

                $value = $payload['starred_url'] ?? null;
    
                if ($value === null) {
                    $properties['starred_url'] = null;
                    goto after_starred_url;
                }

                $properties['starred_url'] = $value;
    
                after_starred_url:

                $value = $payload['subscriptions_url'] ?? null;
    
                if ($value === null) {
                    $properties['subscriptions_url'] = null;
                    goto after_subscriptions_url;
                }

                $properties['subscriptions_url'] = $value;
    
                after_subscriptions_url:

                $value = $payload['organizations_url'] ?? null;
    
                if ($value === null) {
                    $properties['organizations_url'] = null;
                    goto after_organizations_url;
                }

                $properties['organizations_url'] = $value;
    
                after_organizations_url:

                $value = $payload['repos_url'] ?? null;
    
                if ($value === null) {
                    $properties['repos_url'] = null;
                    goto after_repos_url;
                }

                $properties['repos_url'] = $value;
    
                after_repos_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $properties['events_url'] = null;
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['received_events_url'] ?? null;
    
                if ($value === null) {
                    $properties['received_events_url'] = null;
                    goto after_received_events_url;
                }

                $properties['received_events_url'] = $value;
    
                after_received_events_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['site_admin'] ?? null;
    
                if ($value === null) {
                    $properties['site_admin'] = null;
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\SimpleUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Parents(array $payload): \ApiClients\Client\GitHub\Schema\Commit\Parents
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Parents', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit\Parents::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Commit\Parents(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Parents', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats(array $payload): \ApiClients\Client\GitHub\Schema\Commit\Stats
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['additions'] ?? null;
    
                if ($value === null) {
                    $properties['additions'] = null;
                    goto after_additions;
                }

                $properties['additions'] = $value;
    
                after_additions:

                $value = $payload['deletions'] ?? null;
    
                if ($value === null) {
                    $properties['deletions'] = null;
                    goto after_deletions;
                }

                $properties['deletions'] = $value;
    
                after_deletions:

                $value = $payload['total'] ?? null;
    
                if ($value === null) {
                    $properties['total'] = null;
                    goto after_total;
                }

                $properties['total'] = $value;
    
                after_total:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit\Stats::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Commit\Stats(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DiffEntry(array $payload): \ApiClients\Client\GitHub\Schema\DiffEntry
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['filename'] ?? null;
    
                if ($value === null) {
                    $properties['filename'] = null;
                    goto after_filename;
                }

                $properties['filename'] = $value;
    
                after_filename:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $properties['status'] = null;
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

                $value = $payload['additions'] ?? null;
    
                if ($value === null) {
                    $properties['additions'] = null;
                    goto after_additions;
                }

                $properties['additions'] = $value;
    
                after_additions:

                $value = $payload['deletions'] ?? null;
    
                if ($value === null) {
                    $properties['deletions'] = null;
                    goto after_deletions;
                }

                $properties['deletions'] = $value;
    
                after_deletions:

                $value = $payload['changes'] ?? null;
    
                if ($value === null) {
                    $properties['changes'] = null;
                    goto after_changes;
                }

                $properties['changes'] = $value;
    
                after_changes:

                $value = $payload['blob_url'] ?? null;
    
                if ($value === null) {
                    $properties['blob_url'] = null;
                    goto after_blob_url;
                }

                $properties['blob_url'] = $value;
    
                after_blob_url:

                $value = $payload['raw_url'] ?? null;
    
                if ($value === null) {
                    $properties['raw_url'] = null;
                    goto after_raw_url;
                }

                $properties['raw_url'] = $value;
    
                after_raw_url:

                $value = $payload['contents_url'] ?? null;
    
                if ($value === null) {
                    $properties['contents_url'] = null;
                    goto after_contents_url;
                }

                $properties['contents_url'] = $value;
    
                after_contents_url:

                $value = $payload['patch'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'patch';
                    goto after_patch;
                }

                $properties['patch'] = $value;
    
                after_patch:

                $value = $payload['previous_filename'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'previous_filename';
                    goto after_previous_filename;
                }

                $properties['previous_filename'] = $value;
    
                after_previous_filename:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DiffEntry', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DiffEntry::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\DiffEntry(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DiffEntry', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $properties['status'] = null;
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['errors'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'errors';
                    goto after_errors;
                }

                static $errorsCaster1;
    
                if ($errorsCaster1 === null) {
                    $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
                }
    
                $value = $errorsCaster1->cast($value, $this);

                $properties['errors'] = $value;
    
                after_errors:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ValidationError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError\Errors
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['resource'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'resource';
                    goto after_resource;
                }

                $properties['resource'] = $value;
    
                after_resource:

                $value = $payload['field'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'field';
                    goto after_field;
                }

                $properties['field'] = $value;
    
                after_field:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['code'] ?? null;
    
                if ($value === null) {
                    $properties['code'] = null;
                    goto after_code;
                }

                $properties['code'] = $value;
    
                after_code:

                $value = $payload['index'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'index';
                    goto after_index;
                }

                $properties['index'] = $value;
    
                after_index:

                $value = $payload['value'] ?? null;
    
                if ($value === null) {
                    $properties['value'] = null;
                    goto after_value;
                }

                $properties['value'] = $value;
    
                after_value:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ValidationError\Errors(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($object),
                'ApiClients\Client\GitHub\Schema\Commit\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($object),
                'ApiClients\Client\GitHub\Schema\GitUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($object),
                'ApiClients\Client\GitHub\Schema\Commit\Commit\Tree' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($object),
                'ApiClients\Client\GitHub\Schema\Verification' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\Commit\Parents' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Parents($object),
                'ApiClients\Client\GitHub\Schema\Commit\Stats' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($object),
                'ApiClients\Client\GitHub\Schema\DiffEntry' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DiffEntry($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }
        after_sha:        $result['sha'] = $sha;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $comments_url = $object->comments_url;

        if ($comments_url === null) {
            goto after_comments_url;
        }
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commit = $object->commit;

        if ($commit === null) {
            goto after_commit;
        }
        $commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($author);
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }
        $committer = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($committer);
        after_committer:        $result['committer'] = $committer;

        
        $parents = $object->parents;

        if ($parents === null) {
            goto after_parents;
        }
        static $parentsSerializer0;

        if ($parentsSerializer0 === null) {
            $parentsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Commit\\Parents',
));
        }
        
        $parents = $parentsSerializer0->serialize($parents, $this);
        after_parents:        $result['parents'] = $parents;

        
        $stats = $object->stats;
        $stats = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($stats);
        after_stats:        $result['stats'] = $stats;

        
        $files = $object->files;
        static $filesSerializer0;

        if ($filesSerializer0 === null) {
            $filesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DiffEntry',
));
        }
        
        $files = $filesSerializer0->serialize($files, $this);
        after_files:        $result['files'] = $files;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit\Commit);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($author);
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }
        $committer = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($committer);
        after_committer:        $result['committer'] = $committer;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $comment_count = $object->comment_count;

        if ($comment_count === null) {
            goto after_comment_count;
        }
        after_comment_count:        $result['comment_count'] = $comment_count;

        
        $tree = $object->tree;

        if ($tree === null) {
            goto after_tree;
        }
        $tree = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($tree);
        after_tree:        $result['tree'] = $tree;

        
        $verification = $object->verification;
        $verification = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($verification);
        after_verification:        $result['verification'] = $verification;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GitUser);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }
        after_date:        $result['date'] = $date;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit\Commit\Tree);
        $result = [];
        
        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Verification);
        $result = [];
        
        $verified = $object->verified;

        if ($verified === null) {
            goto after_verified;
        }
        after_verified:        $result['verified'] = $verified;

        
        $reason = $object->reason;

        if ($reason === null) {
            goto after_reason;
        }
        after_reason:        $result['reason'] = $reason;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;

        
        $signature = $object->signature;

        if ($signature === null) {
            goto after_signature;
        }
        after_signature:        $result['signature'] = $signature;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleUser);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
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

        
        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $followers_url = $object->followers_url;

        if ($followers_url === null) {
            goto after_followers_url;
        }
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;

        if ($following_url === null) {
            goto after_following_url;
        }
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;

        if ($gists_url === null) {
            goto after_gists_url;
        }
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;

        if ($starred_url === null) {
            goto after_starred_url;
        }
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;

        if ($subscriptions_url === null) {
            goto after_subscriptions_url;
        }
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;

        if ($organizations_url === null) {
            goto after_organizations_url;
        }
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;

        if ($repos_url === null) {
            goto after_repos_url;
        }
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $received_events_url = $object->received_events_url;

        if ($received_events_url === null) {
            goto after_received_events_url;
        }
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $site_admin = $object->site_admin;

        if ($site_admin === null) {
            goto after_site_admin;
        }
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_at = $object->starred_at;
        after_starred_at:        $result['starred_at'] = $starred_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Parents(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit\Parents);
        $result = [];
        
        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit\Stats);
        $result = [];
        
        $additions = $object->additions;

        if ($additions === null) {
            goto after_additions;
        }
        after_additions:        $result['additions'] = $additions;

        
        $deletions = $object->deletions;

        if ($deletions === null) {
            goto after_deletions;
        }
        after_deletions:        $result['deletions'] = $deletions;

        
        $total = $object->total;

        if ($total === null) {
            goto after_total;
        }
        after_total:        $result['total'] = $total;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DiffEntry(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DiffEntry);
        $result = [];
        
        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }
        after_sha:        $result['sha'] = $sha;

        
        $filename = $object->filename;

        if ($filename === null) {
            goto after_filename;
        }
        after_filename:        $result['filename'] = $filename;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $additions = $object->additions;

        if ($additions === null) {
            goto after_additions;
        }
        after_additions:        $result['additions'] = $additions;

        
        $deletions = $object->deletions;

        if ($deletions === null) {
            goto after_deletions;
        }
        after_deletions:        $result['deletions'] = $deletions;

        
        $changes = $object->changes;

        if ($changes === null) {
            goto after_changes;
        }
        after_changes:        $result['changes'] = $changes;

        
        $blob_url = $object->blob_url;

        if ($blob_url === null) {
            goto after_blob_url;
        }
        after_blob_url:        $result['blob_url'] = $blob_url;

        
        $raw_url = $object->raw_url;

        if ($raw_url === null) {
            goto after_raw_url;
        }
        after_raw_url:        $result['raw_url'] = $raw_url;

        
        $contents_url = $object->contents_url;

        if ($contents_url === null) {
            goto after_contents_url;
        }
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $patch = $object->patch;
        after_patch:        $result['patch'] = $patch;

        
        $previous_filename = $object->previous_filename;
        after_previous_filename:        $result['previous_filename'] = $previous_filename;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
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
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError\Errors);
        $result = [];
        
        $resource = $object->resource;
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;
        after_field:        $result['field'] = $field;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $index = $object->index;
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        static $valueSerializer0;

        if ($valueSerializer0 === null) {
            $valueSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $value = $valueSerializer0->serialize($value, $this);
        after_value:        $result['value'] = $value;


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
