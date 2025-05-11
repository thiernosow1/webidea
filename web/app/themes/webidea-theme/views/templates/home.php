<h1><?php echo $title; ?></h1>
<p><?php echo $description; ?></p>

<h2>Derniers Articles</h2>
<ul>
    <?php foreach ($latest_posts as $post): ?>
        <li>
            <a href="<?php echo get_permalink($post); ?>">
                <?php echo get_the_title($post); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
