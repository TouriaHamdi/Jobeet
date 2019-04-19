
    <h1>Jobeet jobs List</h1>

    <a class="newJob" href="<?= url_for('job/new') ?>">New</a>
    <div id="jobs">
        <table class="jobs">
            <?php foreach ($jobeet_jobs as $i => $job): ?>
                <tr class="<?= fmod($i, 2) ? 'even' : 'odd' ?>">
                    <td class="location"><?= $job->getLocation() ?></td>
                    <td class="position">
                        <?=  link_to($job->getPosition(), 'job_show_user' , $job, true) ?>
                    </td>
                    <td class="company"><?= $job->getCompany() ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
