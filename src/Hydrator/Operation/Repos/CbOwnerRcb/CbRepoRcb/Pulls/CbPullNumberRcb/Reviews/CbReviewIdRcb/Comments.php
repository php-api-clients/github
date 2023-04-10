<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

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
            'ApiClients\Client\Github\Schema\ReviewComment' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment($payload),
                'ApiClients\Client\Github\Schema\ReviewComment\Links' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment⚡️Links($payload),
                'ApiClients\Client\Github\Schema\Link' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Link($payload),
                'ApiClients\Client\Github\Schema\ReactionRollup' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ReactionRollup($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment(array $payload): \ApiClients\Client\Github\Schema\ReviewComment
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
                $properties['pullRequestReviewId'] = null;
                goto after_pullRequestReviewId;
            }

            $properties['pullRequestReviewId'] = $value;

            after_pullRequestReviewId:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['diff_hunk'] ?? null;

            if ($value === null) {
                $missingFields[] = 'diff_hunk';
                goto after_diffHunk;
            }

            $properties['diffHunk'] = $value;

            after_diffHunk:

            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['position'] ?? null;

            if ($value === null) {
                $properties['position'] = null;
                goto after_position;
            }

            $properties['position'] = $value;

            after_position:

            $value = $payload['original_position'] ?? null;

            if ($value === null) {
                $missingFields[] = 'original_position';
                goto after_originalPosition;
            }

            $properties['originalPosition'] = $value;

            after_originalPosition:

            $value = $payload['commit_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit_id';
                goto after_commitId;
            }

            $properties['commitId'] = $value;

            after_commitId:

            $value = $payload['original_commit_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'original_commit_id';
                goto after_originalCommitId;
            }

            $properties['originalCommitId'] = $value;

            after_originalCommitId:

            $value = $payload['in_reply_to_id'] ?? null;

            if ($value === null) {
                $properties['inReplyToId'] = null;
                goto after_inReplyToId;
            }

            $properties['inReplyToId'] = $value;

            after_inReplyToId:

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
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['pull_request_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_request_url';
                goto after_pullRequestUrl;
            }

            $properties['pullRequestUrl'] = $value;

            after_pullRequestUrl:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $missingFields[] = '_links';
                goto after_links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'links';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['links'] = $value;

            after_links:

            $value = $payload['body_text'] ?? null;

            if ($value === null) {
                $properties['bodyText'] = null;
                goto after_bodyText;
            }

            $properties['bodyText'] = $value;

            after_bodyText:

            $value = $payload['body_html'] ?? null;

            if ($value === null) {
                $properties['bodyHtml'] = null;
                goto after_bodyHtml;
            }

            $properties['bodyHtml'] = $value;

            after_bodyHtml:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $properties['reactions'] = null;
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ReactionRollup($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['side'] ?? null;

            if ($value === null) {
                $properties['side'] = null;
                goto after_side;
            }

            $properties['side'] = $value;

            after_side:

            $value = $payload['start_side'] ?? null;

            if ($value === null) {
                $properties['startSide'] = null;
                goto after_startSide;
            }

            $properties['startSide'] = $value;

            after_startSide:

            $value = $payload['line'] ?? null;

            if ($value === null) {
                $properties['line'] = null;
                goto after_line;
            }

            $properties['line'] = $value;

            after_line:

            $value = $payload['original_line'] ?? null;

            if ($value === null) {
                $properties['originalLine'] = null;
                goto after_originalLine;
            }

            $properties['originalLine'] = $value;

            after_originalLine:

            $value = $payload['start_line'] ?? null;

            if ($value === null) {
                $properties['startLine'] = null;
                goto after_startLine;
            }

            $properties['startLine'] = $value;

            after_startLine:

            $value = $payload['original_start_line'] ?? null;

            if ($value === null) {
                $properties['originalStartLine'] = null;
                goto after_originalStartLine;
            }

            $properties['originalStartLine'] = $value;

            after_originalStartLine:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ReviewComment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ReviewComment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ReviewComment(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ReviewComment', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment⚡️Links(array $payload): \ApiClients\Client\Github\Schema\ReviewComment\Links
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Link($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['html'] = $value;

            after_html:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_request';
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ReviewComment\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ReviewComment\Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ReviewComment\Links(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ReviewComment\Links', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Link(array $payload): \ApiClients\Client\Github\Schema\Link
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Link', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Link::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Link(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Link', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ReactionRollup(array $payload): \ApiClients\Client\Github\Schema\ReactionRollup
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
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['_PLUSES_1'] ?? null;

            if ($value === null) {
                $missingFields[] = '_PLUSES_1';
                goto after_pluses1;
            }

            $properties['pluses1'] = $value;

            after_pluses1:

            $value = $payload['_MINUS_1'] ?? null;

            if ($value === null) {
                $missingFields[] = '_MINUS_1';
                goto after_minus1;
            }

            $properties['minus1'] = $value;

            after_minus1:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ReactionRollup::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ReactionRollup(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
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
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

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
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\Github\Schema\ReviewComment' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment($object),
            'ApiClients\Client\Github\Schema\ReviewComment\Links' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment⚡️Links($object),
            'ApiClients\Client\Github\Schema\Link' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Link($object),
            'ApiClients\Client\Github\Schema\ReactionRollup' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ReactionRollup($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ReviewComment);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $pullRequestReviewId = $object->pullRequestReviewId;

        if ($pullRequestReviewId === null) {
            goto after_pullRequestReviewId;
        }
        after_pullRequestReviewId:        $result['pull_request_review_id'] = $pullRequestReviewId;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $diffHunk = $object->diffHunk;
        after_diffHunk:        $result['diff_hunk'] = $diffHunk;

        
        $path = $object->path;
        after_path:        $result['path'] = $path;

        
        $position = $object->position;

        if ($position === null) {
            goto after_position;
        }
        after_position:        $result['position'] = $position;

        
        $originalPosition = $object->originalPosition;
        after_originalPosition:        $result['original_position'] = $originalPosition;

        
        $commitId = $object->commitId;
        after_commitId:        $result['commit_id'] = $commitId;

        
        $originalCommitId = $object->originalCommitId;
        after_originalCommitId:        $result['original_commit_id'] = $originalCommitId;

        
        $inReplyToId = $object->inReplyToId;

        if ($inReplyToId === null) {
            goto after_inReplyToId;
        }
        after_inReplyToId:        $result['in_reply_to_id'] = $inReplyToId;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        after_user:        $result['user'] = $user;

        
        $body = $object->body;
        after_body:        $result['body'] = $body;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $pullRequestUrl = $object->pullRequestUrl;
        after_pullRequestUrl:        $result['pull_request_url'] = $pullRequestUrl;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $links = $object->links;
        $links = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment⚡️Links($links);
        after_links:        $result['_links'] = $links;

        
        $bodyText = $object->bodyText;

        if ($bodyText === null) {
            goto after_bodyText;
        }
        after_bodyText:        $result['body_text'] = $bodyText;

        
        $bodyHtml = $object->bodyHtml;

        if ($bodyHtml === null) {
            goto after_bodyHtml;
        }
        after_bodyHtml:        $result['body_html'] = $bodyHtml;

        
        $reactions = $object->reactions;

        if ($reactions === null) {
            goto after_reactions;
        }
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ReactionRollup($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $side = $object->side;

        if ($side === null) {
            goto after_side;
        }
        after_side:        $result['side'] = $side;

        
        $startSide = $object->startSide;

        if ($startSide === null) {
            goto after_startSide;
        }
        after_startSide:        $result['start_side'] = $startSide;

        
        $line = $object->line;

        if ($line === null) {
            goto after_line;
        }
        after_line:        $result['line'] = $line;

        
        $originalLine = $object->originalLine;

        if ($originalLine === null) {
            goto after_originalLine;
        }
        after_originalLine:        $result['original_line'] = $originalLine;

        
        $startLine = $object->startLine;

        if ($startLine === null) {
            goto after_startLine;
        }
        after_startLine:        $result['start_line'] = $startLine;

        
        $originalStartLine = $object->originalStartLine;

        if ($originalStartLine === null) {
            goto after_originalStartLine;
        }
        after_originalStartLine:        $result['original_start_line'] = $originalStartLine;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ReviewComment⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ReviewComment\Links);
        $result = [];

        $self = $object->self;
        $self = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Link($self);
        after_self:        $result['self'] = $self;

        
        $html = $object->html;
        $html = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Link($html);
        after_html:        $result['html'] = $html;

        
        $pullRequest = $object->pullRequest;
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Link($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Link(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Link);
        $result = [];

        $href = $object->href;
        after_href:        $result['href'] = $href;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ReactionRollup(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ReactionRollup);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $pluses1 = $object->pluses1;
        after_pluses1:        $result['_PLUSES_1'] = $pluses1;

        
        $minus1 = $object->minus1;
        after_minus1:        $result['_MINUS_1'] = $minus1;

        
        $laugh = $object->laugh;
        after_laugh:        $result['laugh'] = $laugh;

        
        $confused = $object->confused;
        after_confused:        $result['confused'] = $confused;

        
        $heart = $object->heart;
        after_heart:        $result['heart'] = $heart;

        
        $hooray = $object->hooray;
        after_hooray:        $result['hooray'] = $hooray;

        
        $eyes = $object->eyes;
        after_eyes:        $result['eyes'] = $eyes;

        
        $rocket = $object->rocket;
        after_rocket:        $result['rocket'] = $rocket;


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

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
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
