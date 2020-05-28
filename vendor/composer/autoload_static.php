<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd71b114fb20897e3b8fb7d6198a685e
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\SrLearningProgressPDBlock\\' => 55,
            'srag\\Plugins\\SrLearningProgressPDBlock\\' => 39,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\SrLearningProgressPDBlock\\' => 35,
            'srag\\CustomInputGUIs\\' => 21,
            'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\' => 50,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\SrLearningProgressPDBlock\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\SrLearningProgressPDBlock\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\SrLearningProgressPDBlock\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'ilSrLearningProgressPDBlockConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilSrLearningProgressPDBlockConfigGUI.php',
        'ilSrLearningProgressPDBlockPlugin' => __DIR__ . '/../..' . '/classes/class.ilSrLearningProgressPDBlockPlugin.php',
        'ilSrLearningProgressPDBlockUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilSrLearningProgressPDBlockUIHookGUI.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\ActiveRecordConfigFactory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\ActiveRecordConfigRepository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\ActiveRecordObjectFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordObjectFormGUI.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\Config\\AbstractFactory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractFactory.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\Config\\AbstractRepository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractRepository.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\Config\\Config' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/Config.php',
        'srag\\ActiveRecordConfig\\SrLearningProgressPDBlock\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\CheckboxInputGUI\\AjaxCheckbox' => __DIR__ . '/..' . '/srag/custominputguis/src/AjaxCheckbox/AjaxCheckbox.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ColorPickerInputGUI\\ColorPickerInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ColorPickerInputGUI/ColorPickerInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\FormBuilder\\AbstractFormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/AbstractFormBuilder.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\FormBuilder\\FormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/FormBuilder.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\InputGUIWrapperUIInputComponent\\AbstractRenderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/AbstractRenderer.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\LearningProgressPieUI\\AbstractLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/AbstractLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\LearningProgressPieUI\\CountLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/CountLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\LearningProgressPieUI\\LearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/LearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\LearningProgressPieUI\\ObjIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/ObjIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\LearningProgressPieUI\\UsrIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/UsrIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\Loader\\CustomInputGUIsLoaderDetector' => __DIR__ . '/..' . '/srag/custominputguis/src/Loader/CustomInputGUIsLoaderDetector.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiSelectSearchNewInputGUI\\AbstractAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/AbstractAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiSelectSearchNewInputGUI\\ObjectChildrenAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectChildrenAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiSelectSearchNewInputGUI\\ObjectsAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectsAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiSelectSearchNewInputGUI\\OrgUnitAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.OrgUnitAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\MultiSelectSearchNewInputGUI\\UsersAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.UsersAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Component\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/LegendEntry.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Component\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChart.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Component\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChartItem.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Component\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/Section.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Component\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/SectionValue.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Implementation\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/LegendEntry.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Implementation\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChart.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Implementation\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChartItem.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Implementation\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Section.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PieChart\\Implementation\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/SectionValue.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Component\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Factory.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Component\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/FixedSize.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Component\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Mini.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Component\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/ProgressMeter.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Component\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Standard.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Implementation\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Factory.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Implementation\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/FixedSize.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Implementation\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Mini.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Implementation\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/ProgressMeter.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ProgressMeter\\Implementation\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Standard.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\SrLearningProgressPDBlock\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Loader\\AbstractLoaderDetector' => __DIR__ . '/..' . '/srag/dic/src/Loader/AbstractLoaderDetector.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrLearningProgressPDBlock\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Access\\Access' => __DIR__ . '/../..' . '/src/Access/Access.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Access\\Courses' => __DIR__ . '/../..' . '/src/Access/Courses.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Access\\Ilias' => __DIR__ . '/../..' . '/src/Access/Ilias.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Access\\LearningProgress' => __DIR__ . '/../..' . '/src/Access/LearningProgress.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Block\\BaseBlock' => __DIR__ . '/../..' . '/src/Block/BaseBlock.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Block\\CoursesBlock' => __DIR__ . '/../..' . '/src/Block/CoursesBlock.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Block\\DashboardBlock' => __DIR__ . '/../..' . '/src/Block/DashboardBlock.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Block\\Factory' => __DIR__ . '/../..' . '/src/Block/Factory.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Block\\Repository' => __DIR__ . '/../..' . '/src/Block/Repository.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Config\\ConfigCtrl' => __DIR__ . '/../..' . '/src/Config/class.ConfigCtrl.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Config\\Factory' => __DIR__ . '/../..' . '/src/Config/Factory.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Config\\Form\\FormBuilder' => __DIR__ . '/../..' . '/src/Config/Form/FormBuilder.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Config\\Repository' => __DIR__ . '/../..' . '/src/Config/Repository.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Repository' => __DIR__ . '/../..' . '/src/Repository.php',
        'srag\\Plugins\\SrLearningProgressPDBlock\\Utils\\SrLearningProgressPDBlockTrait' => __DIR__ . '/../..' . '/src/Utils/SrLearningProgressPDBlockTrait.php',
        'srag\\RemovePluginDataConfirm\\SrLearningProgressPDBlock\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrLearningProgressPDBlock\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrLearningProgressPDBlock\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\SrLearningProgressPDBlock\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd71b114fb20897e3b8fb7d6198a685e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd71b114fb20897e3b8fb7d6198a685e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd71b114fb20897e3b8fb7d6198a685e::$classMap;

        }, null, ClassLoader::class);
    }
}
