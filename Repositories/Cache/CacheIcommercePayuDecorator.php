<?php

namespace Modules\Icommercepayu\Repositories\Cache;

use Modules\Icommercepayu\Repositories\IcommercePayuRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheIcommercePayuDecorator extends BaseCacheDecorator implements IcommercePayuRepository
{
    public function __construct(IcommercePayuRepository $icommercepayu)
    {
        parent::__construct();
        $this->entityName = 'icommercepayu.icommercepayus';
        $this->repository = $icommercepayu;
    }
}