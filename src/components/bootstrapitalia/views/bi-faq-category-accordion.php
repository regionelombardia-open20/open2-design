<?php
/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\design
 * @author    Aria S.p.A. <protocollo@pec.ariaspa.it>
 * @license   GNU General Public License v3.0 <https://www.gnu.org/licenses/gpl-3.0.html>
 * @link      https://www.ariaspa.it/
 *
 * This file is part of OPEN 2.0.
 *
 * OPEN 2.0 is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OPEN 2.0 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OPEN 2.0. If not, see <https://www.gnu.org/licenses/>.
 */

use open20\design\Module;
use open20\design\assets\BootstrapItaliaDesignAsset;


/**
 * Parameters:
 * @var int $htmlId - Base html id to give to accordion
 * @var int $sectionTitle - section title
 * @var int $faqCatId - section title
 * @var string $buttonUrl - BUTTON url at the end of base accordion
 * @var string $buttonText - BUTTON text at the end of base accordion
 * @var string $buttonText - BUTTON text at the end of base accordion
 * @var string $showMoreHelp - Show link to create ticket
 * @var string $textMoreHelp1 - text 1 link create ticket
 * @var string $textMoreHelp2 - text 2 link create ticket
 * @var string $linkCtaMoreHelp -  link creqte ticket
 *
 *
 * @var array $list array of array of 'title' and 'content'
 * [
 *   [
 *     ['title' => 'title 1'],
 *     ['content' => 'lorem ipsum 1 ...']
 *   ],
 *   [
 *     ['title' => 'title 2'],
 *     ['content' => 'lorem ipsum 2...']
 *   ],
 *   [
 *     ['title' => 'title 3'],
 *     ['content' => 'lorem ipsum 3...']
 *   ],
 * ]
 */

$showMoreHelp = isset($showMoreHelp) ? $showMoreHelp : true;

$labelCtaMoreHelp = isset($labelCtaMoreHelp) ? $labelCtaMoreHelp : Module::t('amosdesign', 'Clicca qui');
$titleCtaMoreHelp = isset($titleCtaMoreHelp) ? $titleCtaMoreHelp : Module::t('amosdesign', 'Clicca qui per aprire un nuovo ticket e ricevere supporto!');
$urlCtaMoreHelp = isset($urlCtaMoreHelp) ? $urlCtaMoreHelp : '/ticket/ticket/create?categoriaId=' . $faqCatId;
$targetCtaMoreHelp = isset($targetCtaMoreHelp) ? $targetCtaMoreHelp : '_blank';

$linkCtaMoreHelp = \yii\helpers\Html::a(
    $labelCtaMoreHelp,
    $urlCtaMoreHelp,
    [
        'title' => $titleCtaMoreHelp,
        'target' => $targetCtaMoreHelp
    ]
);

$textMoreHelp1 = isset($textMoreHelp1) ? $textMoreHelp1 : Module::t('amosdesign', '<strong>Hai bisogno di ulteriore assistenza?</strong>');
$textMoreHelp2 = isset($textMoreHelp2) ? $textMoreHelp2 : Module::t('amosdesign', '{cta} per aprire un nuovo ticket e ricevere supporto!', ['cta' => $linkCtaMoreHelp]);

$elementIdCollapse = 'collapse-' . $htmlId;
?>


<div id="collapseDiv<?= $htmlId ?>" class="collapse-div collapse-background-active" role="tablist">
    <div class="collapse-header" id="<?= $htmlId ?>">
        <button data-toggle="collapse" data-target="#<?= $elementIdCollapse ?>" aria-expanded="false"
                aria-controls="<?= $elementIdCollapse ?>">
            <?= $sectionTitle ?>
        </button>
    </div>
    <div id="<?= $elementIdCollapse ?>" class="collapse" role="tabpanel" aria-labelledby="<?= $htmlId ?>">
        <div class="collapse-body">
            <div id="collapseDiv3" class="collapse-div" role="tablist">

                <?php
                $i = 0;
                if (is_array($list)) {
                    foreach ($list as $element) {
                        $subHtmlId = $htmlId . '-' . $i;
                        $subCollapseHtmlId = 'collapse-' . $htmlId . '-' . $i;

                        $title = $element['title'] ?? '';
                        $content = $element['content'] ?? '';
                        ?>
                        <div class="collapse-header" id="<?= $subHtmlId ?>">
                            <button data-toggle="collapse" data-target="#<?= $subCollapseHtmlId ?>"
                                    aria-expanded="false" aria-controls="<?= $subCollapseHtmlId ?>">
                                <div class="d-flex align-items-center"><span class="mdi mdi-help-circle mr-1"></span><?= $title ?></div>
                            </button>
                        </div>
                        <div id="<?= $subCollapseHtmlId ?>" class="collapse" role="tabpanel"
                             aria-labelledby="<?= $subHtmlId ?>">
                            <div class="collapse-body">
                                <?= $content ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                }
                ?>
            </div>

            <?php if ($showMoreHelp) { ?>
                <p class="mt-3 p-2 lightgrey-bg-a1">
                    <?= $textMoreHelp1 . ' ' . $textMoreHelp2 ?>
                </p>
            <?php } ?>
        </div>

    </div>

</div>