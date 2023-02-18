<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Comments implements ObjectMapper
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
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReviewComment($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\Links' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReviewComment⚡️Links($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReactionRollup($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Link($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReviewComment(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment
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

                $value = $payload['pull_request_review_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pull_request_review_id';
                    goto after_pull_request_review_id;
                }

                $properties['pull_request_review_id'] = $value;
    
                after_pull_request_review_id:

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

                $value = $payload['diff_hunk'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'diff_hunk';
                    goto after_diff_hunk;
                }

                $properties['diff_hunk'] = $value;
    
                after_diff_hunk:

                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'path';
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['position'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'position';
                    goto after_position;
                }

                $properties['position'] = $value;
    
                after_position:

                $value = $payload['original_position'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'original_position';
                    goto after_original_position;
                }

                $properties['original_position'] = $value;
    
                after_original_position:

                $value = $payload['commit_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commit_id';
                    goto after_commit_id;
                }

                $properties['commit_id'] = $value;
    
                after_commit_id:

                $value = $payload['original_commit_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'original_commit_id';
                    goto after_original_commit_id;
                }

                $properties['original_commit_id'] = $value;
    
                after_original_commit_id:

                $value = $payload['in_reply_to_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'in_reply_to_id';
                    goto after_in_reply_to_id;
                }

                $properties['in_reply_to_id'] = $value;
    
                after_in_reply_to_id:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $properties['user'] = null;
                    goto after_user;
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['body'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body';
                    goto after_body;
                }

                $properties['body'] = $value;
    
                after_body:

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

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['pull_request_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pull_request_url';
                    goto after_pull_request_url;
                }

                $properties['pull_request_url'] = $value;
    
                after_pull_request_url:

                $value = $payload['author_association'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'author_association';
                    goto after_author_association;
                }

                $properties['author_association'] = $value;
    
                after_author_association:

                $value = $payload['_links'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = '_links';
                    goto after__links;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = '_links';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReviewComment⚡️Links($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['_links'] = $value;
    
                after__links:

                $value = $payload['body_text'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_text';
                    goto after_body_text;
                }

                $properties['body_text'] = $value;
    
                after_body_text:

                $value = $payload['body_html'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_html';
                    goto after_body_html;
                }

                $properties['body_html'] = $value;
    
                after_body_html:

                $value = $payload['reactions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'reactions';
                    goto after_reactions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'reactions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReactionRollup($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['reactions'] = $value;
    
                after_reactions:

                $value = $payload['side'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'side';
                    goto after_side;
                }

                $properties['side'] = $value;
    
                after_side:

                $value = $payload['start_side'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'start_side';
                    goto after_start_side;
                }

                $properties['start_side'] = $value;
    
                after_start_side:

                $value = $payload['line'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'line';
                    goto after_line;
                }

                $properties['line'] = $value;
    
                after_line:

                $value = $payload['original_line'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'original_line';
                    goto after_original_line;
                }

                $properties['original_line'] = $value;
    
                after_original_line:

                $value = $payload['start_line'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'start_line';
                    goto after_start_line;
                }

                $properties['start_line'] = $value;
    
                after_start_line:

                $value = $payload['original_start_line'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'original_start_line';
                    goto after_original_start_line;
                }

                $properties['original_start_line'] = $value;
    
                after_original_start_line:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReviewComment⚡️Links(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\Links
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['self'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'self';
                    goto after_self;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'self';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Link($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['self'] = $value;
    
                after_self:

                $value = $payload['html'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html';
                    goto after_html;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'html';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Link($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['html'] = $value;
    
                after_html:

                $value = $payload['pull_request'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pull_request';
                    goto after_pull_request;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pull_request';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Link($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pull_request'] = $value;
    
                after_pull_request:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\Links', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\Links::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\Links(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\Links', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReactionRollup(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup
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

                $value = $payload['total_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_count';
                    goto after_total_count;
                }

                $properties['total_count'] = $value;
    
                after_total_count:

                $value = $payload['__p_l_u_s_e_s_1'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = '__p_l_u_s_e_s_1';
                    goto after__PLUSES_1;
                }

                $properties['_PLUSES_1'] = $value;
    
                after__PLUSES_1:

                $value = $payload['__m_i_n_u_s_1'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = '__m_i_n_u_s_1';
                    goto after__MINUS_1;
                }

                $properties['_MINUS_1'] = $value;
    
                after__MINUS_1:

                $value = $payload['laugh'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'laugh';
                    goto after_laugh;
                }

                $properties['laugh'] = $value;
    
                after_laugh:

                $value = $payload['confused'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'confused';
                    goto after_confused;
                }

                $properties['confused'] = $value;
    
                after_confused:

                $value = $payload['heart'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'heart';
                    goto after_heart;
                }

                $properties['heart'] = $value;
    
                after_heart:

                $value = $payload['hooray'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'hooray';
                    goto after_hooray;
                }

                $properties['hooray'] = $value;
    
                after_hooray:

                $value = $payload['eyes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'eyes';
                    goto after_eyes;
                }

                $properties['eyes'] = $value;
    
                after_eyes:

                $value = $payload['rocket'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'rocket';
                    goto after_rocket;
                }

                $properties['rocket'] = $value;
    
                after_rocket:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Link(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['href'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'href';
                    goto after_href;
                }

                $properties['href'] = $value;
    
                after_href:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReviewComment($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReviewComment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $pull_request_review_id = $object->pull_request_review_id;

        if ($pull_request_review_id === null) {
            goto after_pull_request_review_id;
        }
        after_pull_request_review_id:        $result['pull_request_review_id'] = $pull_request_review_id;

        
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

        
        $diff_hunk = $object->diff_hunk;

        if ($diff_hunk === null) {
            goto after_diff_hunk;
        }
        after_diff_hunk:        $result['diff_hunk'] = $diff_hunk;

        
        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }
        after_path:        $result['path'] = $path;

        
        $position = $object->position;

        if ($position === null) {
            goto after_position;
        }
        after_position:        $result['position'] = $position;

        
        $original_position = $object->original_position;

        if ($original_position === null) {
            goto after_original_position;
        }
        after_original_position:        $result['original_position'] = $original_position;

        
        $commit_id = $object->commit_id;

        if ($commit_id === null) {
            goto after_commit_id;
        }
        after_commit_id:        $result['commit_id'] = $commit_id;

        
        $original_commit_id = $object->original_commit_id;

        if ($original_commit_id === null) {
            goto after_original_commit_id;
        }
        after_original_commit_id:        $result['original_commit_id'] = $original_commit_id;

        
        $in_reply_to_id = $object->in_reply_to_id;
        after_in_reply_to_id:        $result['in_reply_to_id'] = $in_reply_to_id;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        after_user:        $result['user'] = $user;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
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

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $pull_request_url = $object->pull_request_url;

        if ($pull_request_url === null) {
            goto after_pull_request_url;
        }
        after_pull_request_url:        $result['pull_request_url'] = $pull_request_url;

        
        $author_association = $object->author_association;

        if ($author_association === null) {
            goto after_author_association;
        }
        after_author_association:        $result['author_association'] = $author_association;

        
        $_links = $object->_links;

        if ($_links === null) {
            goto after__links;
        }
        $_links = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReviewComment⚡️Links($_links);
        after__links:        $result['_links'] = $_links;

        
        $body_text = $object->body_text;
        after_body_text:        $result['body_text'] = $body_text;

        
        $body_html = $object->body_html;
        after_body_html:        $result['body_html'] = $body_html;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ReactionRollup($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $side = $object->side;
        after_side:        $result['side'] = $side;

        
        $start_side = $object->start_side;

        if ($start_side === null) {
            goto after_start_side;
        }
        after_start_side:        $result['start_side'] = $start_side;

        
        $line = $object->line;
        after_line:        $result['line'] = $line;

        
        $original_line = $object->original_line;
        after_original_line:        $result['original_line'] = $original_line;

        
        $start_line = $object->start_line;

        if ($start_line === null) {
            goto after_start_line;
        }
        after_start_line:        $result['start_line'] = $start_line;

        
        $original_start_line = $object->original_start_line;

        if ($original_start_line === null) {
            goto after_original_start_line;
        }
        after_original_start_line:        $result['original_start_line'] = $original_start_line;


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
