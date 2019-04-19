<?php
    use_stylesheet('job.css');
    use_helper('Text');
    slot(
        'title',
        sprintf('%s is looking for a %s', $job->getCompany(), $job->getPosition()));
?>
<div id="job">
    <h1><?= $job->getCompany() ?></h1>
    <h2><?= $job->getLocation() ?></h2>
    <h3>
        <?= $job->getPosition() ?>
        <small> - <?= $job->getType() ?></small>
    </h3>

    <?php if ($job->getLogo()): ?>
        <div class="logo">
            <a href="<?= $job->getUrl() ?>">
                <img src="/uploads/jobs/<?= $job->getLogo() ?>"
                     alt="<?= $job->getCompany() ?> logo" />
            </a>
        </div>
    <?php endif; ?>

    <div class="description">
        <?= simple_format_text($job->getDescription()) ?>
    </div>

    <h4>How to apply?</h4>

    <p class="how_to_apply"><?= $job->getHowToApply() ?></p>

    <div class="meta">
        <small>posted on <?= $job->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
    </div>

    <div style="padding: 20px 0">
        <a href="<?= url_for('job/edit?id='.$job->getId()) ?>">
            Edit
        </a>
    </div>
</div>