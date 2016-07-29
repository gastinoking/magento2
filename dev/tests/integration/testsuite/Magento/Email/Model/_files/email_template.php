<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
/** @var \Magento\Email\Model\Template $template */
$template = $objectManager->create('Magento\Email\Model\Template');
$template->setOptions(['area' => 'test area', 'store' => 1]);
$template->setData(
    [
        'template_text' =>
            file_get_contents(__DIR__ . '/template_fixture.html'),
        'template_code' => \Magento\Theme\Model\Config\ValidatorTest::TEMPLATE_CODE
    ]
);
$template->save();
