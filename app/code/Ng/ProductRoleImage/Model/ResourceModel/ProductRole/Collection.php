<?php
namespace Ng\ProductRoleImage\Model\ResourceModel\ProductRole;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Ng\ProductRoleImage\Model\ProductRole as ProductRoleModel;
use Ng\ProductRoleImage\Model\ResourceModel\ProductRole as ProductRoleResource;

/**
 * Class Collection
 * Collection class for Product Role model.
 *
 * @method ProductRoleModel getFirstItem()
 * @method ProductRoleModel getLastItem()
 * @method ProductRoleModel[] getItems()
 */
class Collection extends AbstractCollection
{
    /**
     * Define model and resource model.
     *
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(ProductRoleModel::class, ProductRoleResource::class);
    }
}
