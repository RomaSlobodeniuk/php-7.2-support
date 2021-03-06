<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Model\Declaration\Schema\Dto\Columns;

/**
 * Provides nullable flag for element.
 * If column element implement this interface, than it will have NULL or NOT NULL flag in column definition.
 */
interface ColumnNullableAwareInterface
{
    /**
     * Check is element nullable or not.
     *
     * @return array
     */
    public function isNullable();
}
