<?php
/**
 * Created by PhpStorm.
 * User: Sergii
 * Date: 19.03.2018
 * Time: 12:44
 */

namespace PHPShopify;


class InventoryLevel extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'inventory_levels';

    /**
     * @inheritDoc
     */
    protected $customPostActions = array(
        'adjust',
        'connect',
        'set'
    );
}