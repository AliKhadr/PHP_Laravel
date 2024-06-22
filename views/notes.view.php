<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p> This is the notes page </p>
        <br>
        <ul>
            <?php foreach($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?=$note['id']?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?> 
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <p class="mt-20">
            <a href="/notes/create" class="text-blue-500 hover:underline">Add Note...</a>
        </p>
    </div>
</main>
<?php require('partials/footer.php') ?>