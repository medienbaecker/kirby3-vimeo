<div class="vimeo-container disabled <?= $class; ?>">
	<?php if (isset($id)) : ?>
		<?= $image; ?>
        <div class="embed-container" style="display: none; padding-bottom: <?= str_replace(',', '.', $image->height() / $image->width() * 100); ?>%">
            <iframe data-src="https://player.vimeo.com/video/<?= $id; ?>?autoplay=1&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
        <div class="vimeo-hint">
            <div class="vimeo-hint-text">
                <div>
                    <h3><?= t('medienbaecker.vimeo.headline'); ?></h3>
                    <p><?= t('medienbaecker.vimeo.text'); ?></p>
                    <button class="vimeo-hint-button"><?= t('medienbaecker.vimeo.buttonText'); ?></button>
                    <div class="vimeo-hint-link-container">
                        <small><a href="https://www.vimeo.com/<?= $id; ?>" class="vimeo-hint-link" target="_blank"><?= t('medienbaecker.vimeo.linkText'); ?></a></small>
                    </div>
                    <div class="youtube-id"><?= t('medienbaecker.vimeo.id'); ?> <?= $id; ?></div>
                </div>
            </div>
        </div>
	<?php endif; ?>
</div>