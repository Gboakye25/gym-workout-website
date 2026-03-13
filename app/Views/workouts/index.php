<?= $this->include('layouts/header') ?>

<h2><?= $title ?></h2>

<p>Here are some gym workouts:</p>

<ul>
    <?php foreach ($workouts as $workout): ?>
        <li>
            <a href="/workouts/<?= esc($workout['slug']) ?>">
                <?= esc($workout['name']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?= $this->include('layouts/footer') ?>