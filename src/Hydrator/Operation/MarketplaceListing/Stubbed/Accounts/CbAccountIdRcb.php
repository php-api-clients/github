<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbAccountIdRcb implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\MarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($payload),
                'ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($payload),
                'ApiClients\Client\Github\Schema\MarketplaceListingPlan' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase(array $payload): \ApiClients\Client\Github\Schema\MarketplacePurchase
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

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'login';
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['organization_billing_email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_billing_email';
                    goto after_organization_billing_email;
                }

                $properties['organization_billing_email'] = $value;
    
                after_organization_billing_email:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'email';
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['marketplace_pending_change'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'marketplace_pending_change';
                    goto after_marketplace_pending_change;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'marketplace_pending_change';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['marketplace_pending_change'] = $value;
    
                after_marketplace_pending_change:

                $value = $payload['marketplace_purchase'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'marketplace_purchase';
                    goto after_marketplace_purchase;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'marketplace_purchase';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['marketplace_purchase'] = $value;
    
                after_marketplace_purchase:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\MarketplacePurchase(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange(array $payload): \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['is_installed'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_installed';
                    goto after_is_installed;
                }

                $properties['is_installed'] = $value;
    
                after_is_installed:

                $value = $payload['effective_date'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'effective_date';
                    goto after_effective_date;
                }

                $properties['effective_date'] = $value;
    
                after_effective_date:

                $value = $payload['unit_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'unit_count';
                    goto after_unit_count;
                }

                $properties['unit_count'] = $value;
    
                after_unit_count:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['plan'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'plan';
                    goto after_plan;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'plan';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['plan'] = $value;
    
                after_plan:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase(array $payload): \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['billing_cycle'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'billing_cycle';
                    goto after_billing_cycle;
                }

                $properties['billing_cycle'] = $value;
    
                after_billing_cycle:

                $value = $payload['next_billing_date'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'next_billing_date';
                    goto after_next_billing_date;
                }

                $properties['next_billing_date'] = $value;
    
                after_next_billing_date:

                $value = $payload['is_installed'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_installed';
                    goto after_is_installed;
                }

                $properties['is_installed'] = $value;
    
                after_is_installed:

                $value = $payload['unit_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'unit_count';
                    goto after_unit_count;
                }

                $properties['unit_count'] = $value;
    
                after_unit_count:

                $value = $payload['on_free_trial'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'on_free_trial';
                    goto after_on_free_trial;
                }

                $properties['on_free_trial'] = $value;
    
                after_on_free_trial:

                $value = $payload['free_trial_ends_on'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'free_trial_ends_on';
                    goto after_free_trial_ends_on;
                }

                $properties['free_trial_ends_on'] = $value;
    
                after_free_trial_ends_on:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['plan'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'plan';
                    goto after_plan;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'plan';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['plan'] = $value;
    
                after_plan:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan(array $payload): \ApiClients\Client\Github\Schema\MarketplaceListingPlan
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

                $value = $payload['accounts_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'accounts_url';
                    goto after_accounts_url;
                }

                $properties['accounts_url'] = $value;
    
                after_accounts_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'number';
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['monthly_price_in_cents'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'monthly_price_in_cents';
                    goto after_monthly_price_in_cents;
                }

                $properties['monthly_price_in_cents'] = $value;
    
                after_monthly_price_in_cents:

                $value = $payload['yearly_price_in_cents'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'yearly_price_in_cents';
                    goto after_yearly_price_in_cents;
                }

                $properties['yearly_price_in_cents'] = $value;
    
                after_yearly_price_in_cents:

                $value = $payload['price_model'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'price_model';
                    goto after_price_model;
                }

                $properties['price_model'] = $value;
    
                after_price_model:

                $value = $payload['has_free_trial'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_free_trial';
                    goto after_has_free_trial;
                }

                $properties['has_free_trial'] = $value;
    
                after_has_free_trial:

                $value = $payload['unit_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'unit_name';
                    goto after_unit_name;
                }

                $properties['unit_name'] = $value;
    
                after_unit_name:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'state';
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['bullets'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'bullets';
                    goto after_bullets;
                }

                $properties['bullets'] = $value;
    
                after_bullets:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplaceListingPlan::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\MarketplaceListingPlan(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\MarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\MarketplacePurchase);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $organization_billing_email = $object->organization_billing_email;
        after_organization_billing_email:        $result['organization_billing_email'] = $organization_billing_email;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $marketplace_pending_change = $object->marketplace_pending_change;

        if ($marketplace_pending_change === null) {
            goto after_marketplace_pending_change;
        }
        $marketplace_pending_change = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($marketplace_pending_change);
        after_marketplace_pending_change:        $result['marketplace_pending_change'] = $marketplace_pending_change;

        
        $marketplace_purchase = $object->marketplace_purchase;

        if ($marketplace_purchase === null) {
            goto after_marketplace_purchase;
        }
        $marketplace_purchase = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($marketplace_purchase);
        after_marketplace_purchase:        $result['marketplace_purchase'] = $marketplace_purchase;


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
