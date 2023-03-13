<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Search;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Topics implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Search⚡️Topics⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHub\Schema\TopicSearchResultItem' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem($payload),
                'ApiClients\Client\GitHub\Schema\SearchResultTextMatches' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SearchResultTextMatches($payload),
                'ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SearchResultTextMatches⚡️Matches($payload),
                'ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related($payload),
                'ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Search⚡️Topics⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_total_count;
            }

            $properties['total_count'] = $value;

            after_total_count:

            $value = $payload['incomplete_results'] ?? null;

            if ($value === null) {
                $missingFields[] = 'incomplete_results';
                goto after_incomplete_results;
            }

            $properties['incomplete_results'] = $value;

            after_incomplete_results:

            $value = $payload['items'] ?? null;

            if ($value === null) {
                $missingFields[] = 'items';
                goto after_items;
            }

            static $itemsCaster1;

            if ($itemsCaster1 === null) {
                $itemsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\TopicSearchResultItem',
));
            }

            $value = $itemsCaster1->cast($value, $this);

            $properties['items'] = $value;

            after_items:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem(array $payload): \ApiClients\Client\GitHub\Schema\TopicSearchResultItem
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

            $value = $payload['display_name'] ?? null;

            if ($value === null) {
                $properties['display_name'] = null;
                goto after_display_name;
            }

            $properties['display_name'] = $value;

            after_display_name:

            $value = $payload['short_description'] ?? null;

            if ($value === null) {
                $properties['short_description'] = null;
                goto after_short_description;
            }

            $properties['short_description'] = $value;

            after_short_description:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['created_by'] ?? null;

            if ($value === null) {
                $properties['created_by'] = null;
                goto after_created_by;
            }

            $properties['created_by'] = $value;

            after_created_by:

            $value = $payload['released'] ?? null;

            if ($value === null) {
                $properties['released'] = null;
                goto after_released;
            }

            $properties['released'] = $value;

            after_released:

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

            $value = $payload['featured'] ?? null;

            if ($value === null) {
                $missingFields[] = 'featured';
                goto after_featured;
            }

            $properties['featured'] = $value;

            after_featured:

            $value = $payload['curated'] ?? null;

            if ($value === null) {
                $missingFields[] = 'curated';
                goto after_curated;
            }

            $properties['curated'] = $value;

            after_curated:

            $value = $payload['score'] ?? null;

            if ($value === null) {
                $missingFields[] = 'score';
                goto after_score;
            }

            $properties['score'] = $value;

            after_score:

            $value = $payload['repository_count'] ?? null;

            if ($value === null) {
                $properties['repository_count'] = null;
                goto after_repository_count;
            }

            $properties['repository_count'] = $value;

            after_repository_count:

            $value = $payload['logo_url'] ?? null;

            if ($value === null) {
                $properties['logo_url'] = null;
                goto after_logo_url;
            }

            $properties['logo_url'] = $value;

            after_logo_url:

            $value = $payload['text_matches'] ?? null;

            if ($value === null) {
                $properties['text_matches'] = null;
                goto after_text_matches;
            }

            static $text_matchesCaster1;

            if ($text_matchesCaster1 === null) {
                $text_matchesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SearchResultTextMatches',
));
            }

            $value = $text_matchesCaster1->cast($value, $this);

            $properties['text_matches'] = $value;

            after_text_matches:

            $value = $payload['related'] ?? null;

            if ($value === null) {
                $properties['related'] = null;
                goto after_related;
            }

            static $relatedCaster1;

            if ($relatedCaster1 === null) {
                $relatedCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\TopicSearchResultItem\\Related',
));
            }

            $value = $relatedCaster1->cast($value, $this);

            $properties['related'] = $value;

            after_related:

            $value = $payload['aliases'] ?? null;

            if ($value === null) {
                $properties['aliases'] = null;
                goto after_aliases;
            }

            static $aliasesCaster1;

            if ($aliasesCaster1 === null) {
                $aliasesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\TopicSearchResultItem\\Related',
));
            }

            $value = $aliasesCaster1->cast($value, $this);

            $properties['aliases'] = $value;

            after_aliases:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TopicSearchResultItem', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TopicSearchResultItem::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\TopicSearchResultItem(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TopicSearchResultItem', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SearchResultTextMatches(array $payload): \ApiClients\Client\GitHub\Schema\SearchResultTextMatches
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['object_url'] ?? null;

            if ($value === null) {
                $properties['object_url'] = null;
                goto after_object_url;
            }

            $properties['object_url'] = $value;

            after_object_url:

            $value = $payload['object_type'] ?? null;

            if ($value === null) {
                $properties['object_type'] = null;
                goto after_object_type;
            }

            $properties['object_type'] = $value;

            after_object_type:

            $value = $payload['property'] ?? null;

            if ($value === null) {
                $properties['property'] = null;
                goto after_property;
            }

            $properties['property'] = $value;

            after_property:

            $value = $payload['fragment'] ?? null;

            if ($value === null) {
                $properties['fragment'] = null;
                goto after_fragment;
            }

            $properties['fragment'] = $value;

            after_fragment:

            $value = $payload['matches'] ?? null;

            if ($value === null) {
                $properties['matches'] = null;
                goto after_matches;
            }

            static $matchesCaster1;

            if ($matchesCaster1 === null) {
                $matchesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SearchResultTextMatches\\Matches',
));
            }

            $value = $matchesCaster1->cast($value, $this);

            $properties['matches'] = $value;

            after_matches:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SearchResultTextMatches', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SearchResultTextMatches::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SearchResultTextMatches(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SearchResultTextMatches', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SearchResultTextMatches⚡️Matches(array $payload): \ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['text'] ?? null;

            if ($value === null) {
                $properties['text'] = null;
                goto after_text;
            }

            $properties['text'] = $value;

            after_text:

            $value = $payload['indices'] ?? null;

            if ($value === null) {
                $properties['indices'] = null;
                goto after_indices;
            }

            $properties['indices'] = $value;

            after_indices:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related(array $payload): \ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['topic_relation'] ?? null;

            if ($value === null) {
                $properties['topic_relation'] = null;
                goto after_topic_relation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'topic_relation';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['topic_relation'] = $value;

            after_topic_relation:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation(array $payload): \ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['topic_id'] ?? null;

            if ($value === null) {
                $properties['topic_id'] = null;
                goto after_topic_id;
            }

            $properties['topic_id'] = $value;

            after_topic_id:

            $value = $payload['relation_type'] ?? null;

            if ($value === null) {
                $properties['relation_type'] = null;
                goto after_relation_type;
            }

            $properties['relation_type'] = $value;

            after_relation_type:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Search⚡️Topics⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHub\Schema\TopicSearchResultItem' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem($object),
            'ApiClients\Client\GitHub\Schema\SearchResultTextMatches' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SearchResultTextMatches($object),
            'ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SearchResultTextMatches⚡️Matches($object),
            'ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related($object),
            'ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Search⚡️Topics⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200);
        $result = [];

        $total_count = $object->total_count;
        after_total_count:        $result['total_count'] = $total_count;

        
        $incomplete_results = $object->incomplete_results;
        after_incomplete_results:        $result['incomplete_results'] = $incomplete_results;

        
        $items = $object->items;
        static $itemsSerializer0;

        if ($itemsSerializer0 === null) {
            $itemsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\TopicSearchResultItem',
));
        }
        
        $items = $itemsSerializer0->serialize($items, $this);
        after_items:        $result['items'] = $items;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TopicSearchResultItem);
        $result = [];

        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $display_name = $object->display_name;

        if ($display_name === null) {
            goto after_display_name;
        }
        after_display_name:        $result['display_name'] = $display_name;

        
        $short_description = $object->short_description;

        if ($short_description === null) {
            goto after_short_description;
        }
        after_short_description:        $result['short_description'] = $short_description;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $created_by = $object->created_by;

        if ($created_by === null) {
            goto after_created_by;
        }
        after_created_by:        $result['created_by'] = $created_by;

        
        $released = $object->released;

        if ($released === null) {
            goto after_released;
        }
        after_released:        $result['released'] = $released;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $featured = $object->featured;
        after_featured:        $result['featured'] = $featured;

        
        $curated = $object->curated;
        after_curated:        $result['curated'] = $curated;

        
        $score = $object->score;
        after_score:        $result['score'] = $score;

        
        $repository_count = $object->repository_count;

        if ($repository_count === null) {
            goto after_repository_count;
        }
        after_repository_count:        $result['repository_count'] = $repository_count;

        
        $logo_url = $object->logo_url;

        if ($logo_url === null) {
            goto after_logo_url;
        }
        after_logo_url:        $result['logo_url'] = $logo_url;

        
        $text_matches = $object->text_matches;

        if ($text_matches === null) {
            goto after_text_matches;
        }
        static $text_matchesSerializer0;

        if ($text_matchesSerializer0 === null) {
            $text_matchesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SearchResultTextMatches',
));
        }
        
        $text_matches = $text_matchesSerializer0->serialize($text_matches, $this);
        after_text_matches:        $result['text_matches'] = $text_matches;

        
        $related = $object->related;

        if ($related === null) {
            goto after_related;
        }
        static $relatedSerializer0;

        if ($relatedSerializer0 === null) {
            $relatedSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\TopicSearchResultItem\\Related',
));
        }
        
        $related = $relatedSerializer0->serialize($related, $this);
        after_related:        $result['related'] = $related;

        
        $aliases = $object->aliases;

        if ($aliases === null) {
            goto after_aliases;
        }
        static $aliasesSerializer0;

        if ($aliasesSerializer0 === null) {
            $aliasesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\TopicSearchResultItem\\Related',
));
        }
        
        $aliases = $aliasesSerializer0->serialize($aliases, $this);
        after_aliases:        $result['aliases'] = $aliases;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SearchResultTextMatches(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SearchResultTextMatches);
        $result = [];

        $object_url = $object->object_url;

        if ($object_url === null) {
            goto after_object_url;
        }
        after_object_url:        $result['object_url'] = $object_url;

        
        $object_type = $object->object_type;

        if ($object_type === null) {
            goto after_object_type;
        }
        after_object_type:        $result['object_type'] = $object_type;

        
        $property = $object->property;

        if ($property === null) {
            goto after_property;
        }
        after_property:        $result['property'] = $property;

        
        $fragment = $object->fragment;

        if ($fragment === null) {
            goto after_fragment;
        }
        after_fragment:        $result['fragment'] = $fragment;

        
        $matches = $object->matches;

        if ($matches === null) {
            goto after_matches;
        }
        static $matchesSerializer0;

        if ($matchesSerializer0 === null) {
            $matchesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SearchResultTextMatches\\Matches',
));
        }
        
        $matches = $matchesSerializer0->serialize($matches, $this);
        after_matches:        $result['matches'] = $matches;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SearchResultTextMatches⚡️Matches(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches);
        $result = [];

        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }
        after_text:        $result['text'] = $text;

        
        $indices = $object->indices;

        if ($indices === null) {
            goto after_indices;
        }
        static $indicesSerializer0;

        if ($indicesSerializer0 === null) {
            $indicesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $indices = $indicesSerializer0->serialize($indices, $this);
        after_indices:        $result['indices'] = $indices;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related);
        $result = [];

        $topic_relation = $object->topic_relation;

        if ($topic_relation === null) {
            goto after_topic_relation;
        }
        $topic_relation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($topic_relation);
        after_topic_relation:        $result['topic_relation'] = $topic_relation;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $topic_id = $object->topic_id;

        if ($topic_id === null) {
            goto after_topic_id;
        }
        after_topic_id:        $result['topic_id'] = $topic_id;

        
        $relation_type = $object->relation_type;

        if ($relation_type === null) {
            goto after_relation_type;
        }
        after_relation_type:        $result['relation_type'] = $relation_type;


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
