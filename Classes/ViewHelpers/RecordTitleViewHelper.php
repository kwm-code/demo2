<?php

namespace Ringer\Demo\ViewHelpers;


use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

class RecordTitleViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     */
    public function initializeArguments()
    {
        $this->registerArgument('table', 'string', 'Table', true);
        $this->registerArgument('id', 'int', 'ID', true);
    }


    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    )
    {

        $record = BackendUtility::getRecord($arguments['table'], $arguments['id']);
        if ($record) {
            return BackendUtility::getRecordTitle($arguments['table'], $record);
        }
        return '';
    }
}
