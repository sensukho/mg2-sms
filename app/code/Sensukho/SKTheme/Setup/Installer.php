<?php

/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Sensukho\SKTheme\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface {

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;

    /**
     * @param \Sensukho\SKTheme\Model\Page $page
     * @param \Sensukho\SKTheme\Model\Block $block
     */
    public function __construct(
        \Sensukho\SKTheme\Model\Page $page,
        \Sensukho\SKTheme\Model\Block $block
    ) {
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install() {
        $this->page->install(
                [

                    'Sensukho_SKTheme::DemoPages/pages.csv',
                ]
        );
        $this->block->install(
                [

                    'Sensukho_SKTheme::DemoBlocks/blocks.csv',
                ]
        );
    }

}
