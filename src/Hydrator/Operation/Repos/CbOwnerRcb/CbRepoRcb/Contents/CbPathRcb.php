<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbPathRcb implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\ContentTree' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ContentTree($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\FileCommit' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit($payload),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($payload),
                'ApiClients\Client\Github\Schema\ContentTree\Links' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ContentTree⚡️Links($payload),
                'ApiClients\Client\Github\Schema\FileCommit\Content' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Content($payload),
                'ApiClients\Client\Github\Schema\FileCommit\Commit' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit($payload),
                'ApiClients\Client\Github\Schema\FileCommit\Content\Links' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Content⚡️Links($payload),
                'ApiClients\Client\Github\Schema\FileCommit\Commit\Author' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Author($payload),
                'ApiClients\Client\Github\Schema\FileCommit\Commit\Tree' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree($payload),
                'ApiClients\Client\Github\Schema\FileCommit\Commit\Verification' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ContentTree(array $payload): \ApiClients\Client\Github\Schema\ContentTree
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'size';
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'path';
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'sha';
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['git_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_url';
                    goto after_git_url;
                }

                $properties['git_url'] = $value;
    
                after_git_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['download_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'download_url';
                    goto after_download_url;
                }

                $properties['download_url'] = $value;
    
                after_download_url:

                $value = $payload['entries'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'entries';
                    goto after_entries;
                }

                $properties['entries'] = $value;
    
                after_entries:

                $value = $payload['_links'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = '_links';
                    goto after__links;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = '_links';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ContentTree⚡️Links($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['_links'] = $value;
    
                after__links:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ContentTree', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ContentTree::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ContentTree(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ContentTree', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit(array $payload): \ApiClients\Client\Github\Schema\FileCommit
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['content'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'content';
                    goto after_content;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'content';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Content($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['content'] = $value;
    
                after_content:

                $value = $payload['commit'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commit';
                    goto after_commit;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'commit';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['commit'] = $value;
    
                after_commit:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\FileCommit::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\FileCommit(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\Github\Schema\ValidationError
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ValidationError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['code'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'code';
                    goto after_code;
                }

                $properties['code'] = $value;
    
                after_code:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ContentTree⚡️Links(array $payload): \ApiClients\Client\Github\Schema\ContentTree\Links
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['git'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git';
                    goto after_git;
                }

                $properties['git'] = $value;
    
                after_git:

                $value = $payload['html'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html';
                    goto after_html;
                }

                $properties['html'] = $value;
    
                after_html:

                $value = $payload['self'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'self';
                    goto after_self;
                }

                $properties['self'] = $value;
    
                after_self:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ContentTree\Links', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ContentTree\Links::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ContentTree\Links(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ContentTree\Links', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Content(array $payload): \ApiClients\Client\Github\Schema\FileCommit\Content
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

                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'path';
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'sha';
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'size';
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

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

                $value = $payload['git_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_url';
                    goto after_git_url;
                }

                $properties['git_url'] = $value;
    
                after_git_url:

                $value = $payload['download_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'download_url';
                    goto after_download_url;
                }

                $properties['download_url'] = $value;
    
                after_download_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['_links'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = '_links';
                    goto after__links;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = '_links';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Content⚡️Links($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['_links'] = $value;
    
                after__links:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Content', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\FileCommit\Content::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\FileCommit\Content(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Content', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit(array $payload): \ApiClients\Client\Github\Schema\FileCommit\Commit
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'sha';
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

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

                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'author';
                    goto after_author;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'author';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Author($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['committer'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'committer';
                    goto after_committer;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'committer';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Author($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['committer'] = $value;
    
                after_committer:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['tree'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'tree';
                    goto after_tree;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tree';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tree'] = $value;
    
                after_tree:

                $value = $payload['parents'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'parents';
                    goto after_parents;
                }

                $properties['parents'] = $value;
    
                after_parents:

                $value = $payload['verification'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'verification';
                    goto after_verification;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'verification';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['verification'] = $value;
    
                after_verification:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Commit', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\FileCommit\Commit::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\FileCommit\Commit(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Commit', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Content⚡️Links(array $payload): \ApiClients\Client\Github\Schema\FileCommit\Content\Links
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['self'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'self';
                    goto after_self;
                }

                $properties['self'] = $value;
    
                after_self:

                $value = $payload['git'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git';
                    goto after_git;
                }

                $properties['git'] = $value;
    
                after_git:

                $value = $payload['html'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html';
                    goto after_html;
                }

                $properties['html'] = $value;
    
                after_html:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Content\Links', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\FileCommit\Content\Links::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\FileCommit\Content\Links(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Content\Links', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Author(array $payload): \ApiClients\Client\Github\Schema\FileCommit\Commit\Author
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['date'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'date';
                    goto after_date;
                }

                $properties['date'] = $value;
    
                after_date:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Commit\Author', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\FileCommit\Commit\Author::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\FileCommit\Commit\Author(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Commit\Author', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree(array $payload): \ApiClients\Client\Github\Schema\FileCommit\Commit\Tree
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

                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'sha';
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Commit\Tree', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\FileCommit\Commit\Tree::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\FileCommit\Commit\Tree(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Commit\Tree', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification(array $payload): \ApiClients\Client\Github\Schema\FileCommit\Commit\Verification
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['verified'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'verified';
                    goto after_verified;
                }

                $properties['verified'] = $value;
    
                after_verified:

                $value = $payload['reason'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'reason';
                    goto after_reason;
                }

                $properties['reason'] = $value;
    
                after_reason:

                $value = $payload['signature'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'signature';
                    goto after_signature;
                }

                $properties['signature'] = $value;
    
                after_signature:

                $value = $payload['payload'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'payload';
                    goto after_payload;
                }

                $properties['payload'] = $value;
    
                after_payload:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Commit\Verification', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\FileCommit\Commit\Verification::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\FileCommit\Commit\Verification(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\FileCommit\Commit\Verification', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\ContentTree' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ContentTree($object),
                'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\Github\Schema\FileCommit' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit($object),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($object),
                'ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ContentTree(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ContentTree);
        $result = [];
        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }
        after_path:        $result['path'] = $path;

        
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

        
        $git_url = $object->git_url;

        if ($git_url === null) {
            goto after_git_url;
        }
        after_git_url:        $result['git_url'] = $git_url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $download_url = $object->download_url;

        if ($download_url === null) {
            goto after_download_url;
        }
        after_download_url:        $result['download_url'] = $download_url;

        
        $entries = $object->entries;
        static $entriesSerializer0;

        if ($entriesSerializer0 === null) {
            $entriesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $entries = $entriesSerializer0->serialize($entries, $this);
        after_entries:        $result['entries'] = $entries;

        
        $_links = $object->_links;

        if ($_links === null) {
            goto after__links;
        }
        $_links = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ContentTree⚡️Links($_links);
        after__links:        $result['_links'] = $_links;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\FileCommit);
        $result = [];
        
        $content = $object->content;

        if ($content === null) {
            goto after_content;
        }
        $content = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Content($content);
        after_content:        $result['content'] = $content;

        
        $commit = $object->commit;

        if ($commit === null) {
            goto after_commit;
        }
        $commit = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️FileCommit⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError);
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503);
        $result = [];
        
        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
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
